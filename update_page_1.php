<?php include('header.php') ?>
<?php include('dbConn.php') ?>

    <?php
        if(isset($_GET['id'])){
            $id = $_GET['id'];

          

        $query = "SELECT * FROM students where id = $id"; ;
        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Query Failed" . mysqli_error($conn));
        } else {
            
            $row = mysqli_fetch_assoc($result);

            
        }
    }
    ?>

    <?php
    
        if(isset($_POST['add_students'])){

            if(isset($_GET['id_new'])){
                $idNew = $_GET['id_new'];
            } 
            $fname = $_POST['f_name'];
            $lname = $_POST['l_name'];
            $age = $_POST['age'];
            
            $query = "UPDATE `students` SET `first_name`='$fname', `last_name`='$lname', `age`='$age' WHERE `id`='$idNew'";

            $result = mysqli_query($conn, $query);

            if(!$result) {
                die("Query Failed" . mysqli_error($conn));
            } else {
                header("Location: index.php?msg=Data Updated Successfully");

            }
            }


    ?>       
       
        
        
  


    <form action="update_page_1.php?id_new=<?php echo $id; ?>" method="post">
        <div class="form-group">
                            <lable for="f_name">First name</lable>
                            <input type="text" class="form-control" name="f_name" placeholder="Enter First Name" value="<?php echo $row['first_name']?>" required >
                        </div>

                        <div class="form-group">
                            <lable for="l_name">Last Name</lable>
                            <input type="text" class="form-control" name="l_name" placeholder="Enter Last Name" value="<?php echo $row['last_name']?>"  required>
                        </div>

                        <div class="form-group">
                            <lable for="f_name">Age</lable>
                            <input type="text" class="form-control" name="age" placeholder="Enter age" value="<?php echo $row['age']?>"  required>
                        </div>

                         <input type="submit" class="btn btn-success mt-2" name="add_students" value="Update">
                
    </form>





<?php include('footer.php') ?>