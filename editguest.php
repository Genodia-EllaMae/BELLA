<?php
       
       include('connection.php');
       include('theme/header.php');
       include('theme/sidebar.php');
       
        ?>  

                <!-- /.row -->
<?php 
$query = 'SELECT * FROM tblguest
              WHERE
              GUEST_ID='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $gid=$row['GUEST_ID'];
                $res=$row['RES_ID'];
                $fname=$row['FIRST_NAME'];
                $lname=$row['LAST_NAME'];
                $add=$row['ADDRESS'];
                $room = $row['ROOM_ID'];
                $pn=$row['PHONE_NUMBER'];
              
             
              }
              
              $id = $_GET['id'];
         
?>
<center>
             <div class="col-lg-12">
                  <h2>Edit Records</h2>
                      <div class="col-lg-6">

                        <form role="form" method="post" action="edit2guest.php">
                            
                            <div class="form-group">
                                <input class="form-control" placeholder="Guest id" name="GUEST_ID" value="<?php echo $gid; ?>" />
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Reservation id" name="RES_ID" value="<?php echo $res; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder= "First name" name="FIRST_NAME" value="<?php echo $fname; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Last name" name="LAST_NAME" value="<?php echo $lname; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="address " name="ADDRESS" value="<?php echo $add; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Room id" name="ROOM_ID" value="<?php echo $room; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="phone number" name="PHONE_NUMBER" value="<?php echo $pn; ?>">
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


