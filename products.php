<html>
  <head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <style>
	 body{
		 background-image:url('../images/ACS_0745-500x500.jpg');
	 }
     
    </style>
 </head>
 
<?php
error_reporting (E_ALL^E_NOTICE);  
if(isset($_POST['update'])){

     $cod=$_POST['code'];
     $nme=$_POST['name'];
     $typ=$_POST['type'];
     $vol=$_POST['volume'].$_POST['v'];
     $conn = mysqli_connect("localhost","root","","cs_2001") or die("ERROR");
	 $se= "SELECT * FROM products WHERE  (CODE_NO = '$cod' && NAME='$nme' && TYPE='$typ' && VOLUME='$vol') ";
     $sql = "UPDATE  products 
     SET NAME='$nme', TYPE='$typ', VOLUME='$vol'
     WHERE CODE_NO='$cod' ";
	 
     
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
if (isset($_POST['search'])){
	     
        $id=$_POST["code"];
		$conn = mysqli_connect("localhost","root","","cs_2001") or die("ERROR");
         
		 
        $s= "SELECT * FROM products WHERE  (CODE_NO = '$id') ";
        $res=mysqli_query($conn,$s);
        if (!($res) || mysqli_num_rows($res)==0){
	     echo "<script>alert('NO RECORD')</script>";
        }
	    else
	    {
        
	    $row = mysqli_fetch_assoc($res);
		}
	
    mysqli_close($conn);
	
}

?> 

<body >

  
    <h1 align="center"><mark>PRODUCT DETAILS</h1>
      <table  cellpadding=20px align="center" style="border-radius:15px;">
      <tr bgcolor="#1e90ff">
      <td >
	     <form action="" method="post">
         <input type="submit" value="SHOW ALL" name="show">
		  </form>
		 <form action="">
<input type="submit" value="RESET" />
</form>
		 
<?php
	error_reporting (E_ALL^E_NOTICE);
     $conn = mysqli_connect("localhost","root","","cs_2001") or die("unsucessful");
     if(isset($_POST['show'])){
        
        $s= "SELECT * FROM products ORDER BY NAME "; 
        $result=mysqli_query($conn,$s);
        echo "<table class='t2' border=2 >";
		echo "<br><b>No.of records </b>:". mysqli_num_rows($result);
        for($fld=0; $fld < mysqli_num_fields($result); $fld++){
	        $f=mysqli_fetch_field_direct($result,$fld);
	        $name=$f->name;
	        echo "<th>";
	        echo "&nbsp;&nbsp;".$name; 
	        echo "</th>"; 
        }
	    while($row = mysqli_fetch_assoc($result)){
	        echo "<tr>"; 
	        echo "<td>".$row["CODE_NO"]."</td> <td>".$row["NAME"]."</td> <td>".$row["TYPE"]."</td> <td>"
	        .$row["VOLUME"]."</td> ";
            echo "</tr>";  
	    }
	    echo "</table>";
        
	
    }
	
	mysqli_close($conn);
		 ?>
 
  
</td>
<td >
    <form action="" method="post">
    <div align="center">
	
    <h3 style="color:"d2691e";">SEARCH AND UPDATE FOR PRODUCT</h3>
    <table class="t3" border=1 >
      <tr>
      <td bgcolor="#d8bfd8"><b>CODE NO :</b></td>
      <td><input type="text" name="code" style="width:100%;padding: 10px 15px;margin: 6px 0;" required  value= "<?php echo $row["CODE_NO"] ; ?>" /></td>
      </tr>
      <tr>
      <td bgcolor="#d8bfd8"><b>NAME :</b></td>
      <td><input type="text" name="name" style="width:100%;padding: 10px 15px;margin: 6px 0;" value= "<?php echo $row["NAME"]; ?>" /></td>
      </tr>
      <tr>
      <td bgcolor="#d8bfd8"><b>TYPE :</b></td>
      <td>
      <input type="text" list="types" name="type" style="width:100%;padding: 10px 15px;margin: 6px 0;" value= "<?php echo $row["TYPE"]; ?>">
         <datalist id="types"  >
           <option value="FIZZY" >
           <option value="FRUIT" >
           <option value="FLAVOURED MILK" >

        </datalist>
      </td>
      <tr>
     <td bgcolor="#d8bfd8"><b>VOLUME :</b></td>
     <td><input type="text" name="volume" style="width:100%;padding: 10px 15px;margin: 6px 0;" value= "<?php echo $row["VOLUME"]; ?>"  /></td>
     <td border="none"><input name="v" type="radio"  value="ml" />ml
      <input name="v" type="radio" value="L" />L</td>
      </tr>
    </table>
    <br/><input type="submit"  value="SEARCH" name="search"/>  <input type="submit" name="update" value="UPDATE"  />
</form>
    <form action="">
      <input type="SUBMIT" value="CANCEL" />
    </form>
             </form>
          </td>
          </tr>
		</table>
	  </div>
  </body>
</html>

  




