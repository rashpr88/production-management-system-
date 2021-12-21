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
    <h1 align="center"><mark style="background-color:pink;">DAILY STOCK DETAILS</h1>
	<a href="stockframe.html" target="_top"><font size=6 ><mark>&#8617;Back</mark></font></a>
      <table   cellpadding=20px align ="center">
      <tr bgcolor="#99999C">
	  <td >
    <form action="" method="post">
    <div align="center">
	
    <h3 style="color:purple;">UPDATE  DAILY STOCK</h3>
     <table class="t3" border=1 >
       <tr>
         <td bgcolor="#d8bfd8"><b>CODE NO :</b></td>
         <td><input type="text" name="code" style="width:100%;padding: 10px 15px;margin: 6px 0;" required   /></td>
        </tr>
        <tr>
          <td bgcolor="#d8bfd8"><b>DATE :</b></td>
          <td><input type="date" name="date" style="width:100%;padding: 10px 15px;margin: 6px 0;" required /></td>
        </tr>
	    <tr>
          <td bgcolor="#d8bfd8"><b>RETRIEVED <br /> AMOUNT:</b></td>
          <td><input type="text" name="re" style="width:100%;padding: 10px 15px;margin: 6px 0;"  /></td>
        </tr>

    </table>
    <br/><input type="submit"  value="UPDATE" name="update"/>  
</form>
    <form action="">
       <input type="submit" value="CANCEL" />

<?php
error_reporting (E_ALL^E_NOTICE);  

// update 

