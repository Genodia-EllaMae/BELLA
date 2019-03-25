<?php include('connection.php');?>
<?php include('theme/header.php');?>
<?php include('theme/sidebar.php');?>
        
             <div class="col-lg-12">
                <?php
						$eid = $_POST['EMPLOYEE_ID'];
					    $fn = $_POST['FIRST_NAME'];
						$ln = $_POST['LAST_NAME'];
                        $cn = $_POST['CONTACT_NUMBER'];
                         $add = $_POST['ADDRESS'];
					
						
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO tblemployees
								(EMPLOYEE_ID,FIRST_NAME,LAST_NAME,CONTACT_NUMBER,ADDRESS)
								VALUES ('$eid','".$fn."','".$ln."','".$cn."','".$add."')";
								mysqli_query($db,$query)or die ('Error in updating Database');
							
						break;
									
						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "Employee.php";
		</script>
                    </div>
<?php include('theme/stickyfooter.php');?>