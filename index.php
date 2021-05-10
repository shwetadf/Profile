<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Profile</title>
  </head>
  <body>
   
    <h1 class="text-uppercase text-center">Profile</h1><hr>


<div class="container">
  <form class="col-md-8 m-auto" method="POST" action="connectionConfig.php" enctype="multipart/form-data">
  <div class="form-group">

    <h5 class="font-italic font-weight-bold">Personal Details</h5><hr>
    <label for="fname">First Name <span style="color: red">*</span></label>
    <input type="text" class="form-control" required="" name="Fname" id="fname" placeholder="your First Name">
  </div>
  <div class="form-group">
    <label for="lname">Last Name</label>
    <input type="text" class="form-control" name="Lname" id="lname" placeholder="your Last Name">
  </div>
<label>Select Gender <span style="color: red">*</span></label>
  <div class="form-check">
  
  <input class="form-check-input" type="radio" name="Gender" id="male" value="male" >
  <label class="form-check-label" for="male">
    Male
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="Gender" id="female" value="female" >
  <label class="form-check-label" for="female">
    Female
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="Gender" id="other" value="other" >
  <label class="form-check-label" for="other">
    Preffer not to say
  </label>
</div><br>
<div class="form-group">
    <label for="forEmail">Email <span style="color: red">*</span></label>
    <input type="email" class="form-control" required="" name="email" id="forEmail" placeholder="your email" >
  </div>
  <div class="form-group">
    <label for="lname">Phone Number</label>
    <input type="Number" class="form-control" name="Phone"  id="lname"  maxlength="10" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1"> Select State</label>
    <select class="form-control" id="exampleFormControlSelect1" name="State">
      <option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Puducherry">Puducherry</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
    </select>
  </div>
   <div class="form-group">
    <label for="forState">Enter City<span style="color: red">*</label>
    <input type="text" class="form-control" name="entercity"  id="forState" placeholder="City" required="">
  </div>
   <div class="form-group">
    <label for="exampleFormControlFile1">Upload Photo</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file">
  </div><hr>
  <h5 class="font-italic font-weight-bold">Education Details</h5><hr>
   <div class="form-group">
    <label for="exampleFormControlSelect1">Graduation<span style="color: red">*</label>
    <select class="form-control" id="exampleFormControlSelect1" name="Graduation" required="">
      <option selected  disabled=""><----select----></option>
      <option>BE/BTech</option>
      <option>BSC</option>
      <option>BCA</option>
      <option>MCA</option>
      <option>ME/MTech</option>
    </select>
  </div>
  <div class="form-group">
    <label for="forGraduation">Graduation Grade/percentage</label>
    <input type="text" class="form-control" name="grade"  id="forGraduation" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Graduation Year</label>
    <select class="form-control" id="exampleFormControlSelect1" name="GraduationYear">
      <option>2020</option>
      <option>2019</option>
      <option>2018</option>
      <option>2017</option>
      <option>2016</option>
    </select>
  </div>
   <div class="form-group">
    <label for="forSpecialisation">Specialisation</label>
    <input type="text" class="form-control" name="Specialisation" id="forSpecialisation" >
  </div>
  <div class="form-group">
    <label for="forCollege/University">College/University*</label>
    <input type="text" class="form-control" name="University" id="forCollege/University" >
  </div><hr>
  <h5 class="font-italic font-weight-bold">Skills</h5><hr>
  <div class="form-group">
    <label for="forPrimary">Primary<span style="color: red">*</label>
     <input type="text" class="form-control" name="primary" required="" id="forPrimary" >
  </div>
  <div class="form-group">
    <label for="forPrimary">Secondary</label>
     <input type="text" class="form-control" name="secondary" id="forPrimary" >
  </div>
  <div class="form-group">
    <label for="forPrimary">Certifications</label>
     <input type="text" class="form-control" name="certification" id="forPrimary" >
  </div>
  <div class="form-group">
    <label for="forPrimary">Pitch<span style="color: red">*</label>
    <textarea class="form-control" id="forPrimary" name="pitch" required="" rows="3"></textarea>
  </div>
  <h6>'*' marked fields to be mandatory.</h6>
  <div class="text-center">
        <input type="hidden" name="UserName" value="'.$row["UserName"].'">

  <button class=" btn btn-primary" name="SubmitDetails">Generate</button>
</div>
</form>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
