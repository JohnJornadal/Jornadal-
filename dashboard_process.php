<?php 

		include "../conn.php";

		session_start();



		if (isset($_POST['add_official'])){

			$fullname=$_POST['fullname'];
			$Chairmanship=$_POST['Chairmanship'];
			$position=$_POST['position'];
			$terms=$_POST['terms'];
			$termend=$_POST['termend'];
			$status=$_POST['status'];

			$insert_official=mysqli_query($conn, "INSERT INTO officials(id,Fullname,chairmanship,position,term_start,term_end,status) VALUES('0','$fullname','$Chairmanship','$position','$terms','$termend','$status')");



			if ($insert_official == True) {
				
		?>

		<script type="text/javascript">
			alert("Successfully added!!");
			location.href="BOS.php";
		</script>



		<?php
			}else{
			
		?>

		<script type="text/javascript">
			alert("Not inserted!!!");
			location.href="BOS.php";
		</script>



		<?php
			}
		}








?>