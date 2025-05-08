<?php
if(isset($_POST['delete']))
{
   include '../db_con.php';
   $user_id =$_POST['user_id'];

   $del_que ="delete from book_appointement where id =$user_id";
   mysqli_query($con,$del_que);

?>

<script>
    alert('Data deleted successfully!');
    window.location='booklist.php';
</script>

<?php
}
else
{
    header('location:booklist.php');
}
?>