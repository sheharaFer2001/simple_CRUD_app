<?php include('header.php')?>
<?php include('dbConn.php')?>   

            <div class=" box1">
                <h2>All Students</h2>
                <button class="btn btn-primary">Add Students </button>
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
                
                    if(!$result){
                        die("Query Failed" . mysqli_error($conn));

                    }
                    else{
                        while($row = mysqli_fetch_assoc($result)){
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
<?php include('footer.php')?>