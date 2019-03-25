<?php include('connection.php');?>
<?php include('theme/header.php');?>
<?php include('theme/sidebar.php');?>
        
             <div class="col-lg-12">
                <?php
						$id = $_POST['INVOICE_ID'];
					    $gid = $_POST['GUEST_ID'];
						$rc = $_POST['ROOM_CHARGE'];
                        $mc = $_POST['MISC_CHARGES'];
                        $rt = $_POST['ROOM_TYPE'];
                        $pd = $_POST['PER_DAY'];
                        
						
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO tblbill
								(INVOICE_ID,GUEST_ID,ROOM_CHARGE,MISC_CHARGES,ROOM_TYPE,PER_DAY)
								VALUES ('$id','".$gid."','".$rc."','".$mc."','".$rt."','".$pd."')";
								mysqli_query($db,$query)or die ('Error in updating Database');
							
						break;
									
						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "billing.php";
		</script>
                    </div>
<?php include('theme/stickyfooter.php');?>