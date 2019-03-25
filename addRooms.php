
<?php include('connection.php');?>
<?php include('theme/header.php');?>
<?php include('theme/sidebar.php');?>
<center>
             <div class="col-lg-12">
                  <h2>Add new Rooms</h2>
                      <div class="col-lg-6">

                        <form role="form" method="post" action="addroomtrans.php?action=add">
                            
                            <div class="form-group">
                              <input class="form-control" placeholder="Room ID" name="ROOM_ID">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder=" Room Type" name="ROOM_TYPE">
                            </div> 
                            
                             <div class="form-group">
                              <input class="form-control" placeholder="coverage"name="COVERAGE">
                            </div> 
                             <div class="form-group">
                              <input class="form-control" placeholder="Price"name="PRICE">
                            </div> 
                           
                            
                             
                            <button type="submit" class="btn btn-default">Save Record</button>
                            <button type="reset" class="btn btn-default">Clear Entry</button>


                      </form>  
                    </div>
                </div>
            </center>
<?php include('theme/stickyfooter.php');?>