<?php
       
       include('connection.php');
       include('theme/header.php');
       include('theme/sidebar.php');
       
        ?>  

                <!-- /.row -->
<?php 
$query = 'SELECT * FROM tblemployees
              WHERE
              EMPLOYEE_ID='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $eid=$row['EMPLOYEE_ID'];
                $fname=$row['FIRST_NAME'];
                $lname=$row['LAST_NAME'];
                $cn=$row['CONTACT_NUMBER'];
                $add=$row['ADDRESS'];
              
             
              }
              
              $id = $_GET['id'];
         
?>
<center>
             <div class="col-lg-12">
                  <h2>Edit Records</h2>
                      <div class="col-lg-6">

                        <form role="form" method="post" action="edit2employee.php">
                            
                            <div class="form-group">
                                <input class="form-control" placeholder="Guest id" name="EMPLOYEE_ID" value="<?php echo $eid; ?>" />
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder= "First name" name="FIRST_NAME" value="<?php echo $fname; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Last name" name="LAST_NAME" value="<?php echo $lname; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Contact number " name="CONTACT_NUMBER" value="<?php echo $cn; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="address" name="ADDRESS" value="<?php echo $add; ?>">
                            </div> 
                           
                            
                            <button type="submit" class="btn btn-default">Update Record</button>
                         


                      </form>  
                    </div>
                </div>
              </center>
                
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

<?php include('theme/stickyfooter.php'); ?>

</html>


