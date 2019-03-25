
<?php include('connection.php');?>
<?php include('theme/header.php');?>
<?php include('theme/sidebar.php');?>
<center>
             <div class="col-lg-12">
                  <h2>Add new Employee</h2>
                      <div class="col-lg-6">

                        <form role="form" method="post" action="addemptrans.php?action=add">
                            
                            <div class="form-group">
                              <input class="form-control" placeholder="employee ID" name="EMPLOYEE_ID">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="First name" name="FIRST_NAME">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Last name " name="LAST_NAME">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="contact number"name="CONTACT_NUMBER">
                            </div> 
                             <div class="form-group">
                              <input class="form-control" placeholder="address "name="ADDRESS">
                            </div> 
                           
                            
                             
                            <button type="submit" class="btn btn-default">Save Record</button>
                            <button type="reset" class="btn btn-default">Clear Entry</button>


                      </form>  
                    </div>
                </div>
            </center>
<?php include('theme/stickyfooter.php');?>