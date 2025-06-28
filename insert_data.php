<?php

    if(isset($_POST['add_students'])) {
        
        $fname = $_POST['f_name'];
        $lname = $_POST['l_name'];
        $age = $_POST['age'];

        if($fname != "" && $lname != "" && $age != "") {
            include 'dbConn.php';

            $sql = "INSERT INTO `students` (`first_name`, `last_name`, `age`) VALUES ('$fname', '$lname', '$age')";
            $result = mysqli_query($conn, $sql);

            if($result) {
                header("Location: index.php?msg=Data Inserted Successfully?status?ok");
                
            } else {
                header("Location: index.php?msg=Error Inserting Data?status?error");
                die("Query Failed" . mysqli_error($conn));
            }
        } else {
            header("Location: index.php?msg=Please Fill All Fields");

        }
    }



?>