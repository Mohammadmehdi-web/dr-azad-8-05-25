<?php
include 'check_session.php';
include('header.php');
?>
<!-- END SIDEBAR-->
<div class="content-wrapper">
    <!-- START PAGE CONTENT-->

    <div class="page-content fade-in-up">
        <div class="ibox">
            <div class="ibox-head d-flex justify-content-between align-items-center pt-4 pb-5" style="flex-wrap: wrap;">
                <div class="ibox-title">Book Appointment List</div>

                <div class="ibox-tools d-flex align-items-center">
                    <label class="mr-2 mb-0">Search</label>
                    <input type="text" id="searchInput" class="form-control" placeholder="Search by A-Z"
                        onkeyup="filterAppointments()" style="min-width: 200px;" />
                </div>
            </div>

            <div class="ibox-body mt-3">
                <div class="form-row p-3">
                    <div class="form-group col-md-4">
                        <label class="fw-bold">Time Slot</label>
                        <select class="form-control" id="timeSlotSelect" onchange="filterAppointments()">
                            <option value="">Select Time Slot</option>
                        </select>
                    </div>

                    <div class="form-group col-md-4">
                        <label class="fw-bold">From Date</label>
                        <input type="date" class="form-control" id="fromDateInput" onchange="filterAppointments()">
                    </div>
                    <div class="form-group col-md-4">
                        <label class="fw-bold">To Date</label>
                        <input type="date" class="form-control" id="toDateInput" onchange="filterAppointments()">
                    </div>
                </div>
            </div>


            <div class="ibox-body">
                <table class="table table-striped table-bordered table-hover appointmentsTable" id="example-table"
                    cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>S.No.</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Problem</th>
                            <th>City</th>
                            <th>Disease</th>
                            <th>Fees</th>
                            <th>Appointment Date</th>
                            <th>Appointment Time</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include('../db_con.php');
                        $fetch_query = "SELECT * FROM book_appointement";
                        $result = mysqli_query($con, $fetch_query);
                        $i = 1;
                        while ($row = mysqli_fetch_array($result))
                        {
                            ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['phone']; ?></td>
                                <td><?php echo $row['problem']; ?></td>
                                <td><?php echo $row['city_name']; ?></td>
                                <td><?php echo $row['disease']; ?></td>
                                <td>₹<?php echo $row['fees']; ?></td>
                                <td><?php echo $row['appointment_date']; ?></td>
                                <td><?php echo $row['appointment_time']; ?></td>
                                <td>
                                    <form method="POST" action="book_dlt.php">
                                        <input type="hidden" name="user_id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" class="btn btn-danger btn-xs" name="delete"
                                            onclick="return confirm('Are you sure?')">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <?php
                            $i++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>

        </div>

    </div>
    <style>
        .dataTables_length {
            display: none;
        }

        .dataTables_filter {
            display: none;
        }

        label {
            display: inline-block;
            margin-bottom: 1rem;
            font-size: 15px;
            font-weight: bold;
        }
    </style>
    <?php
    include('footer.php');
    ?>
    <script>
        function filterAppointments() {
            const searchInput = document.getElementById('searchInput').value.toLowerCase();
            const timeSlot = document.getElementById('timeSlotSelect').value;
            const fromDate = document.getElementById('fromDateInput').value;
            const toDate = document.getElementById('toDateInput').value;

            fetch('filter_appointments.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({
                    searchText: searchInput,
                    timeSlot: timeSlot,
                    fromDate: fromDate,
                    toDate: toDate
                })
            })
                .then(response => response.json())
                .then(data => {
                    const tableBody = document.querySelector('#example-table tbody');
                    tableBody.innerHTML = '';

                    if (data.length === 0) {
                        tableBody.innerHTML = '<tr><td colspan="10" class="text-center">No appointments found.</td></tr>';
                        return;
                    }

                    data.forEach((item, index) => {
                        const row = `
                <tr>
                    <td>${index + 1}</td>
                    <td>${item.name}</td>
                    <td>${item.phone}</td>
                    <td>${item.problem}</td>
                    <td>${item.city_name}</td>
                    <td>${item.disease}</td>
                    <td>₹${item.fees}</td>
                    <td>${item.appointment_date}</td>
                    <td>${item.appointment_time}</td>
                    <td>
                        <form method="POST" action="book_dlt.php">
                            <input type="hidden" name="user_id" value="${item.id}">
                            <button type="submit" class="btn btn-danger btn-xs" name="delete"
                                onclick="return confirm('Are you sure?')">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>`;
                        tableBody.innerHTML += row;
                    });
                })
                .catch(error => console.error('Error:', error));
        }

        document.addEventListener('DOMContentLoaded', () => {
            // Bind change and input listeners
            document.getElementById('searchInput').addEventListener('input', filterAppointments);
            document.getElementById('timeSlotSelect').addEventListener('change', filterAppointments);
            document.getElementById('fromDateInput').addEventListener('change', filterAppointments);
            document.getElementById('toDateInput').addEventListener('change', filterAppointments);

            // Load time slots
            fetch('get_time_slots.php')
                .then(response => response.json())
                .then(timeSlots => {
                    const select = document.getElementById('timeSlotSelect');
                    timeSlots.forEach(slot => {
                        const option = document.createElement('option');
                        option.value = slot;
                        option.textContent = slot;
                        select.appendChild(option);
                    });
                })
                .catch(error => console.error('Failed to load time slots:', error));
        });
    </script>

    <!-- 
    <script>
        function filterAppointments() {
            const input = document.getElementById('searchInput').value.toLowerCase();
            const rows = document.querySelectorAll('#example-table tbody tr');

            rows.forEach(row => {
                const name = row.cells[1].textContent.toLowerCase();
                const date = row.cells[7].textContent.toLowerCase();

                row.style.display = (name.includes(input) || date.includes(input)) ? '' : 'none';
            });
        }
    </script> -->