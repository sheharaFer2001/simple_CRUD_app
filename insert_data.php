<?php

    if(isset($_POST['add_students'])) {
        
        $fname = $_POST['f_name'];
        $lname = $_POST['l_name'];
        $age = $_POST['age'];

        if($fname != "" && $lname != "" && $age != "") {
            include 'dbConn.php';

            $sql = "INSERT INTO students (first_name, last_name, age) VALUES ('$fname', '$lname', '$age')";
            $result = mysqli_query($conn, $sql);

            if($result) {
                header("Location: index.php?msg=Data Inserted Successfully");
            } else {
                header("Location: index.php?msg=Error Inserting Data");
            }
        } else {
            header("Location: index.php?msg=Please Fill All Fields");

        }
    }



?>