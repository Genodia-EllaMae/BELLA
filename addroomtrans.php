<?php include('connection.php');?>
<?php include('theme/header.php');?>
<?php include('theme/sidebar.php');?>
        
             <div class="col-lg-12">
                <?php
						$rid = $_POST['ROOM_ID'];
					    $rmt = $_POST['ROOM_TYPE'];
                         $cov = $_POST['COVERAGE'];
						 $prc = $_POST['PRICE'];
						
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO tblroom
								(ROOM_ID,ROOM_TYPE,COVERAGE,PRICE)
								VALUES ('$rid','".$rmt."','".$cov."','".$prc."')";
								mysqli_query($db,$query)or die ('Error in updating Database');
							
						break;
									
						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "room.php";
		</script>
                    </div>
<?php include('theme/stickyfooter.php');?>