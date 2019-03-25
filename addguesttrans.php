<?php include('connection.php');?>
<?php include('theme/header.php');?>
<?php include('theme/sidebar.php');?>
        
             <div class="col-lg-12">
                <?php
						$gid = $_POST['GUEST_ID'];
						$fname = $_POST['FIRST_NAME'];
                        $lname = $_POST['LAST_NAME'];
						$add = $_POST['ADDRESS'];
						$pn = $_POST['PHONE_NUMBER'];
				
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO tblguest
								(GUEST_ID,FIRST_NAME,LAST_NAME,ADDRESS,PHONE_NUMBER)
								VALUES ('$gid','".$fname."','".$lname."','".$add."','".$pn."')";
								mysqli_query($db,$query)or die ('Error in updating Database');
							
						break;
									
						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "guest.php";
		</script>
                    </div>
<?php include('theme/stickyfooter.php');?>