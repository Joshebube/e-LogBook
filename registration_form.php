<?php
if (isset($_POST['submit'])){
        // Initialize error array.
          $errors = array();
          // Check for a proper First name
          if (!empty($_POST['First_Name'])) {
          $First_Name = $_POST['First_Name'];
          $pattern = "/^[a-zA-Z\_]{2,20}/";// This is a regular expression that checks if the name is valid characters
          if (preg_match($pattern,$First_Name)){ $First_Name = $_POST['First_Name'];}
          else{ $errors['First_Name'] = 'Your First Name can only contain _, A-Z or a-z 2-20 long.';}
          } else {$errors['First_Name'] = 'You forgot to enter your First Name.';}
        }
        // Check for a proper Middle name
  if (!empty($_POST['Middle_Name'])) {
    $Middle_Name = $_POST['Middle_Name'];
    $pattern = "/^[a-zA-Z\_]{2,20}/";// This is a regular expression that checks if the name is valid characters
    if (preg_match($pattern,$Middle_Name)){ $Middle_Name = $_POST['Middle_Name'];}
    else{ $errors['Middle_Name'] = 'Your Middle Name can only contain _, A-Z or a-z 2-20 long.';}
    } else {$errors['Middle_Name'] = 'You forgot to enter your Middle Name.';}

   // Check for a proper Last name
  if (!empty($_POST['Last_Name'])) {
    $Last_Name = $_POST['Last_Name'];
    $pattern = "/^[a-zA-Z\_]{2,20}/";// This is a regular expression that checks if the name is valid characters
    if (preg_match($pattern,$Last_Name)){ $Last_Name = $_POST['Last_Name'];}
    else{ $errors['Last_Name'] = 'Your Last Name can only contain _, A-Z or a-z 2-20 long.';}
    } else {$errors['Last_Name'] = 'You forgot to enter your Last Name.';}
    
      // Check for a proper Institution
  if (!empty($_POST['Institution'])) {
    $Institution = $_POST['Institution'];
    $pattern = "/^\ [a-zA-Z ]+,\ [a-zA-Z ]+, [a-zA-Z ]+$/";// This is a regular expression that checks if the Institution is valid characters
    if (preg_match($pattern,$Institution)){ $Institution = $_POST['Institution'];}
    else{ $errors['Institution'] = 'Enter a valid Institution.';}
    } else {$errors['Institution'] = 'You forgot to enter your Institution.';}

  // Check for a proper Course_Of_Study
  if (!empty($_POST['Course_Of_Study'])) {
    $Course_Of_Study = $_POST['Course_Of_Study'];
    $pattern = "/^\ [a-zA-Z ]+,\ [a-zA-Z ]+, [a-zA-Z ]+$/";// This is a regular expression that checks if the Course Of Study is valid characters
    if (preg_match($pattern,$Course_Of_Study)){ $Course_Of_Study = $_POST['Course_Of_Study'];}
    else{ $errors['Course_Of_Study'] = 'Enter a valid Course Of Study.';}
    } else {$errors['Course_Of_Study'] = 'You forgot to enter your Course Of Study.';}

    // Check for a proper IT_Name
  if (!empty($_POST['IT_Name'])) {
    $IT_Name = $_POST['IT_Name'];
    $pattern = "/^\ [a-zA-Z ]+,\ [a-zA-Z ]+, [a-zA-Z ]+$/";// This is a regular expression that checks if the Place of IT is valid characters
    if (preg_match($pattern,$IT_Name)){ $IT_Name = $_POST['IT_Name'];}
    else{ $errors['IT_Name'] = 'Enter a valid IT_Name.';}
    } else {$errors['IT_Name'] = 'You forgot to enter your Place of IT.';}

    // Check for a proper Username
  if (!empty($_POST['User_name'])) {
    $User_name = $_POST['User_name'];
    $pattern = "/^[a-zA-Z0-9\_]{2,20}/";// This is a regular expression that checks if the name is valid characters
    if (preg_match($pattern,$User_name)){ $User_name = $_POST['User_name'];}
    else{ $errors['User_name'] = 'Your Username can only contain _, 1-9, A-Z or a-z 2-20 long';}
    } else {$errors['User_name'] = 'You forgot to enter your Username.';}
    
    // checks to see if passwords match
    if (!empty($_POST["Password"])){
    if  (!empty($_POST["Retype_Password"])) {
        $Password=$_POST["Password"];
        $Retype_Password=$_POST["Retype_Password"];
    } 
        if ($_POST["Password"] === $_POST["Retype_Password"]){

            // success!
        }
        else {
            // failed 
            $errors[] = "Oops! Password did not match!";
         }
     }
    

    //Check for a valid Telephone number
    if (!empty($_POST['Telephone'])) {
    $Telephone = $_POST['Telephone'];
    $pattern = "/^[0-9\_]{7,20}/";
    if (preg_match($pattern,$Telephone)){ $Telephone = $_POST['Telephone'];}
    else{ $errors['Telephone'] = 'Your Telephone number can only be numbers.';}
    } else {$errors['Telephone'] = 'You forgot to enter your Telephone number.';}
    
