<?php

include('../db_con.php');

if (isset($_POST['submit'])) {
   
    $con->begin_transaction();

    try {
    
        $blog_url_first = $_POST['blog_url'];
        $blog_url = str_replace(' ', '-', $blog_url_first);
        $blog_heading = $_POST['blog_heading'];

        $blog_desc_first = $_POST['blog_desc_first'];
        $blog_desc_second = $_POST['blog_desc_second'];
        $blog_point_one = $_POST['blog_point_one'];
        $blog_point_two = $_POST['blog_point_two'];
        $blog_desc_two = $_POST['blog_desc_two'];

      
        $sql = "INSERT INTO blogs (blog_url, blog_heading, blog_desc_first, blog_desc_second, blog_point_one, blog_point_two, blog_desc_two)
                VALUES (?, ?, ?, ?, ?, ?, ?)";

        $stmt = $con->prepare($sql);
        $stmt->bind_param("sssssss", $blog_url, $blog_heading, $blog_desc_first, $blog_desc_second, $blog_point_one, $blog_point_two, $blog_desc_two);

        if (!$stmt->execute()) {
            throw new Exception("Error inserting product: " . $stmt->error);
        }

        
        $product_id = $stmt->insert_id;

      
        $target_dir = "../blog/blog_uploads/";
        foreach ($_FILES['images']['name'] as $key => $image_name) {
            $target_file = $target_dir . basename($image_name);

            
            if (move_uploaded_file($_FILES['images']['tmp_name'][$key], $target_file)) {
               
                $sql = "INSERT INTO blogs_images (blog_id, image) VALUES (?, ?)";
                $stmt = $con->prepare($sql);
                $stmt->bind_param("is", $product_id, $image_name);

                if (!$stmt->execute()) {
                    throw new Exception("Error inserting image: " . $stmt->error);
                }
            } else {
                throw new Exception("Error uploading image: $image_name");
            }
        }

        if (isset($_FILES['logos'])) {
            foreach ($_FILES['logos']['name'] as $key => $logo_name) {
              
                if ($_FILES['logos']['error'][$key] == 0) {
                    $logo_target_file = $target_dir . basename($logo_name);
                    
                   
                    if (move_uploaded_file($_FILES['logos']['tmp_name'][$key], $logo_target_file)) {
                       
                        $sql = "INSERT INTO blogs_images (blog_id, logos) VALUES (?, ?)";
                        $stmt = $con->prepare($sql);
                        $stmt->bind_param("is", $product_id, $logo_name); 
                        
                        if (!$stmt->execute()) {
                            throw new Exception("Error inserting logo: " . $stmt->error);
                        }
                    } else {
                        throw new Exception("Error uploading logo: $logo_name");
                    }
                } else {
                    throw new Exception("Error uploading logo: " . $_FILES['logos']['error'][$key]);
                }
            }
        }

        $con->commit();
        header('location:blog_list');
    } catch (Exception $e) {
       
        $con->rollback();
        echo "Failed to insert product and images: " . $e->getMessage();
    }
    $stmt->close();
    $con->close();
}
?>