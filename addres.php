
<?php include('connection.php');?>
<?php include('theme/header.php');?>
<?php include('theme/sidebar.php');?>
<center>
             <div class="col-lg-12">
                  <h2>Add new Reservations</h2>
                      <div class="col-lg-6">

                        <form role="form" method="post" action="addrestrans.php?action=add">
                            
                            <div class="form-group">
                              <input class="form-control" placeholder="Reservation ID" name="RES_ID">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Guest ID" name="GUEST_ID">
                            </div> 
                           
                            <div class="form-group">
                              <input class="form-control" placeholder="Room type"name="ROOM_TYPE">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Room ID " name="ROOM_ID">
                            </div>
                            <div class="form-group">
                              <input class="form-control" type="date" placeholder="Arrival " name="ARRIVAL">
                            </div> 
                           
                            <div class="form-group">
                              <input class="form-control" type="date" placeholder=" Departure"name="DEPARTURE">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder=" Status " name="STATUS">
                            </div>
                            
                             
                            <button type="submit" class="btn btn-default">Save Record</button>
                            <button type="reset" class="btn btn-default">Clear Entry</button>


                      </form>  
                    </div>
                </div>
            </center>
<?php include('theme/stickyfooter.php');?>