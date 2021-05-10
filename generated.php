<?php
include 'DbConnection.php';
	if(isset($_GET['UserName'])){
		$UserName = $_GET['UserName'];
		// echo $_GET['id'];

		$sql = "SELECT * FROM `userdata` WHERE UserName='$UserName' ORDER BY ID DESC LIMIT 1";
			$fired = mysqli_query($link, $sql);
			if($fired){
					   while ($result=mysqli_fetch_array($fired)) {	
					    $Fname =  $result['Fname'];
					    $Lname = $result['Lname'];
					    $gender = $result['Gender'];
					    $image = $result['image'];
					    $Email = $result['Email'];
					    $Phone = $result['Phone'];
					    $State = $result['State'];
					    $City = $result['City'];
					    $Graduation = $result['Graduation'];
					    $GraduationGrade = $result['GraduationGrade'];
					    $GraduationYear = $result['GraduationYear'];	
					    $Specialisation = $result['Specialisation'];
					    $CollegeName = $result['CollegeName'];
					    $SkillPrimary = $result['SkillPrimary'];
					    $SkillSecondary = $result['SkillSecondary'];
					    $Certifications = $result['Certifications'];
					    $Pitch = $result['Pitch'];
					    $Specialisation = $result['Specialisation'];
					}
				}

	}
		

?>

<!DOCTYPE html>
<html>
<head> <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<title>Resume</title>
</head>
<body style="background-color:#F5A623;">


	<div class="container   p-4 col-md-8"style="background-color:white; margin-top: 50px;">
		<button class="btn btn-success "> <a href="index.php" class="text-white"><-Back to Home</a> </button -->
		<div class="text-center">
			<?php
			$sql = "SELECT * FROM `userdata` WHERE UserName='$UserName' ORDER BY ID DESC LIMIT 1";
			$fired = mysqli_query($link, $sql)  or die( mysqli_error($link));
			  while($row = mysqli_fetch_array($fired)){
			  	echo '<img style="width:200px" src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';
			  }
			?>
			

			
</div>
		<h1 class="text-center text-capitalize" style="color: #F5A623">
			<?php echo $Fname; echo " "; echo $Lname; ?>
		</h1>

		<p class="col-md-8 m-auto " style="text-align: center;">
			<?php if($gender==="male"){echo "Mr.";}else{echo "Ms.";}?>
			<?php
			 			echo $Fname ;
			 		?>
			 did <?php if($gender==="male"){echo "his";}else{echo "her";}?> <?php echo $Graduation?> in from <college/university> in the year <?php echo $GraduationYear?>, is highly skilled in <?php echo $SkillPrimary?> lives in <?php echo $City?>, <?php echo $State?> and can be contacted via <?php echo $Email?> and <?php echo $Phone?></p>

			 <h4>PERSONAL</h4><hr>
			 <div class="row"> 
			 	<div class="col-md-6">
			 		<table>
			 			<tr>
			 				<td>
			 					<label> First Name : </label>
			 				</td>
			 				<td>
			 					<label><?php echo $Fname?></label>
			 				</td>
			 			</tr>
			 			<tr>
			 				<td>
			 					<label> Last Name : </label>
			 				</td>
			 				<td>
			 					<label><?php echo $Lname?></label>
			 				</td>
			 			</tr>
			 			<tr>
			 				<td>
			 				<label> Gender : </label>
			 				</td>
			 				<td>
			 					<label><?php echo $gender?></label>
			 				</td>
			 			</tr>
			 		</table>
			 		
			 		
			 		
			 	</div>
			 	<div class="col-md-6">
			 		<table>
			 			<tr>
			 				<td>
			 					<label> Email : </label>
			 				</td>
			 				<td>
			 					<label><?php echo $Email?></label>
			 				</td>
			 			</tr>
			 			<tr>
			 				<td>
			 					<label>Phone : </label>
			 				</td>
			 				<td>
			 					<label><?php echo $Phone?></label>
			 				</td>
			 			</tr>
			 			<tr>
			 				<td>
			 					<label> Lives in : </label>
			 				</td>
			 				<td>
			 					<label><?php echo $City?>, <?php echo $State?></label>
			 				</td>
			 			</tr>
			 		</table>
			 	</div>
			 </div><br>
			 <br>

			 <h4>EDUCATION</h4><hr>
			 <table>
			 			<tr>
			 				<td>
			 					<label> Graduation : </label>
			 				</td>
			 				<td>
			 					<label><?php echo$Graduation?></label>
			 				</td>
			 			</tr>
			 			<tr>
			 				<td>
			 					<label>Pass Out : </label>
			 				</td>
			 				<td>
			 					<label><?php echo $GraduationYear?></label>
			 				</td>
			 			</tr>
			 			<tr>
			 				<td>
			 					<label> College/Univ : </label>
			 				</td>
			 				<td>
			 					<label><?php echo $CollegeName?></label>
			 				</td>
			 			</tr>
			 		</table>
<br>
			 <br>

			 <h4>SKILLS</h4><hr>
			 <table>
			 			<tr>
			 				<td>
			 					<label> PRIMARY : </label>
			 				</td>
			 				<td>
			 					<label><?php echo$SkillPrimary?></label>
			 				</td>
			 			</tr>
			 			<tr>
			 				<td>
			 					<label>Secondary : </label>
			 				</td>
			 				<td>
			 					<label><?php echo $SkillSecondary?></label>
			 				</td>
			 			</tr>
			 			<tr>
			 				<td>
			 					<label> Certification : </label>
			 				</td>
			 				<td>
			 					<label><?php echo $Certifications?></label>
			 				</td>
			 			</tr>
			 		</table>
			 		<br><br>
			 		<h4><?php echo $Fname?>'s Pitch</h4><hr>
			 		<table>
			 			<tr>
			 				<td>
			 					<h1 style="color: #F5A623; font-size: 100px">&#8220;</h1>			
			 				</td>
			 				<td>
			 					<h3>
			 					<?php
			 			echo $Pitch ;
			 		?></h3>
			 				</td>
			 			</tr>
			 		</table>
			 		

			 		

	</div>

</body>
</html>


 