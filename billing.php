<?php include('connection.php'); ?>

<?php include('theme/header.php'); ?>

<?php include('theme/sidebar.php'); ?>


<div class="col-lg-12">
                        <h2>List of bill(s)</h2> <a href="addbill.php?action=add" type="button" class="btn btn-xs btn-info">Add New</a>
                          <a type="button" class="btn btn-lg btn-info fas fa-eye" href="viewbill.php?action=edit & id='.$row['INVOICE_ID'] . '" ></a> 
                        <div class="table-responsive">
                             <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                            <br>
                                <thead>
                                    <tr>
                                        <th> INVOICE ID</th>
                                        <th> GUEST ID</th>
                                         <th> PER DAY</th>
                                         <th>ROOM TYPE</th>
                                        <th>ROOM CHARGE</th>
                                        <th>MISCELLANEOUS CHARGE</th>
                                        <th> OPTIONS</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT * FROM tblbill';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['INVOICE_ID'].'</td>';
                            echo '<td>'. $row['GUEST_ID'].'</td>';
                             echo '<td>'. $row['PER_DAY'].'</td>';
                              echo '<td>'. $row['ROOM_TYPE'].'</td>';
                            echo '<td>'. $row['ROOM_CHARGE'].'</td>';
                            echo '<td>'. $row['MISC_CHARGES'].'</td>';
                            
                              
                            echo '<td><a  type="button" class="btn btn-lg btn-warning fas fa-user-edit" href="editbill.php?action=edit & id='.$row['INVOICE_ID'] . '"></a> ';
                            echo ' <a  type="button" class="btn btn-lg btn-danger fas fa-trash-alt" href="delbill.php?type=bill&delete & id=' . $row['INVOICE_ID'] . '"></a> </td>';
                            
                }
            ?> 
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>




<!---footer area--->
 <?php include('theme/stickyfooter.php'); ?>
