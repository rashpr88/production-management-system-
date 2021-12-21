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
 
    <h1 align="center"><u><font color=#008B8B>DAILY (ALL)</font></u></h1>
	<form action="" method="post">	
	<div align="center" bgcolor="#99999C">
         <font  size=4><mark><b>DATE : </b></mark></font>&nbsp;
         <input type="date"  name="mf" size=50 />
         <input type="submit"  value="SHOW ALL" name="show"/>		 
         <form action="">
         <input type="SUBMIT" value="RESET" />
         </form>
	     	
     
	 
<?php
		  error_reporting (E_ALL^E_NOTICE);
		  // all daily productions 
		  
     $conn = mysqli_connect("localhost","root","","cs_2001") or die("unsucessful");
     if(isset($_POST['show'])){
		 $date=$_POST['mf'];
		$d=date_create("$date");
        $n= date_format($d,"n");
		$conn = mysqli_connect("localhost","root","","cs_2001") or die("ERROR");
         
		 
        
		if ($n==1){
        $s= "SELECT * FROM jan WHERE   MF = '$date' && MF!= '2018-01-01' ";
		
		}
		elseif ($n==2){
        $s= "SELECT * FROM feb WHERE   MF = '$date' && MF!= '2018-01-01' ";
		
		}
		elseif ($n==3){
        $s= "SELECT * FROM mar WHERE   MF = '$date' && MF!= '2018-01-01' ";
		
		}
		elseif ($n==4){
        $s= "SELECT * FROM apr WHERE   MF = '$date' && MF!= '2018-01-01' ";
		
		}
		elseif ($n==5){
        $s= "SELECT * FROM may WHERE   MF = '$date' && MF!= '2018-01-01' ";
		
		}
		elseif ($n==6){
        $s= "SELECT * FROM jun WHERE   MF = '$date' && MF!= '2018-01-01' ";
		
		}
		elseif ($n==7){
        $s= "SELECT * FROM jul WHERE   MF = '$date' && MF!= '2018-01-01' ";
		
		}
		elseif ($n==8){
        $s= "SELECT * FROM aug WHERE   MF = '$date' && MF!= '2018-01-01'";
		
		}
		elseif ($n==9){
        $s= "SELECT * FROM sep WHERE   MF = '$date'&& MF!= '2018-01-01' ";
		
		}
		elseif ($n==10){
        $s= "SELECT * FROM oct WHERE  MF = '$date' && MF!= '2018-01-01' ";
		
		}
		elseif ($n==11){
        $s= "SELECT * FROM nov WHERE MF = '$date'  && MF!= '2018-01-01'";
		
		}
		else{
			$s= "SELECT * FROM de WHERE  MF = '$date' && MF!= '2018-01-01' ";
			
		}
        $result=mysqli_query($conn,$s);
		if (!($result) || mysqli_num_rows($result)==0){
			echo "<script> alert('NO RECORDS ON THAT DAY!')</script>";
		}
		else
		{
        echo "<table border=5 class='t1'>";
		echo "<br><br><br><font  size=4><b><mark style='background-color:orange;'>FOR THE DATE : ". $date."</b></font>";
		echo "<br /><br /><b><mark style='background-color:red;'>No. of records : </b> <mark style='background-color:grey;'>&nbsp;". mysqli_num_rows($result)."&nbsp;</mark>";
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


              
	  
  

  




