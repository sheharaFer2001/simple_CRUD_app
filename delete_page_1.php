<?php include('dbConn.php') ?>


<?php

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

         $query = "DELETE FROM students WHERE id = {$_GET['id']}";
         $result = mysqli_query($conn, $query);


         if(!$query) {
             die("Query Failed" . mysqli_error($conn));
         } else {
             header("Location: index.php?msg=Data Deleted Successfully");

         }
    }

   


?>