if(isset($_POST['update'])){

     $cod=$_POST['code'];
     $date=$_POST['date'];
     
	 $rev=$_POST['re'];
     
	 $d=date_create("$date");
     $n= date_format($d,"n");
     $conn = mysqli_connect("localhost","root","","cs_2001") or die("ERROR");
     
	 
	 
	 if ($n==1){
		 $sql = "UPDATE  jan SET
     RETRIEVED='$rev', IN_STOCK=QUANTITY-REJECTED- '$rev' +(SELECT IN_STOCK FROM `jan` WHERE MF< '$date' && CODE_NO='$cod' ORDER BY MF DESC LIMIT 1 ) 
     WHERE CODE_NO= '$cod' && MF= '$date' " ;
	 
	 // if no change done on updating
	 
         $se = "SELECT RETRIEVED && IN_STOCK  FROM  jan 
     WHERE  RETRIEVED='$rev' &&  IN_STOCK= QUANTITY - REJECTED - '$rev'+(SELECT IN_STOCK FROM `jan` WHERE MF< '$date' && CODE_NO='$cod' ORDER BY MF DESC LIMIT 1 ) 
     && CODE_NO= '$cod' && MF= '$date' " ;
        
		
		}
		elseif ($n==2){
        $sql = $sql = "UPDATE  feb SET
     RETRIEVED='$rev', IN_STOCK=QUANTITY-REJECTED- '$rev' +(SELECT IN_STOCK FROM `jan` WHERE MF< '$date' && CODE_NO='$cod' ORDER BY MF DESC LIMIT 1 ) 
     WHERE CODE_NO= '$cod' && MF= '$date' " ;
         $se = "SELECT REJECTED && RETRIEVED  FROM  feb 
     WHERE  RETRIEVED='$rev' &&  IN_STOCK= QUANTITY - REJECTED - '$rev'+(SELECT IN_STOCK FROM `jan` WHERE MF< '$date' && CODE_NO='$cod' ORDER BY MF DESC LIMIT 1 ) 
     && CODE_NO= '$cod' && MF= '$date' " ;
		
		}
		elseif ($n==3){
        $sql = $sql = "UPDATE  mar SET
     RETRIEVED='$rev', IN_STOCK=QUANTITY-REJECTED- '$rev' +(SELECT IN_STOCK FROM `jan` WHERE MF< '$date' && CODE_NO='$cod' ORDER BY MF DESC LIMIT 1 ) 
     WHERE CODE_NO= '$cod' && MF= '$date' " ;
         $se = "SELECT RETRIEVED && IN_STOCK  FROM  mar 
     WHERE  RETRIEVED='$rev' &&  IN_STOCK= QUANTITY - REJECTED - '$rev'+(SELECT IN_STOCK FROM `jan` WHERE MF< '$date' && CODE_NO='$cod' ORDER BY MF DESC LIMIT 1 ) 
     && CODE_NO= '$cod' && MF= '$date' " ;
		}
		elseif ($n==4){
     $sql = "UPDATE  apr SET
     RETRIEVED='$rev', IN_STOCK=QUANTITY-REJECTED- '$rev' +(SELECT IN_STOCK FROM `jan` WHERE MF< '$date' && CODE_NO='$cod' ORDER BY MF DESC LIMIT 1 ) 
     WHERE CODE_NO= '$cod' && MF= '$date' " ;
         $se = "SELECT RETRIEVED && IN_STOCK FROM  apr 
     WHERE  RETRIEVED='$rev' &&  IN_STOCK= QUANTITY - REJECTED - '$rev'+(SELECT IN_STOCK FROM `jan` WHERE MF< '$date' && CODE_NO='$cod' ORDER BY MF DESC LIMIT 1 ) 
     && CODE_NO= '$cod' && MF= '$date' " ;
		}
		elseif ($n==5){
        $sql = $sql = "UPDATE  may SET
     RETRIEVED='$rev', IN_STOCK=QUANTITY-REJECTED- '$rev' +(SELECT IN_STOCK FROM `jan` WHERE MF< '$date' && CODE_NO='$cod' ORDER BY MF DESC LIMIT 1 ) 
     WHERE CODE_NO= '$cod' && MF= '$date' " ;
         $se = "SELECT RETRIEVED && IN_STOCK  FROM  may
     WHERE  RETRIEVED='$rev' &&  IN_STOCK= QUANTITY - REJECTED - '$rev'+(SELECT IN_STOCK FROM `jan` WHERE MF< '$date' && CODE_NO='$cod' ORDER BY MF DESC LIMIT 1 ) 
     && CODE_NO= '$cod' && MF= '$date' " ;
		
		}
		elseif ($n==6){
        $sql = $sql = "UPDATE  jun SET
     RETRIEVED='$rev', IN_STOCK=QUANTITY-REJECTED- '$rev' +(SELECT IN_STOCK FROM `jan` WHERE MF< '$date' && CODE_NO='$cod' ORDER BY MF DESC LIMIT 1 ) 
     WHERE CODE_NO= '$cod' && MF= '$date' " ;
         $se = "SELECT RETRIEVED && IN_STOCK  FROM  jun 
     WHERE  RETRIEVED='$rev' &&  IN_STOCK= QUANTITY - REJECTED - '$rev'+(SELECT IN_STOCK FROM `jan` WHERE MF< '$date' && CODE_NO='$cod' ORDER BY MF DESC LIMIT 1 ) 
     && CODE_NO= '$cod' && MF= '$date' " ;
		}
		elseif ($n==7){
        $sql = $sql = "UPDATE  jul SET
     RETRIEVED='$rev', IN_STOCK=QUANTITY-REJECTED- '$rev' +(SELECT IN_STOCK FROM `jan` WHERE MF< '$date' && CODE_NO='$cod' ORDER BY MF DESC LIMIT 1 ) 
     WHERE CODE_NO= '$cod' && MF= '$date' " ;
         $se = "SELECT RETRIEVED && IN_STOCK  FROM  jul 
     WHERE  RETRIEVED='$rev' &&  IN_STOCK= QUANTITY - REJECTED - '$rev'+(SELECT IN_STOCK FROM `jan` WHERE MF< '$date' && CODE_NO='$cod' ORDER BY MF DESC LIMIT 1 ) 
     && CODE_NO= '$cod' && MF= '$date' " ;
		
		}
		elseif ($n==8){
        $sql = $sql = "UPDATE  aug SET
     RETRIEVED='$rev', IN_STOCK=QUANTITY-REJECTED- '$rev' +(SELECT IN_STOCK FROM `jan` WHERE MF< '$date' && CODE_NO='$cod' ORDER BY MF DESC LIMIT 1 ) 
     WHERE CODE_NO= '$cod' && MF= '$date' " ;
         $se = "SELECT RETRIEVED && IN_STOCK  FROM  aug 
     WHERE  RETRIEVED='$rev' &&  IN_STOCK= QUANTITY - REJECTED - '$rev'+(SELECT IN_STOCK FROM `jan` WHERE MF< '$date' && CODE_NO='$cod' ORDER BY MF DESC LIMIT 1 ) 
     && CODE_NO= '$cod' && MF= '$date' " ;
		}
		elseif ($n==9){
        $sql = $sql = "UPDATE  sep SET
     RETRIEVED='$rev', IN_STOCK=QUANTITY-REJECTED- '$rev' +(SELECT IN_STOCK FROM `jan` WHERE MF< '$date' && CODE_NO='$cod' ORDER BY MF DESC LIMIT 1 ) 
     WHERE CODE_NO= '$cod' && MF= '$date' " ;
         $se = "SELECT RETRIEVED && IN_STOCK  FROM  sep 
     WHERE  RETRIEVED='$rev' &&  IN_STOCK= QUANTITY - REJECTED - '$rev'+(SELECT IN_STOCK FROM `jan` WHERE MF< '$date' && CODE_NO='$cod' ORDER BY MF DESC LIMIT 1 ) 
     && CODE_NO= '$cod' && MF= '$date' " ;
		
		}
		elseif ($n==10){
        $sql = $sql = "UPDATE  oct SET
     RETRIEVED='$rev', IN_STOCK=QUANTITY-REJECTED- '$rev' +(SELECT IN_STOCK FROM `jan` WHERE MF< '$date' && CODE_NO='$cod' ORDER BY MF DESC LIMIT 1 ) 
     WHERE CODE_NO= '$cod' && MF= '$date' " ;
         $se = "SELECT RETRIEVED && IN_STOCK  FROM  oct 
     WHERE  RETRIEVED='$rev' &&  IN_STOCK= QUANTITY - REJECTED - '$rev'+(SELECT IN_STOCK FROM `jan` WHERE MF< '$date' && CODE_NO='$cod' ORDER BY MF DESC LIMIT 1 ) 
     && CODE_NO= '$cod' && MF= '$date' " ;
		
		}
		elseif ($n==11){
        $sql = $sql = "UPDATE  nov SET
     RETRIEVED='$rev', IN_STOCK=QUANTITY-REJECTED- '$rev' +(SELECT IN_STOCK FROM `jan` WHERE MF< '$date' && CODE_NO='$cod' ORDER BY MF DESC LIMIT 1 ) 
     WHERE CODE_NO= '$cod' && MF= '$date' " ;
         $se = "SELECT RETRIEVED && IN_STOCK  FROM  nov
     WHERE  RETRIEVED='$rev' &&  IN_STOCK= QUANTITY - REJECTED - '$rev'+(SELECT IN_STOCK FROM `jan` WHERE MF< '$date' && CODE_NO='$cod' ORDER BY MF DESC LIMIT 1 ) 
     && CODE_NO= '$cod' && MF= '$date' " ;
		
		}
		else{
			$sql = "UPDATE  de SET
     RETRIEVED='$rev', IN_STOCK=QUANTITY-REJECTED- '$rev' +(SELECT IN_STOCK FROM `jan` WHERE MF< '$date' && CODE_NO='$cod' ORDER BY MF DESC LIMIT 1 ) 
     WHERE CODE_NO= '$cod' && MF= '$date' " ;
         $se = "SELECT   RETRIEVED && IN_STOCK FROM  de 
     WHERE  RETRIEVED='$rev' &&  IN_STOCK= QUANTITY - REJECTED - '$rev'+(SELECT IN_STOCK FROM `jan` WHERE MF< '$date' && CODE_NO='$cod' ORDER BY MF DESC LIMIT 1 ) 
     && CODE_NO= '$cod' && MF= '$date' " ;
			
		}
    
	 
     $ser=mysqli_query($conn,$se);
     $up = mysqli_query($conn,$sql);
	 
	 
	 if ( mysqli_num_rows($ser)==1){

         echo "<script>alert('NO CHANGE IS DONE TO THE RECORD')</script>";
		 
        }
		else if ( mysqli_affected_rows($conn)==1){
			echo "<script>alert('RECORD UPDATED')</script>";
		}
     else
          {
	     echo "<script>alert('RECORD NOT FOUND TO UPDATE')</script>";
        }


  mysqli_close($conn);
    }


