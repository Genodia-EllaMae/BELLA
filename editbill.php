<?php
       
       include('connection.php');
       include('theme/header.php');
       include('theme/sidebar.php');
       
        ?>  

                <!-- /.row -->
<?php 
$query = 'SELECT * FROM tblbill
              WHERE
              INVOICE_ID='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $invoice=$row['INVOICE_ID'];
                $gid=$row['GUEST_ID'];
                $pd=$row['PER_DAY'];
                $rt=$row['ROOM_TYPE'];
                $rc=$row['ROOM_CHARGE'];
                $mc=$row['MISC_CHARGES'];
              
             
              }
              
              $id = $_GET['id'];
         
?>
<center>
             <div class="col-lg-12">
                  <h2>Edit Records</h2>
                      <div class="col-lg-6">

                        <form role="form" method="post" action="edit2bill.php">
                            
                            <div class="form-group">
                                <input class="form-control" placeholder=" invoice id" name="INVOICE_ID" value="<?php echo $invoice; ?>" />
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="guest id" name="GUEST_ID" value="<?php echo $gid; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="per day" name="PER_DAY" value="<?php echo $pd; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder= "room type  " name="ROOM_TYPE" value="<?php echo $rt; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder= "room charge  " name="ROOM_CHARGE" value="<?php echo $rc; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="miscllaneous charge " name="MISC_CHARGES" value="<?php echo $mc; ?>">
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


