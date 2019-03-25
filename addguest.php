<?php include('connection.php');?>
<?php include('theme/header.php');?>
<?php include('theme/sidebar.php');?>
<center>
             <div class="col-lg-12">
                  <h2>Add new Guest(s)</h2>
                      <div class="col-lg-6">

                        <form role="form" method="post" action="addguesttrans.php?action=add">
                            
                            <div class="form-group">
                              <input class="form-control" placeholder="Guest ID" name="GUEST_ID">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Reservation ID" name="RES_ID">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="first name" name="FIRST_NAME">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="last name" name="LAST_NAME">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder=" address" name="ADDRESS">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="room ID" name="ROOM_ID">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="hone number"  name="PHONE_NUMBER">
                            </div>  
                            
                             
                            <button type="submit" class="btn btn-default">Save Record</button>
                            <button type="reset" class="btn btn-default">Clear Entry</button>


                      </form>  
                    </div>
                </div>
            </center>
<?php include('theme/stickyfooter.php');?>