?> 









</form>

      
	  

      <td>
	  <h3 STYLE='color:red;'>DAILY STOCK OF ALL MANUFACTURED PRODUCTS</h3>
	     <form action="" method="post">
		 <b>DATE</b>
         <input type="date" name="date" style="width:50%;" required  />

         <input type="submit" value="SHOW ALL" name="show" />
		 </form>
		 <form action="" method="post">
		 <input type="submit" value="RESET" name="reset" />
		 </form>
		 
<?php
	error_reporting (E_ALL^E_NOTICE);
     $conn = mysqli_connect("localhost","root","","cs_2001") or die("unsucessful");
     if(isset($_POST['show'])){
        $date=$_POST['date'];
        
        $d=date_create("$date");
        $n= date_format($d,"n");
        
		
		$conn = mysqli_connect("localhost","root","","cs_2001") or die("ERROR");
         
		 
        
		if ($n==1){
        $s= "SELECT CODE_NO,QUANTITY,REJECTED,RETRIEVED,IN_STOCK AS TOTAL_IN_STOCK   FROM jan  WHERE  MF='$date' GROUP BY CODE_NO ";
		
		}
		elseif ($n==2){
        $s= "SELECT CODE_NO,QUANTITY,REJECTED,RETRIEVED,IN_STOCK AS TOTAL_IN_STOCK   FROM feb  WHERE  MF='$date' GROUP BY CODE_NO ";
		
		}
		elseif ($n==3){
        $s= "SELECT CODE_NO,QUANTITY,REJECTED,RETRIEVED,IN_STOCK AS TOTAL_IN_STOCK   FROM mar  WHERE  MF='$date' GROUP BY CODE_NO ";
		
		}
		elseif ($n==4){
        $s= "SELECT CODE_NO,QUANTITY,REJECTED,RETRIEVED,IN_STOCK AS TOTAL_IN_STOCK   FROM apr  WHERE  MF='$date' GROUP BY CODE_NO ";
		
		}
		elseif ($n==5){
        $s= "SELECT CODE_NO,QUANTITY,REJECTED,RETRIEVED,IN_STOCK AS TOTAL_IN_STOCK   FROM may  WHERE  MF='$date' GROUP BY CODE_NO ";
		
		}
		elseif ($n==6){
        $s= "SELECT CODE_NO,QUANTITY,REJECTED,RETRIEVED,IN_STOCK AS TOTAL_IN_STOCK   FROM jun  WHERE  MF='$date' GROUP BY CODE_NO ";
		
		}
		elseif ($n==7){
        $s= "SELECT CODE_NO,QUANTITY,REJECTED,RETRIEVED,IN_STOCK AS TOTAL_IN_STOCK   FROM jul  WHERE  MF='$date' GROUP BY CODE_NO ";
		
		}
		elseif ($n==8){
        $s= "SELECT CODE_NO,QUANTITY,REJECTED,RETRIEVED,IN_STOCK AS TOTAL_IN_STOCK   FROM aug  WHERE  MF='$date' GROUP BY CODE_NO ";
		
		}
		elseif ($n==9){
        $s= "SELECT CODE_NO,QUANTITY,REJECTED,RETRIEVED,IN_STOCK AS TOTAL_IN_STOCK   FROM sep  WHERE  MF='$date' GROUP BY CODE_NO ";
		
		}
		elseif ($n==10){
        $s= "SELECT CODE_NO,QUANTITY,REJECTED,RETRIEVED,IN_STOCK AS TOTAL_IN_STOCK   FROM oct  WHERE  MF='$date' GROUP BY CODE_NO ";
		
		}
		elseif ($n==11){
        $s= "SELECT CODE_NO,QUANTITY,REJECTED,RETRIEVED,IN_STOCK AS TOTAL_IN_STOCK   FROM nov  WHERE  MF='$date' GROUP BY CODE_NO ";
		
		}
		else{
			$s= "SELECT CODE_NO,QUANTITY,REJECTED,RETRIEVED,IN_STOCK AS TOTAL_IN_STOCK   FROM de  WHERE  MF='$date' GROUP BY CODE_NO";
			
		}
        $result=mysqli_query($conn,$s);
		if (!($result) || mysqli_num_rows($result)==0){
			echo"<script>alert('NO RECORDS !')</script>";
		}
		else {
		echo "<br /><br /><font size=4>Displaying stock details of all the items produced on the date - </b></font><mark style='background-color:orange;'>" . $date."</mark>";
        echo "<table class='t2' border=2 >";
		echo "<br /><br /><b>No.of records</b> : <mark style='background-color:red;'>&nbsp;". mysqli_num_rows($result)."&nbsp;";
        for($fld=0; $fld < mysqli_num_fields($result); $fld++){
	        $f=mysqli_fetch_field_direct($result,$fld);
	        $name=$f->name;
	        echo "<th >";
	        echo "&nbsp;&nbsp;".$name; 
	        echo "</th>"; 
		
        }
	    while($row = mysqli_fetch_assoc($result)){
	        echo "<tr>"; 
	        echo "<td >".$row["CODE_NO"]."</td> <td>".$row["QUANTITY"]."</td> <td>".$row["REJECTED"]."</td> <td>".$row["RETRIEVED"]."</td> <td>"
	        .$row["TOTAL_IN_STOCK"]."</td>";
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
<td><b>DATE</b></td>
<td><input type="date" name="d" style="width:100%;" required  /></td>
</tr>

</table>
<br/><input type="submit"  value="SEARCH" name="search"/>  
</form>
<form action="">
<input type="SUBMIT" value="RESET" />
</form>
<?php
	error_reporting (E_ALL^E_NOTICE);
	
	// search
	
     $conn = mysqli_connect("localhost","root","","cs_2001") or die("unsucessful");
     if(isset($_POST['search'])){
		$id=$_POST['code'];
		$date=$_POST['d'];
        
        $d=date_create("$date");
        $n= date_format($d,"n");
		$conn = mysqli_connect("localhost","root","","cs_2001") or die("ERROR");
         
		 
        
		if ($n==1){
        $s= "SELECT QUANTITY,REJECTED,RETRIEVED,IN_STOCK FROM jan WHERE  CODE_NO = '$id' AND MF = '$date' ";
		
		}
		elseif ($n==2){
        $s= "SELECT QUANTITY,REJECTED,RETRIEVED,IN_STOCK FROM feb WHERE  CODE_NO = '$id' AND MF = '$date'  ";
		
		}
		elseif ($n==3){
        $s= "SELECT QUANTITY,REJECTED,RETRIEVED,IN_STOCK FROM mar WHERE  CODE_NO = '$id' AND MF = '$date'  ";
		
		}
		elseif ($n==4){
        $s= "SELECT QUANTITY,REJECTED,RETRIEVED,IN_STOCK FROM apr WHERE  CODE_NO = '$id' AND MF = '$date'  ";
		
		}
		elseif ($n==5){
        $s= "SELECT QUANTITY,REJECTED,RETRIEVED,IN_STOCK FROM may WHERE  CODE_NO = '$id' AND MF = '$date'  ";
		
		}
		elseif ($n==6){
        $s= "SELECT QUANTITY,REJECTED,RETRIEVED,IN_STOCK FROM jun WHERE  CODE_NO = '$id' AND MF = '$date'  ";
		
		}
		elseif ($n==7){
        $s= "SELECT QUANTITY,REJECTED,RETRIEVED,IN_STOCK FROM jul WHERE  CODE_NO = '$id' AND MF = '$date'  ";
		
		}
		elseif ($n==8){
        $s= "SELECT QUANTITY,REJECTED,RETRIEVED,IN_STOCK FROM aug WHERE  CODE_NO = '$id' AND MF = '$date' ";
		
		}
		elseif ($n==9){
        $s= "SELECT QUANTITY,REJECTED,RETRIEVED,IN_STOCK FROM sep WHERE  CODE_NO = '$id' AND MF = '$date'  ";
		
		}
		elseif ($n==10){
        $s= "SELECT QUANTITY,REJECTED,RETRIEVED,IN_STOCK FROM oct WHERE  CODE_NO = '$id' AND MF = '$date'  ";
		
		}
		elseif ($n==11){
        $s= "SELECT QUANTITY,REJECTED,RETRIEVED,IN_STOCK FROM nov WHERE  CODE_NO = '$id' AND MF = '$date'  ";
		
		}
		else{
			$s= "SELECT QUANTITY,REJECTED,RETRIEVED,IN_STOCK FROM de WHERE  CODE_NO = '$id' AND MF = '$date'  ";
			
		}
        $res=mysqli_query($conn,$s);
        if (!($res) || mysqli_num_rows($res)==0){
	     echo "<script>alert('NO RECORD')</script>";
        }
	    else
	    {
		echo "<font size=4>Displaying stock details of the item code </font> : <mark style='background-color:orange;'>" . $id . "</mark><font size=4> on the date - </b></font><mark style='background-color:orange;'>" . $date."</mark>";
        
	    
        echo "<table border=5 class='t1' >";
		
		echo "<br><b>No.of records</b> : <mark style='background-color:red;'>&nbsp;". mysqli_num_rows($res)."&nbsp;</mark>";
        for($fld=0; $fld < mysqli_num_fields($res); $fld++){
	        $f=mysqli_fetch_field_direct($res,$fld);
	        $name=$f->name;
	        echo "<th >";
	        echo "&nbsp;&nbsp;".$name; 
	        echo "</th>"; 
        }
	    while($row = mysqli_fetch_assoc($res)){
	        echo "<tr>"; 
	        echo "<td >".$row["QUANTITY"]."</td> <td>".$row["REJECTED"]."</td> <td>".$row["RETRIEVED"]."</td> <td>"
	        .$row["IN_STOCK"]."</td>";
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

  