?>
<?php
 //Print Errors
 if (isset($_POST['submitted'])) {
    // Print any error messages. 
    if (!empty($errors)) { 
    echo '<hr /><h3>The following occurred:</h3><ul>'; 
    // Print each error. 
    foreach ($errors as $msg) { echo '<li>'. $msg . '</li>';}
    echo '</ul><h3>Your mail could not be sent due to input errors.</h3><hr />';}
     
    }
  //End of errors array
  
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" >
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="favicon.ico">

        <title>e-LogBook</title>

        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <style type="text/css">
			body{
				background-color: #EEEEEE;
			}
			form {
	margin-top: 55px;
	text-align: justify;
	color: #41484F;
	
		}
			form div label {
	margin-right: 0px;
	margin-left: 25px;
	margin-bottom: 50px;
}


        form div input {
	width: 23%;
}
        form div select {
	width: auto;
}
      
 
        #center {
	text-align: center;
	margin-top: 44px;
}
        #submitbtn {
	float: right;
	margin-right: 55px;
	width: 10%;
}
		

        #person_type_label {
	padding-left: 0px;
	margin-left: 130px;
}
        #gender {
	padding-left: 0px;
	margin-left: 130px;
}
        </style>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]-->
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <!--[endif] -->
    </head>

    <body>
    
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">e-LogBook</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-header">Nav header</li>
                                <li><a href="#">Seperated link</a></li>
                                <li><a href="#">One more seperated link</a></li>
                            </ul>
                        </li>
                    </ul>
         
                </div>
                <!--/ .navbar-collapse -->
            </div>
          <p>&nbsp;</p>
        </div>
<p><h3 id="center">Please fill with only correct information</h3></p>
<?php print_r($errors);?>
	<form action="registration_form.php" method="post">
	  <div>      
	          <label for="textfield">First Name:</label>
	          <input type="text" name="First_Name" value="">
	          <label for="textfield">Middle name:</label>
	          <input type="text"name="Middle_Name" value="" >
	          <label for="textfield">Last Name:</label>
	          <input type="text"name="Last_Name" value="" >
		      <br/>
	          <label for="textfield">Institution:</label>
	          <input type="text"name="Institution" value="" >
		      <label for="textfield">Course Of Study:</label>
		      <input type="text"name="Course_Of_Study" value="" >
		      <label for="select">Level:</label>
		      <select name="Level" value="" >
		        <option value="first year">100 level</option>
		        <option value="second year" selected="selected">200 level</option>
		        <option value="third year">300 level</option>
		        <option value="forth year">400 level</option>
		        <option value="fifth year">500 level</option>
				<option value="sixth year">600 level</option>
		  </select>
		      <br/>
		      <label for="date">Date Of Birth:</label>
		      <input type="date"name="Date_Of_Birth" value="" >
		      <label for="email">Email:</label>
		      <input type="email"name="Email" value="" >
		      <label for="tel">Telephone:</label>
		      <input type="tel"name="TeleTelephone" value="" >
		      <br/>
		      <label for="textfield">Place of IT:</label>
		      <input type="text"name="IT_Name" value="" >
		  <label for="radiobtn" id="gender">Gender:</label>
          <label>
            <input type="radio" name="Gender" value="male" id="Gender_0">
            Male</label>
          
          <label>
            <input type="radio" name="Gender" value="female" id="Gender_1">
            Female</label>
          
        
        <label for="person_type" id="person_type_label">Person Type:</label>
		          <select name="Person_type" value="" id="person_type">
					  <option value="student">Student</option>
					  <option value="external">External Supervisor</option>
					  <option value="internal">Internal Supervisor</option>
		  </select>
		          <br/>
		        <label for="textfield">Username:</label>
		        <input type="text"name="User_name" value="" >
		        <label for="textfield">Password:</label>
		        <input type="password"name="Password" value="">
		        <label for="textfield">Retype Password:</label>
		        <input type="password"name="Retype_Password" value="" >
		        <input name="submit" type="submit" class="btn btn-primary btn-lg"  id="submitbtn" value="Submit" >
		        
        
		  
                
      </div>
    </form>	
		<footer class="container">
          <p>&copy; e_LogBook.com</p>
            </footer>
        
        <!-- /container -->

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>