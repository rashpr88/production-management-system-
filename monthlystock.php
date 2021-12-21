<html>
  <head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
    <style>
	 body{
		 background-image:url('../images/exit-search-maze.jpg');
	 }
    



    </style>
 </head>
 


<body >

  <br />
    <h1 align="center"><mark style="background-color:pink;">MONTHLY STOCK DETAILS</h1>
	<a href="stockframe.html" target="_top"><font size=6 ><mark>&#8617;Back</mark></font></a>
      <table   cellpadding=20px align ="center">
      <tr bgcolor="#77999C">
      <td>
	     <form action="" method="post">
		 <b>MONTH</b>
         <input type="month" name="month" style="width:50%;"  required  />

         <input type="submit"  value="SHOW ALL" name="show" />
		 </form>
		 <form action="">
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="SUBMIT" value="RESET" />
         </form>
		 
		 
<?php
	error_reporting (E_ALL^E_NOTICE);
     $conn = mysqli_connect("localhost","root","","cs_2001") or die("unsucessful");
     if(isset($_POST['show'])){
		 
         $month=$_POST['month'];
		$d=date_create("$month");
        $n= date_format($d,"m");
		$m= date_format($d,"F");
		$conn = mysqli_connect("localhost","root","","cs_2001") or die("ERROR");
         
		 
        
		if ($n==1){
        $s= "SELECT CODE_NO,SUM(QUANTITY) AS TOTAL_QUANTITY,SUM(REJECTED) AS TOTAL_REJECTED,SUM(RETRIEVED)AS TOTAL_RETRIEVED, SUM(QUANTITY)-(SUM(REJECTED)+SUM(RETRIEVED)) AS TOTAL_IN_STOCK FROM jan GROUP BY CODE_NO HAVING MAX(MF)!='2018-01-01' " ;
		
		}
		elseif ($n==2){
        $s= "SELECT CODE_NO,SUM(QUANTITY) AS TOTAL_QUANTITY,SUM(REJECTED) AS TOTAL_REJECTED,SUM(RETRIEVED)AS TOTAL_RETRIEVED, SUM(QUANTITY)-(SUM(REJECTED)+SUM(RETRIEVED)) AS TOTAL_IN_STOCK FROM feb GROUP BY CODE_NO HAVING MAX(MF)!='2018-01-01' " ;
		
		
		}
		elseif ($n==3){
        $s= "SELECT CODE_NO,SUM(QUANTITY) AS TOTAL_QUANTITY,SUM(REJECTED) AS TOTAL_REJECTED,SUM(RETRIEVED)AS TOTAL_RETRIEVED, SUM(QUANTITY)-(SUM(REJECTED)+SUM(RETRIEVED)) AS TOTAL_IN_STOCK FROM mar GROUP BY CODE_NO HAVING MAX(MF)!='2018-01-01' " ;
		
		
		}
		elseif ($n==4){
        $s= "SELECT CODE_NO,SUM(QUANTITY) AS TOTAL_QUANTITY,SUM(REJECTED) AS TOTAL_REJECTED,SUM(RETRIEVED)AS TOTAL_RETRIEVED, SUM(QUANTITY)-(SUM(REJECTED)+SUM(RETRIEVED)) AS TOTAL_IN_STOCK FROM apr GROUP BY CODE_NO HAVING MAX(MF)!='2018-01-01' " ;
		
		
		}
		elseif ($n==5){
        $s= "SELECT CODE_NO,SUM(QUANTITY) AS TOTAL_QUANTITY,SUM(REJECTED) AS TOTAL_REJECTED,SUM(RETRIEVED)AS TOTAL_RETRIEVED, SUM(QUANTITY)-(SUM(REJECTED)+SUM(RETRIEVED)) AS TOTAL_IN_STOCK FROM may GROUP BY CODE_NO HAVING MAX(MF)!='2018-01-01' " ;
		
		
		}
		elseif ($n==6){
        $s= "SELECT CODE_NO,SUM(QUANTITY) AS TOTAL_QUANTITY,SUM(REJECTED) AS TOTAL_REJECTED,SUM(RETRIEVED)AS TOTAL_RETRIEVED, SUM(QUANTITY)-(SUM(REJECTED)+SUM(RETRIEVED)) AS TOTAL_IN_STOCK FROM jun GROUP BY CODE_NO HAVING MAX(MF)!='2018-01-01' " ;
		
		
		}
		elseif ($n==7){
        $s= "SELECT CODE_NO,SUM(QUANTITY) AS TOTAL_QUANTITY,SUM(REJECTED) AS TOTAL_REJECTED,SUM(RETRIEVED)AS TOTAL_RETRIEVED, SUM(QUANTITY)-(SUM(REJECTED)+SUM(RETRIEVED)) AS TOTAL_IN_STOCK FROM jul GROUP BY CODE_NO HAVING MAX(MF)!='2018-01-01' " ;
		
		
		}
		elseif ($n==8){
        $s= "SELECT CODE_NO,SUM(QUANTITY) AS TOTAL_QUANTITY,SUM(REJECTED) AS TOTAL_REJECTED,SUM(RETRIEVED)AS TOTAL_RETRIEVED, SUM(QUANTITY)-(SUM(REJECTED)+SUM(RETRIEVED)) AS TOTAL_IN_STOCK FROM aug GROUP BY CODE_NO HAVING MAX(MF)!='2018-01-01' " ;
		
		
		}
		elseif ($n==9){
        $s= "SELECT CODE_NO,SUM(QUANTITY) AS TOTAL_QUANTITY,SUM(REJECTED) AS TOTAL_REJECTED,SUM(RETRIEVED)AS TOTAL_RETRIEVED, SUM(QUANTITY)-(SUM(REJECTED)+SUM(RETRIEVED)) AS TOTAL_IN_STOCK FROM sep GROUP BY CODE_NO HAVING MAX(MF)!='2018-01-01' " ;
		
		}
		elseif ($n==10){
        $s= "SELECT CODE_NO,SUM(QUANTITY) AS TOTAL_QUANTITY,SUM(REJECTED) AS TOTAL_REJECTED,SUM(RETRIEVED)AS TOTAL_RETRIEVED, SUM(QUANTITY)-(SUM(REJECTED)+SUM(RETRIEVED)) AS TOTAL_IN_STOCK FROM oct GROUP BY CODE_NO HAVING MAX(MF)!='2018-01-01' " ;
		
		
		}
		elseif ($n==11){
        $s= "SELECT CODE_NO,SUM(QUANTITY) AS TOTAL_QUANTITY,SUM(REJECTED) AS TOTAL_REJECTED,SUM(RETRIEVED)AS TOTAL_RETRIEVED, SUM(QUANTITY)-(SUM(REJECTED)+SUM(RETRIEVED)) AS TOTAL_IN_STOCK FROM nov GROUP BY CODE_NO HAVING MAX(MF)!='2018-01-01' " ;
		
		
		}
		else{
			$s= "SELECT CODE_NO,SUM(QUANTITY) AS TOTAL_QUANTITY,SUM(REJECTED) AS TOTAL_REJECTED,SUM(RETRIEVED)AS TOTAL_RETRIEVED, SUM(QUANTITY)-(SUM(REJECTED)+SUM(RETRIEVED)) AS TOTAL_IN_STOCK FROM de GROUP BY CODE_NO HAVING MAX(MF)!='2018-01-01' " ;
		
			
		}
        $result=mysqli_query($conn,$s);
		if (!($result) || mysqli_num_rows($result)==0){
			echo "<script> alert('NO RECORDS ON THAT MONTH!')</script>";
		}
		else
		{
        echo "<table border=5 class='t2'>";
		echo "<br /><br /><br /><font color='purple' size=4><b><u>STOCK DETAILS FOR THE MONTH</u>: </b></font><mark style='background-color:orange;'> ". $m."</mark></b></font>";
		echo "<br /><br /><b>No. of records</b> : <mark style='background-color:grey;'>&nbsp;". mysqli_num_rows($result)."&nbsp;</mark>";
        for($fld=0; $fld < mysqli_num_fields($result); $fld++){
	        $f=mysqli_fetch_field_direct($result,$fld);
	        $name=$f->name;
	        echo "<th >";
	        echo "&nbsp;&nbsp;".$name; 
	        echo "</th>"; 
        }
	    while($row = mysqli_fetch_assoc($result)){
	        echo "<tr>"; 
	        echo "<td  >".$row["CODE_NO"]."</td> <td>".$row["TOTAL_QUANTITY"]."</td> <td>".$row["TOTAL_REJECTED"]."</td> <td>".$row["TOTAL_RETRIEVED"]."</td> <td>"
	        .$row["TOTAL_IN_STOCK"]."</td> ";
            echo "</tr>";  
	    }
	    echo "</table>";
        }
	
    }
	
	mysqli_close($conn);
		 ?>	 
  
