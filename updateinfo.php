<html>
 <head>
  <title> USERNAME PASSWORD</title>
  <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
  <body background="../images/pic2.png">
    <br /><br />
     <button onclick="goBack()">BACK</button></a>
      <script>
       function goBack(){
       window.history.back();
       }
      </script>
    <div align="center">
      <form method="post" action=""> 
  

<?php
 error_reporting (E_ALL^E_NOTICE);
 
     // checking account details
	 
 if (isset($_POST['sub'])) {
	 $un=$_POST['un'];
	 $pa=$_POST ['p'];
	 $account=$_POST['account'];
	 
	  $conn=mysqli_connect("localhost", "root", "", "cs_2001") or die("Unsuccessful");
	  $x="SELECT PASSWORD FROM login WHERE USERNAME='$un'&& PASSWORD='$pa' && TYPE= '$account'";
	  
	  
	  $result=mysqli_query($conn,$x);
	  
	  if (!($result)||mysqli_num_rows($result)==0) {
		echo "<form method='post' action=''><script>alert('Please enter valid details')</script>";
	  }
      else {
		  // new details enter
        echo "<div style='background-color:grey;width:50%' align='center'>
		<fieldset > 
          <legend>  <h3>INSERT NEW USERNAME & PASSWORD</h3> </font> </legend> <br />
	      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;New Username: <input type='text' name='username' autofocus required> <br /> <br />
	      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;New Password: <input type='password' name='password' size='20%' required> <br /> 
	      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(at least 3 characters)<br /><br />
	      Confirm Password: <input type='password' name='cp' size='20%' required> <br /> <br />
	      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Account:
          <input type='radio' name='acc' value='ADMIN'/>ADMIN
          <input type='radio' name='acc' value='USER'/>USER<br /><br />
	      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Secret Code: <input type='text' name='sec' size='20%' required> <br /> <br />
	    </fieldset>
	    <p  align=center'> <input type='Submit' value='Submit' name='s'>
	      <input type='reset' value='Cancel'> </p> 
	</div>
	";
		
	  }
	  mysqli_close($conn);
 }
 ?>
 <!-- details confirm -->
<div  style="width:50%;background-color:beige;">
  
   <fieldset size="30%"> 
    <legend>  <h4>CHANGE USERNAME & PASSWORD</h4> </font> </legend> <br />
	 Current Username: <input type="text" name="un"  autofocus required> <br /> <br />
	 Current Password: <input type="password" name="p" size="20%" required> <br /> <br />
	 Account:<br />
        <input type="radio" name="account" value="ADMIN"/>ADMIN
        <input type="radio" name="account" value="USER"/>USER<br />
	</fieldset>
	<p  align="center"> 
	     <input type="Submit" value="Submit" name="sub">
	     <input type="Reset" value="Cancel"> 
    </p> 
</div>
	
<?php
error_reporting (E_ALL^E_NOTICE);

// updating account details 

if (isset($_POST['s'])){
	$use=$_POST['username'];
	$pas=$_POST['password'];
	$confirm=$_POST['cp'];
	$acc=$_POST['acc'];
	$sec=$_POST['sec'];
	
	$conn = mysqli_connect("localhost","root","","cs_2001") or die("unsucessful");
		$sel="SELECT * FROM login WHERE USERNAME='$use' && SECRET_CODE!='$sec' && TYPE= '$acc'";
		$same="SELECT * FROM login WHERE USERNAME='$use' && PASSWORD='$pas' && SECRET_CODE='$sec' && TYPE= '$acc'";
		$see="SELECT * FROM login WHERE SECRET_CODE='$sec'";
		$s= "UPDATE   login SET USERNAME='$use',PASSWORD='$pas' WHERE SECRET_CODE='$sec'"; 
		
	// password length
	
	if (strlen($pas)<2){
		echo "<script>alert('PASSWORD MUST CONTAIN AT LEAST 3 CHARACTERS!')</script>";
		
	// confirm password	
	}
	else if ($confirm != $pas){
		echo "<script>alert('Please confirm your password correctly!')</script>";
	}
	// secret code check
	
	else if (mysqli_num_rows(mysqli_query($conn,$see))==0){
		echo "<script>alert('Please enter a valid secret code!')</script>";
	}	
		
		// username duplicate check
	else if ( mysqli_num_rows(mysqli_query($conn,$sel))==1){
			echo "<script>alert('Username already taken, please select another username!')</script>";
	}
	
	// no change of details check
	else if ( mysqli_num_rows(mysqli_query($conn,$same))==1){
			echo "<script>alert('Same previous username and password !')</script>";
	}
		
		// query failed
	else if ( !(mysqli_query($conn,$s))){
			echo "<script>alert('UNSUCESS!')</script>";
	}
		
		// updated 
	else{
		echo "<script>alert('Password & Username was changed sucessfully!')</script>";
	}
		mysqli_close($conn);
	}

?>
 
  
  
  </form>
  </div>
  
 </body>
</html> 