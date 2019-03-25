

<?php
       
       include('connection.php');
       include('theme/header.php');
       include('theme/sidebar.php');
       
        ?>  

                <!-- /.row -->
<?php 
$query = 'SELECT * FROM tblroom
              WHERE
              ROOM_ID ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $rid=$row['ROOM_ID'];
                $rt=$row['ROOM_TYPE'];
                $cov = $row['COVERAGE'];
                $prc = $row['PRICE'];
                
              }
              
              $id = $_GET['id'];
         
?>
<center>
             <div class="col-lg-12">
                  <h2>Edit Records</h2>
                      <div class="col-lg-6">

                        <form role="form" method="post" action="edit2room.php">
                            
                            <div class="form-group">
                                <input class="form-control" placeholder="Customer ID" name="ROOM_ID" value="<?php echo $rid; ?>" />
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Room type" name="ROOM_TYPE" value="<?php echo $rt; ?>">
                            </div>
                           
                                 <div class="form-group">
                              <input class="form-control" placeholder=" coverge" name="COVERAGE" value="<?php echo $cov; ?>">
                            </div>

                                 <div class="form-group">
                              <input class="form-control" placeholder=" Price" name="PRICE" value="<?php echo $prc; ?>">
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


