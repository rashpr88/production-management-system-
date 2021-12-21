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
 
    <h2 align="center"><font color="red"><u><a id="dp">DAILY (PRODUCT-WISE)</a></u></font></h2>
 
 
<?php
error_reporting (E_ALL^E_NOTICE);  
if(isset($_POST['update'])){
	
// production details update per day

     $cod=$_POST['code'];
     $date=$_POST['mf'];
     $qua=$_POST['qua'];
	 $rej=$_POST['rej'];
     $xp=$_POST['exp'];
	 $d=date_create("$date");
     $n= date_format($d,"n");
     $conn = mysqli_connect("localhost","root","","cs_2001") or die("ERROR");
     
	 
	 
	 if ($n==1){
		 
		 $sql = "UPDATE  jan 
     SET QUANTITY='$qua', REJECTED='$rej', EXP='$xp' ,IN_STOCK='$qua'-'$rej'- RETRIEVED +(SELECT IN_STOCK FROM `jan` WHERE MF< '$date' && CODE_NO='$cod' ORDER BY MF DESC LIMIT 1 ) 
     WHERE CODE_NO= '$cod' && MF= '$date' " ;
	 
	 // checking if no change done
         $se = "SELECT * FROM  jan 
     WHERE QUANTITY='$qua'&& REJECTED='$rej' && EXP='$xp' && IN_STOCK='$qua'-'$rej'- RETRIEVED +(SELECT IN_STOCK FROM `jan` WHERE MF< '$date' && CODE_NO='$cod' ORDER BY MF DESC LIMIT 1 ) 
     && CODE_NO= '$cod' && MF= '$date' " ;
        
		
		}
		elseif ($n==2){
        $sql = "UPDATE  feb 
     SET QUANTITY='$qua', REJECTED='$rej', EXP='$xp',IN_STOCK='$qua'-'$rej'- RETRIEVED +(SELECT IN_STOCK FROM `feb` WHERE MF< '$date' && CODE_NO='$cod' ORDER BY MF DESC LIMIT 1 ) 
     WHERE CODE_NO='$cod' && MF= '$date' ";
	 
	 
	 $se = "SELECT * FROM  feb 
     WHERE QUANTITY='$qua'&& REJECTED='$rej' && EXP='$xp' && IN_STOCK='$qua'-'$rej'- RETRIEVED +(SELECT IN_STOCK FROM `jan` WHERE MF< '$date' && CODE_NO='$cod' ORDER BY MF DESC LIMIT 1 ) 
     && CODE_NO= '$cod' && MF= '$date' " ;
		
		}
		elseif ($n==3){
        $sql = "UPDATE  mar 
     SET QUANTITY='$qua', REJECTED='$rej', EXP='$xp',IN_STOCK='$qua'-'$rej'- RETRIEVED +(SELECT IN_STOCK FROM `mar` WHERE MF< '$date' && CODE_NO='$cod' ORDER BY MF DESC LIMIT 1 ) 
     WHERE CODE_NO=$cod && MF= '$date' ";
	 $se = "SELECT * FROM  mar 
     WHERE QUANTITY='$qua'&& REJECTED='$rej' && EXP='$xp' && IN_STOCK='$qua'-'$rej'- RETRIEVED +(SELECT IN_STOCK FROM `jan` WHERE MF< '$date' && CODE_NO='$cod' ORDER BY MF DESC LIMIT 1 ) 
     && CODE_NO= '$cod' && MF= '$date' " ;
		
		}
		elseif ($n==4){
        $sql = "UPDATE  apr 
     SET QUANTITY='$qua', REJECTED='$rej', EXP='$xp',IN_STOCK='$qua'-'$rej'- RETRIEVED +(SELECT IN_STOCK FROM `apr` WHERE MF< '$date' && CODE_NO='$cod' ORDER BY MF DESC LIMIT 1 ) 
     WHERE CODE_NO=$cod && MF= '$date' ";
		$se = "SELECT * FROM  apr 
     WHERE QUANTITY='$qua'&& REJECTED='$rej' && EXP='$xp' && IN_STOCK='$qua'-'$rej'- RETRIEVED +(SELECT IN_STOCK FROM `jan` WHERE MF< '$date' && CODE_NO='$cod' ORDER BY MF DESC LIMIT 1 ) 
     && CODE_NO= '$cod' && MF= '$date' " ;
		}
		elseif ($n==5){
        $sql = "UPDATE  may 
     SET QUANTITY='$qua', REJECTED='$rej', EXP='$xp',IN_STOCK='$qua'-'$rej'- RETRIEVED +(SELECT IN_STOCK FROM `may` WHERE MF< '$date' && CODE_NO='$cod' ORDER BY MF DESC LIMIT 1 ) 
     WHERE CODE_NO=$cod && MF= '$date' ";
	 $se = "SELECT * FROM  may 
     WHERE QUANTITY='$qua'&& REJECTED='$rej' && EXP='$xp' && IN_STOCK='$qua'-'$rej'- RETRIEVED +(SELECT IN_STOCK FROM `jan` WHERE MF< '$date' && CODE_NO='$cod' ORDER BY MF DESC LIMIT 1 ) 
     && CODE_NO= '$cod' && MF= '$date' " ;
		
		}
		elseif ($n==6){
        $sql = "UPDATE  jun 
     SET QUANTITY='$qua', REJECTED='$rej', EXP='$xp',IN_STOCK='$qua'-'$rej'- RETRIEVED +(SELECT IN_STOCK FROM `jun` WHERE MF< '$date' && CODE_NO='$cod' ORDER BY MF DESC LIMIT 1 ) 
     WHERE CODE_NO=$cod && MF= '$date' ";
		$se = "SELECT * FROM  jun 
     WHERE QUANTITY='$qua'&& REJECTED='$rej' && EXP='$xp' && IN_STOCK='$qua'-'$rej'- RETRIEVED +(SELECT IN_STOCK FROM `jan` WHERE MF< '$date' && CODE_NO='$cod' ORDER BY MF DESC LIMIT 1 ) 
     && CODE_NO= '$cod' && MF= '$date' " ;
		}
		elseif ($n==7){
        $sql = "UPDATE  jul 
     SET QUANTITY='$qua', REJECTED='$rej', EXP='$xp',IN_STOCK='$qua'-'$rej'- RETRIEVED +(SELECT IN_STOCK FROM `jul` WHERE MF< '$date' && CODE_NO='$cod' ORDER BY MF DESC LIMIT 1 ) 
     WHERE CODE_NO=$cod && MF= '$date' ";
	 $se = "SELECT * FROM  jul 
     WHERE QUANTITY='$qua'&& REJECTED='$rej' && EXP='$xp' && IN_STOCK='$qua'-'$rej'- RETRIEVED +(SELECT IN_STOCK FROM `jan` WHERE MF< '$date' && CODE_NO='$cod' ORDER BY MF DESC LIMIT 1 ) 
     && CODE_NO= '$cod' && MF= '$date' " ;
		
		}
		elseif ($n==8){
        $sql = "UPDATE  aug 
     SET QUANTITY='$qua', REJECTED='$rej', EXP='$xp',IN_STOCK='$qua'-'$rej'- RETRIEVED +(SELECT IN_STOCK FROM `aug` WHERE MF< '$date' && CODE_NO='$cod' ORDER BY MF DESC LIMIT 1 ) 
     WHERE CODE_NO=$cod && MF= '$date' ";
	 $se = "SELECT * FROM  aug 
     WHERE QUANTITY='$qua'&& REJECTED='$rej' && EXP='$xp' && IN_STOCK='$qua'-'$rej'- RETRIEVED +(SELECT IN_STOCK FROM `jan` WHERE MF< '$date' && CODE_NO='$cod' ORDER BY MF DESC LIMIT 1 ) 
     && CODE_NO= '$cod' && MF= '$date' " ;
		
		}
		elseif ($n==9){
        $sql = "UPDATE  sep 
     SET QUANTITY='$qua', REJECTED='$rej', EXP='$xp',IN_STOCK='$qua'-'$rej'- RETRIEVED +(SELECT IN_STOCK FROM `sep` WHERE MF< '$date' && CODE_NO='$cod' ORDER BY MF DESC LIMIT 1 ) 
     WHERE CODE_NO=$cod && MF= '$date' ";
	 $se = "SELECT * FROM  sep 
     WHERE QUANTITY='$qua'&& REJECTED='$rej' && EXP='$xp' && IN_STOCK='$qua'-'$rej'- RETRIEVED +(SELECT IN_STOCK FROM `jan` WHERE MF< '$date' && CODE_NO='$cod' ORDER BY MF DESC LIMIT 1 ) 
     && CODE_NO= '$cod' && MF= '$date' " ;
		
		}
		elseif ($n==10){
        $sql = "UPDATE  oct 
     SET QUANTITY='$qua', REJECTED='$rej', EXP='$xp',IN_STOCK='$qua'-'$rej'- RETRIEVED +(SELECT IN_STOCK FROM `oct` WHERE MF< '$date' && CODE_NO='$cod' ORDER BY MF DESC LIMIT 1 ) 
     WHERE CODE_NO=$cod && MF= '$date' ";
	 $se = "SELECT * FROM  oct 
     WHERE QUANTITY='$qua'&& REJECTED='$rej' && EXP='$xp' && IN_STOCK='$qua'-'$rej'- RETRIEVED +(SELECT IN_STOCK FROM `jan` WHERE MF< '$date' && CODE_NO='$cod' ORDER BY MF DESC LIMIT 1 ) 
     && CODE_NO= '$cod' && MF= '$date' " ;
		
		}
		elseif ($n==11){
        $sql = "UPDATE  nov 
     SET QUANTITY='$qua', REJECTED='$rej', EXP='$xp',IN_STOCK='$qua'-'$rej'- RETRIEVED +(SELECT IN_STOCK FROM `nov` WHERE MF< '$date' && CODE_NO='$cod' ORDER BY MF DESC LIMIT 1 ) 
     WHERE CODE_NO=$cod && MF= '$date' ";
	 $se = "SELECT * FROM  nov 
     WHERE QUANTITY='$qua'&& REJECTED='$rej' && EXP='$xp' && IN_STOCK='$qua'-'$rej'- RETRIEVED +(SELECT IN_STOCK FROM `jan` WHERE MF< '$date' && CODE_NO='$cod' ORDER BY MF DESC LIMIT 1 ) 
     && CODE_NO= '$cod' && MF= '$date' " ;
		
		}
		else{
			$sql = "UPDATE  de
     SET QUANTITY='$qua', REJECTED='$rej', EXP='$xp',IN_STOCK='$qua'-'$rej'- RETRIEVED +(SELECT IN_STOCK FROM `de` WHERE MF< '$date' && CODE_NO='$cod' ORDER BY MF DESC LIMIT 1 ) 
     WHERE CODE_NO=$cod && MF= '$date' ";
	 $se = "SELECT * FROM  de 
     WHERE QUANTITY='$qua'&& REJECTED='$rej' && EXP='$xp' && IN_STOCK='$qua'-'$rej'- RETRIEVED +(SELECT IN_STOCK FROM `jan` WHERE MF< '$date' && CODE_NO='$cod' ORDER BY MF DESC LIMIT 1 ) 
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
	
	
	// search by date for all daily details
	
if (isset($_POST['search'])){
	     
        $id=$_POST['code'];
		
		$date=$_POST['mf'];
		$d=date_create("$date");
        $n= date_format($d,"n");
		$conn = mysqli_connect("localhost","root","","cs_2001") or die("ERROR");
         
		 
        
		if ($n==1){
        $s= "SELECT * FROM jan WHERE  CODE_NO = '$id' AND MF = '$date' ";
		
		}
		elseif ($n==2){
        $s= "SELECT * FROM feb WHERE  CODE_NO = '$id' AND MF = '$date' ";
		
		}
		elseif ($n==3){
        $s= "SELECT * FROM mar WHERE CODE_NO = '$id' AND  MF = '$date' ";
		
		}
		elseif ($n==4){
        $s= "SELECT * FROM apr WHERE CODE_NO = '$id' AND  MF = '$date' ";
		
		}
		elseif ($n==5){
        $s= "SELECT * FROM may WHERE CODE_NO = '$id' AND  MF = '$date' ";
		
		}
		elseif ($n==6){
        $s= "SELECT * FROM jun WHERE CODE_NO = '$id' AND  MF = '$date' ";
		
		}
		elseif ($n==7){
        $s= "SELECT * FROM jul WHERE CODE_NO = '$id' AND  MF = '$date' ";
		
		}
		elseif ($n==8){
        $s= "SELECT * FROM aug WHERE CODE_NO = '$id' AND  MF = '$date' ";
		
		}
		elseif ($n==9){
        $s= "SELECT * FROM sep WHERE  CODE_NO = '$id' AND MF = '$date' ";
		
		}
		elseif ($n==10){
        $s= "SELECT * FROM oct WHERE CODE_NO = '$id' AND  MF = '$date' ";
		
		}
		elseif ($n==11){
        $s= "SELECT * FROM nov WHERE CODE_NO = '$id' AND  MF = '$date' ";
		
		}
		else{
			$s= "SELECT * FROM de WHERE  CODE_NO = '$id' AND MF = '$date' ";
			
		}
        $res=mysqli_query($conn,$s);
        if (!($res) || mysqli_num_rows($res)==0){
	     echo "<script>alert('NO RECORD')</script>";
        }
	    else
	    {
		echo "<font size=5 ><mark>Displaying production details of the item code  :<b>" . $id . "</b> on the date :<b> " . $date."</b></font>";
        
	    $row = mysqli_fetch_assoc($res);
		}
	
    mysqli_close($conn);
	
}

?> 


      <table  cellpadding=10px align ="center">
      <tr bgcolor="#99999C">
      <td>
	  <form action="">
<input type="SUBMIT" value="RESET" />
</form>
	     <form action="" method="post">
         
  
  <br/><input type="submit"  value="SEARCH" name="search"/><br>  <input type="submit" name="update" value="UPDATE"  /><br>
  
</td>
<td >
    
    <div align="center">
	
<h3 >SEARCH AND UPDATE FOR PRODUCT</h3>
<table border=1 >
<tr>
<td bgcolor="#d8bfd8"><b>CODE NO</b></td>

<!-- getting the output at input fields other than input-->

<td><input type="text" name="code" style="width:100%;padding: 10px 15px;margin: 6px 0;" required  value= "<?php echo $row["CODE_NO"] ; ?>" /></td>
</tr>
<td bgcolor="#d8bfd8"><b>MF.DATE</b></td>
<td><input type="date" name="mf" style="width:100%;padding: 10px 15px;margin: 6px 0;" required  value= "<?php echo $row["MF"] ; ?>" /></td>
</tr>
<tr>
<td bgcolor="#d8bfd8"><b>QUANTITY</b></td>
<td><input type="text" name="qua" style="width:100%;padding: 10px 15px;margin: 6px 0;" value= "<?php echo $row["QUANTITY"]; ?>" /></td>
</tr>
<tr>
<td bgcolor="#d8bfd8"><b>REJECTED</b></td>
<td><input type="text" name="rej" style="width:100%;padding: 10px 15px;margin: 6px 0;" value= "<?php echo $row["REJECTED"]; ?>" />
</td>
<tr>
<td bgcolor="#d8bfd8"><b>EXP. DATE</b></td>
<td><input type="text" name="exp" style="width:100%;padding: 10px 15px;margin: 6px 0;" value= "<?php echo$row["EXP"] ; ?>"  /></td>

</tr>
</table>

</form>

               </form>
          </td>
          </tr>
		</table>
	  </div>
	  
  </body>
</html>

  




