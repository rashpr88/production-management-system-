<html>
  <head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
	<style>
	 body{
		 background-image:url('../images/pic.jpg');
	 }
    



    </style>
 </head>
 

	
 

<body >
 
    <h1 align="center"><u><font color=#008B8B>Monthly (ALL)</font></u></h1>
	<form action="" method="post">	
	<div align="center" bgcolor="#99999C">
         <font  size=4><mark><b>Month : </b></mark>&nbsp;
         <input type="month"  name="mon" size=50 required />
         <input type="submit"  value="SHOW ALL" name="show"/>	
         </form>		 
         <form action="">
         <input type="SUBMIT" value="RESET" />
         </form>
	     	
     
	 
<?php
		  error_reporting (E_ALL^E_NOTICE);
		  
		  // search
		  
     $conn = mysqli_connect("localhost","root","","cs_2001") or die("unsucessful");
     if(isset($_POST['show'])){
		$month=$_POST['mon'];
		$code=$_POST["code"];
		$d=date_create("$month");
        $n= date_format($d,"m");
		$y= date_format($d,"Y");
		$m= date_format($d,"F");
		$conn = mysqli_connect("localhost","root","","cs_2001") or die("ERROR");
         
		 
        
		if ($n==1){
        $s= "SELECT * FROM jan WHERE  YEAR(MF) = '$y' "   ;
		
		}
		elseif ($n==2){
        $s= "SELECT * FROM feb WHERE  YEAR(MF) = '$y'" ;
		
		}
		elseif ($n==3){
        $s= "SELECT * FROM mar WHERE  YEAR(MF) = '$y' ";
		
		}
		elseif ($n==4){
        $s= "SELECT * FROM apr WHERE  YEAR(MF) = '$y'";
		
		}
		elseif ($n==5){
        $s= "SELECT * FROM may WHERE  YEAR(MF) = '$y'";
		
		}
		elseif ($n==6){
        $s= "SELECT * FROM jun WHERE  YEAR(MF) = '$y'";
		
		}
		elseif ($n==7){
        $s= "SELECT * FROM jul WHERE  YEAR(MF) = '$y'";
		
		}
		elseif ($n==8){
        $s= "SELECT * FROM aug WHERE  YEAR(MF) = '$y'";
		
		}
		elseif ($n==9){
        $s= "SELECT * FROM sep WHERE  YEAR(MF) = '$y'";
		
		}
		elseif ($n==10){
        $s= "SELECT * FROM oct WHERE  YEAR(MF) = '$y'";
		
		}
		elseif ($n==11){
        $s= "SELECT * FROM nov WHERE  YEAR(MF) = '$y'";
		
		}
		else{
			$s= "SELECT * FROM de WHERE  YEAR(MF) = '$y'";
			
		}
        $result=mysqli_query($conn,$s);
		if (!($result) || mysqli_num_rows($result)==0){
			echo "<script> alert('NO RECORDS ON THAT MONTH!')</script>";
		}
		else
		{
        echo "<table border=5 class='t2'>";
		echo "<br><br><br><font  size=4><b><mark style='background-color:orange;'>PRODUCTION DETAILS OF ALL PRODUCTS OF THE MONTH : ". $m."</b></font>";
		echo "<br><b><mark style='background-color:red;'>No. of records : </b> <mark style='background-color:grey;'>&nbsp;". mysqli_num_rows($result)."&nbsp;</mark>";
        for($fld=0; $fld < mysqli_num_fields($result)-2; $fld++){
	        $f=mysqli_fetch_field_direct($result,$fld);
	        $name=$f->name;
	        echo "<th >";
	        echo "&nbsp;&nbsp;".$name; 
	        echo "</th>"; 
        }
	    while($row = mysqli_fetch_assoc($result)){
	        echo "<tr>"; 
	        echo "<td >".$row["CODE_NO"]."</td> <td>".$row["QUANTITY"]."</td> <td>".$row["MF"]."</td> <td>"
	        .$row["EXP"]."</td><td>".$row["REJECTED"]."</td> ";
            echo "</tr>";  
	    }
	    echo "</table>";
        }
	
    }
	
	mysqli_close($conn);
		 ?>	 
    </body>
</html>


              
	  
  

  




