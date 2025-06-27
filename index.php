<?php include('header.php') ?>
<?php include('dbConn.php') ?>
<?php include ('insert_data.php')?>

<div class=" box1">
    <h2>All Students</h2>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Students </button>
</div>


<table class="table table-hover table-bordererd table-striped">
    <tr>
        <th>Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>
    </tr>

    <?php

    $query = "SELECT * FROM students";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query Failed" . mysqli_error($conn));
    } else {
        while ($row = mysqli_fetch_assoc($result)) {
    ?>


            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['first_name']; ?></td>
                <td><?php echo $row['last_name']; ?></td>
                <td><?php echo $row['age']; ?></td>
            </tr>

    <?php

        }
    }


    ?>
</table>

<?php

    if (isset($_GET['msg'])) {
        echo "<div class='alert alert-danger' role='alert'>" . $_GET['msg'] . "</div>";
    }
?>


    
<!-- Bootstrap 5 Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="insert_data.php" method="post">    
    <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Student</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                     
                        <div class="form-group">
                            <lable for="f_name">First name</lable>
                            <input type="text" class="form-control" name="f_name" placeholder="Enter First Name" >
                        </div>

                        <div class="form-group">
                            <lable for="l_name">Last Name</lable>
                            <input type="text" class="form-control" name="l_name" placeholder="Enter Last Name" >
                        </div>

                        <div class="form-group">
                            <lable for="f_name">Age</lable>
                            <input type="text" class="form-control" name="age" placeholder="Enter age" >
                        </div>
                    
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-success" name="add_students" value="Add">
                </div>

            </div>
        </div>
    </div>
 </form>   
</div>

<?php include('footer.php') ?>