</td>

<td >
    <form action="" method="post">
    <div align="center">
	

<table  border=1 >
<tr bgcolor="peach">
<td colspan=2> <b>FOR A SPECIFIC PRODUCT</b> </td>
</tr>
<tr>

<td><b>CODE NO</b></td>
<td><input type="text" name="code" style="width:100%;" required   /></td>
</tr>
<tr>
<td><b>MONTH</b></td>
<td><input type="month" name="m" style="width:100%;" required  /></td>
</tr>

</table>
<br/><input type="submit"  value="SEARCH" name="search"/>  
</form>
<form action="">
<input type="SUBMIT" value="CANCEL" />
</form>
<?php
	error_reporting (E_ALL^E_NOTICE);
     $conn = mysqli_connect("localhost","root","","cs_2001") or die("unsucessful");
     if(isset($_POST['search'])){
		$id=$_POST['code'];
		$date=$_POST['m'];
        
        $d=date_create("$date");
        $n= date_format($d,"n");
		$m=date_format($d,"F");
		
         
		 
        
		if ($n==1){
        $s= "SELECT CODE_NO,SUM(QUANTITY) AS TOTAL_QUANTITY,SUM(REJECTED) AS TOTAL_REJECTED,SUM(RETRIEVED)AS TOTAL_RETRIEVED, SUM(QUANTITY)-(SUM(REJECTED)+SUM(RETRIEVED)) AS TOTAL_IN_STOCK FROM jan WHERE  CODE_NO = '$id'  ";
		
		}
		elseif ($n==2){
        $s= "SELECT CODE_NO,SUM(QUANTITY) AS TOTAL_QUANTITY,SUM(REJECTED) AS TOTAL_REJECTED,SUM(RETRIEVED)AS TOTAL_RETRIEVED, SUM(QUANTITY)-(SUM(REJECTED)+SUM(RETRIEVED)) FROM feb WHERE  CODE_NO = $id  ";
		
		}
		elseif ($n==3){
        $s= "SELECT CODE_NO,SUM(QUANTITY) AS TOTAL_QUANTITY,SUM(REJECTED) AS TOTAL_REJECTED,SUM(RETRIEVED)AS TOTAL_RETRIEVED, SUM(QUANTITY)-(SUM(REJECTED)+SUM(RETRIEVED)) FROM mar WHERE CODE_NO = $id AND  MF = '$date' ";
		
		}
		elseif ($n==4){
        $s= "SELECT CODE_NO,SUM(QUANTITY) AS TOTAL_QUANTITY,SUM(REJECTED) AS TOTAL_REJECTED,SUM(RETRIEVED)AS TOTAL_RETRIEVED, SUM(QUANTITY)-(SUM(REJECTED)+SUM(RETRIEVED)) FROM apr WHERE CODE_NO = $id AND  MF = '$date' ";
		
		}
		elseif ($n==5){
        $s= "SELECT CODE_NO,SUM(QUANTITY) AS TOTAL_QUANTITY,SUM(REJECTED) AS TOTAL_REJECTED,SUM(RETRIEVED)AS TOTAL_RETRIEVED, SUM(QUANTITY)-(SUM(REJECTED)+SUM(RETRIEVED)) FROM may WHERE CODE_NO = $id AND  MF = '$date' ";
		
		}
		elseif ($n==6){
        $s= "SELECT CODE_NO,SUM(QUANTITY) AS TOTAL_QUANTITY,SUM(REJECTED) AS TOTAL_REJECTED,SUM(RETRIEVED)AS TOTAL_RETRIEVED, SUM(QUANTITY)-(SUM(REJECTED)+SUM(RETRIEVED)) FROM jun WHERE CODE_NO = $id AND  MF = '$date' ";
		
		}
		elseif ($n==7){
        $s= "SELECT CODE_NO,SUM(QUANTITY) AS TOTAL_QUANTITY,SUM(REJECTED) AS TOTAL_REJECTED,SUM(RETRIEVED)AS TOTAL_RETRIEVED, SUM(QUANTITY)-(SUM(REJECTED)+SUM(RETRIEVED)) FROM jul WHERE CODE_NO = $id AND  MF = '$date' ";
		
		}
		elseif ($n==8){
        $s= "SELECT CODE_NO,SUM(QUANTITY) AS TOTAL_QUANTITY,SUM(REJECTED) AS TOTAL_REJECTED,SUM(RETRIEVED)AS TOTAL_RETRIEVED, SUM(QUANTITY)-(SUM(REJECTED)+SUM(RETRIEVED)) FROM aug WHERE CODE_NO = $id AND  MF = '$date' ";
		
		}
		elseif ($n==9){
        $s= "SELECT CODE_NO,SUM(QUANTITY) AS TOTAL_QUANTITY,SUM(REJECTED) AS TOTAL_REJECTED,SUM(RETRIEVED)AS TOTAL_RETRIEVED, SUM(QUANTITY)-(SUM(REJECTED)+SUM(RETRIEVED)) FROM sep WHERE  CODE_NO = $id AND MF = '$date' ";
		
		}
		elseif ($n==10){
        $s= "SELECT CODE_NO,SUM(QUANTITY) AS TOTAL_QUANTITY,SUM(REJECTED) AS TOTAL_REJECTED,SUM(RETRIEVED)AS TOTAL_RETRIEVED, SUM(QUANTITY)-(SUM(REJECTED)+SUM(RETRIEVED)) FROM oct WHERE CODE_NO = $id AND  MF = '$date' ";
		
		}
		elseif ($n==11){
        $s= "SELECT CODE_NO,SUM(QUANTITY) AS TOTAL_QUANTITY,SUM(REJECTED) AS TOTAL_REJECTED,SUM(RETRIEVED)AS TOTAL_RETRIEVED, SUM(QUANTITY)-(SUM(REJECTED)+SUM(RETRIEVED)) FROM nov WHERE CODE_NO = $id AND  MF = '$date' ";
		
		}
		else{
			$s= "SELECT CODE_NO,SUM(QUANTITY) AS TOTAL_QUANTITY,SUM(REJECTED) AS TOTAL_REJECTED,SUM(RETRIEVED)AS TOTAL_RETRIEVED, SUM(QUANTITY)-(SUM(REJECTED)+SUM(RETRIEVED)) FROM de WHERE  CODE_NO = $id AND MF = '$date' ";
			
		}
        $res=mysqli_query($conn,$s);
        if (!($res) || mysqli_num_rows($res)==0){
	     echo "<script>alert('NO RECORD')</script>";
        }
	    else
	    {
		echo "<font size=4>Displaying stock details of the item code </font> : <mark style='background-color:orange;'>  " . $id . " </mark> for the month -  <mark style='background-color:orange;'> ". $m." </mark></b></font>";
        
	    
        echo "<table border=5 class='t1' >";
		
		echo "<br /><br /> <b>No.of records</b> : <mark style='background-color:red;'>&nbsp;". mysqli_num_rows($res)."&nbsp;</mark>";
        for($fld=0; $fld < mysqli_num_fields($res); $fld++){
	        $f=mysqli_fetch_field_direct($res,$fld);
	        $name=$f->name;
	        echo "<th >";
	        echo "&nbsp;&nbsp;".$name; 
	        echo "</th>"; 
        }
	    while($row = mysqli_fetch_assoc($res)){
	        echo "<tr>"; 
	        echo "<td >".$row["CODE_NO"]."</td> <td>".$row["TOTAL_QUANTITY"]."</td> <td>".$row["TOTAL_REJECTED"]."</td> <td>".$row["TOTAL_RETRIEVED"]."</td> <td>"
	        .$row["TOTAL_IN_STOCK"]."</td>";
            echo "</tr>";  
	    }
	    echo "</table>";
        }
	
    }
		
	
    mysqli_close($conn);
	


?> 
               </form>
          </td>
          </tr>
		</table>
	  </div>
  </body>
</html>

  




