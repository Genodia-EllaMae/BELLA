<?php include('connection.php');?>
<?php include('theme/header.php');?>
<?php include('theme/sidebar.php');?>
        
             <div class="col-lg-12">
                <?php
						$rid = $_POST['RES_ID'];
					    $gid = $_POST['GUEST_ID'];
                        $rt = $_POST['ROOM_TYPE'];
						$rd = $_POST['ROOM_ID'];
					    $arr = $_POST['ARRIVAL'];
                        $dep = $_POST['DEPARTURE'];
						$stat = $_POST['STATUS'];
						
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO tblreservation
								(RES_ID,GUEST_ID,ROOM_TYPE,ROOM_ID,ARRIVAL,DEPARTURE,STATUS)
								VALUES ('$rid','$gid','".$rt."','".$rd."','".$arr."','".$dep."','".$stat."')";
								mysqli_query($db,$query)or die ('Error in updating Database');
							
						break;
									
						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "Reservation.php";
		</script>
                    </div>
<?php include('theme/stickyfooter.php');?>