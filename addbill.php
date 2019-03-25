
<?php include('connection.php');?>
<?php include('theme/header.php');?>
<?php include('theme/sidebar.php');?>
<center>
             <div class="col-lg-12">
                  <h2>Add new bill</h2>
                      <div class="col-lg-6">

                        <form role="form" method="post" action="addbilltrans.php?action=add">
                            
                            <div class="form-group">
                              <input class="form-control" placeholder="Invoice ID" name="INVOICE_ID">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Guest ID " name="GUEST_ID">
                            </div> 
                             <div class="form-group">
                              <input class="form-control" placeholder="Per day "name="PER_DAY">
                          </div>
                           <div class="form-group">
                              <input class="form-control" placeholder="Room Type  " name="ROOM_TYPE">
                            </div> 
                            
                            <div class="form-group">
                              <input class="form-control" placeholder="Room charge  " name="ROOM_CHARGE">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Miscellaneous charge "name="MISC_CHARGES">
                          </div>
                            
                           
                            
                             
                            <button type="submit" class="btn btn-default">Save Record</button>
                            <button type="reset" class="btn btn-default">Clear Entry</button>


                      </form>  
                    </div>
                </div>
            </center>
<?php include('theme/stickyfooter.php');?>