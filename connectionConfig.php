<?php
include 'DbConnection.php';
 if (isset($_POST['SubmitDetails'])) {
 	

// Escape user inputs for security
$fname = mysqli_real_escape_string($link, $_REQUEST['Fname']);
$lname = mysqli_real_escape_string($link, $_REQUEST['Lname']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$Phone= mysqli_real_escape_string($link, $_REQUEST['Phone']);
$entercity= mysqli_real_escape_string($link, $_REQUEST['entercity']);
$grade= mysqli_real_escape_string($link, $_REQUEST['grade']);
$Specialisation= mysqli_real_escape_string($link, $_REQUEST['Specialisation']);
$University= mysqli_real_escape_string($link, $_REQUEST['University']);
$primary= mysqli_real_escape_string($link, $_REQUEST['primary']);
$secondary= mysqli_real_escape_string($link, $_REQUEST['secondary']);
$certification= mysqli_real_escape_string($link, $_REQUEST['certification']);
$pitch= mysqli_real_escape_string($link, $_REQUEST['pitch']);
$Graduation= mysqli_real_escape_string($link, $_REQUEST['Graduation']);
$GraduationYear= mysqli_real_escape_string($link, $_REQUEST['GraduationYear']);
$State= mysqli_real_escape_string($link, $_REQUEST['State']);
$Gender= mysqli_real_escape_string($link, $_REQUEST['Gender']);

if(strlen($Phone)!=10){
	?>
	<script>alert("Phone no. error")</script>
	<?php
		header("Refresh: 1;url=index.php");
	return ;
}
// This is the file we're going to add it in the database
$MY_FILE = $_FILES['file']['tmp_name'];
 
// // To open the file and store its contents in $file_contents
// $file = fopen($MY_FILE, 'r');
// $file_contents = fread($file, filesize($MY_FILE));
// fclose($file);
//  We need to escape some stcharacters that might appear in  file_contents,so do that now, before we begin the query.
 
// $file_contents = addslashes($file_contents);
 




$filename = addslashes($_FILES["file"]["name"]);
			$tempname = addslashes(file_get_contents($_FILES["file"]["tmp_name"]));
			$filetype = addslashes($_FILES["file"]["type"]);

			$array = array("jpg","jpeg","JPG","JPEG","png","PNG");
			$ext = pathinfo($filename,PATHINFO_EXTENSION);



			if(!empty($filename)){
				$sql = "INSERT INTO userdata (Fname, Lname, UserName, Email,Phone,City,GraduationGrade,Specialisation,CollegeName,SkillPrimary,SkillSecondary,Certifications,Pitch,Graduation,GraduationYear,State,Gender,image) VALUES ('$fname', '$lname','$fname' '-' '$lname', '$email','$Phone','$entercity','$grade','$Specialisation','$University','$primary','$secondary','$certification','$pitch','$Graduation','$GraduationYear','$State','$Gender','$tempname')";
					if(mysqli_query($link, $sql)){
					   // echo "Records added successfully.";
					    header("Refresh: 0;url=generated.php?UserName=$fname-$lname");
					} else{
					    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
					}
					 
					// Close connection
					mysqli_close($link);
									}
			else{

				echo "<script>
						 alert('unsupported File Format');
					</script>";
				}

			}


// Attempt insert query execution

?>
 	
