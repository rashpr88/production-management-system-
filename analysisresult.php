<html>
  <head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
	<style>
	 body{
		 background-image:url('../images/financial-analysis-minimal-wallpaper-success-elements-internet-investment-financial-web-analysis-strategy-symbol-vector-108735432.jpg')
		
	 }
    



    </style>
    
 </head>
 


<body >

  <br />
    <h1 align="center"><mark style="background-color:crimson;">MONTHLY ANALYSIS </mark></h1>
	<a href="monthlyanalysis.php" ><font size=6 ><mark>&#8617;Back</mark></font></a>
      
    <form action="" >
    <div align="center">
	
	<?php
	
	error_reporting (E_ALL^E_NOTICE);
	
	// monthly product-wise analysing
     $conn = mysqli_connect("localhost","root","","cs_2001") or die("unsucessful");
     if(isset($_POST['search'])){
		$id=$_POST['code'];
		$date=$_POST['m'];
        
        $d=date_create("$date");
        $n= date_format($d,"n");
		$m=date_format($d,"F");
		
         
		 // checking for months 
        
		if ($n==1){
        $s= "SELECT jan.CODE_NO,NAME,TYPE,VOLUME,SUM(QUANTITY) AS TOTAL_QUANTITY,(SUM(REJECTED)/SUM(QUANTITY))*100 AS PERCENTAGE_OF_REJECTED,(SUM(RETRIEVED)/SUM(QUANTITY))*100 AS PERCENTAGE_OF_RETRIEVED, ((SUM(QUANTITY)-(SUM(REJECTED)+SUM(RETRIEVED)))/SUM(QUANTITY))*100 AS PERCENTAGE_OF_IN_STOCK FROM jan INNER JOIN products ON products.CODE_NO=jan.CODE_NO WHERE jan.CODE_NO='$id'";
		
		}
		elseif ($n==2){
        $s= "SELECT feb.CODE_NO,NAME,TYPE,VOLUME,SUM(QUANTITY) AS TOTAL_QUANTITY,(SUM(REJECTED)/SUM(QUANTITY))*100 AS PERCENTAGE_OF_REJECTED,(SUM(RETRIEVED)/SUM(QUANTITY))*100 AS PERCENTAGE_OF_RETRIEVED, ((SUM(QUANTITY)-(SUM(REJECTED)+SUM(RETRIEVED)))/SUM(QUANTITY))*100 AS PERCENTAGE_OF_IN_STOCK FROM feb INNER JOIN products ON products.CODE_NO=feb.CODE_NO WHERE feb.CODE_NO='$id'";
		
		}
		elseif ($n==3){
        $s= "SELECT mar.CODE_NO,NAME,TYPE,VOLUME,SUM(QUANTITY) AS TOTAL_QUANTITY,(SUM(REJECTED)/SUM(QUANTITY))*100 AS PERCENTAGE_OF_REJECTED,(SUM(RETRIEVED)/SUM(QUANTITY))*100 AS PERCENTAGE_OF_RETRIEVED, ((SUM(QUANTITY)-(SUM(REJECTED)+SUM(RETRIEVED)))/SUM(QUANTITY))*100 AS PERCENTAGE_OF_IN_STOCK FROM mar INNER JOIN products ON products.CODE_NO=mar.CODE_NO WHERE mar.CODE_NO='$id'";
		
		}
		elseif ($n==4){
        $s= "SELECT apr.CODE_NO,NAME,TYPE,VOLUME,SUM(QUANTITY) AS TOTAL_QUANTITY,(SUM(REJECTED)/SUM(QUANTITY))*100 AS PERCENTAGE_OF_REJECTED,(SUM(RETRIEVED)/SUM(QUANTITY))*100 AS PERCENTAGE_OF_RETRIEVED, ((SUM(QUANTITY)-(SUM(REJECTED)+SUM(RETRIEVED)))/SUM(QUANTITY))*100 AS PERCENTAGE_OF_IN_STOCK FROM apr INNER JOIN products ON products.CODE_NO=apr.CODE_NO WHERE apr.CODE_NO='$id'";
		
		}
		elseif ($n==5){
        $s= "SELECT may.CODE_NO,NAME,TYPE,VOLUME,SUM(QUANTITY) AS TOTAL_QUANTITY,(SUM(REJECTED)/SUM(QUANTITY))*100 AS PERCENTAGE_OF_REJECTED,(SUM(RETRIEVED)/SUM(QUANTITY))*100 AS PERCENTAGE_OF_RETRIEVED, ((SUM(QUANTITY)-(SUM(REJECTED)+SUM(RETRIEVED)))/SUM(QUANTITY))*100 AS PERCENTAGE_OF_IN_STOCK FROM may INNER JOIN products ON products.CODE_NO=may.CODE_NO WHERE may.CODE_NO='$id'";
		
		}
		elseif ($n==6){
        $s= "SELECT jun.CODE_NO,NAME,TYPE,VOLUME,SUM(QUANTITY) AS TOTAL_QUANTITY,(SUM(REJECTED)/SUM(QUANTITY))*100 AS PERCENTAGE_OF_REJECTED,(SUM(RETRIEVED)/SUM(QUANTITY))*100 AS PERCENTAGE_OF_RETRIEVED, ((SUM(QUANTITY)-(SUM(REJECTED)+SUM(RETRIEVED)))/SUM(QUANTITY))*100 AS PERCENTAGE_OF_IN_STOCK FROM jun INNER JOIN products ON products.CODE_NO=jun.CODE_NO WHERE jun.CODE_NO='$id'";
		
		}
		elseif ($n==7){
        $s= "SELECT jul.CODE_NO,NAME,TYPE,VOLUME,SUM(QUANTITY) AS TOTAL_QUANTITY,(SUM(REJECTED)/SUM(QUANTITY))*100 AS PERCENTAGE_OF_REJECTED,(SUM(RETRIEVED)/SUM(QUANTITY))*100 AS PERCENTAGE_OF_RETRIEVED, ((SUM(QUANTITY)-(SUM(REJECTED)+SUM(RETRIEVED)))/SUM(QUANTITY))*100 AS PERCENTAGE_OF_IN_STOCK FROM jul INNER JOIN products ON products.CODE_NO=jul.CODE_NO WHERE jul.CODE_NO='$id'";
		
		}
		elseif ($n==8){
        $s= "SELECT aug.CODE_NO,NAME,TYPE,VOLUME,SUM(QUANTITY) AS TOTAL_QUANTITY,(SUM(REJECTED)/SUM(QUANTITY))*100 AS PERCENTAGE_OF_REJECTED,(SUM(RETRIEVED)/SUM(QUANTITY))*100 AS PERCENTAGE_OF_RETRIEVED, ((SUM(QUANTITY)-(SUM(REJECTED)+SUM(RETRIEVED)))/SUM(QUANTITY))*100 AS PERCENTAGE_OF_IN_STOCK FROM aug INNER JOIN products ON products.CODE_NO=aug.CODE_NO WHERE aug.CODE_NO='$id'";
		
		}
		elseif ($n==9){
        $s= "SELECT sep.CODE_NO,NAME,TYPE,VOLUME,SUM(QUANTITY) AS TOTAL_QUANTITY,(SUM(REJECTED)/SUM(QUANTITY))*100 AS PERCENTAGE_OF_REJECTED,(SUM(RETRIEVED)/SUM(QUANTITY))*100 AS PERCENTAGE_OF_RETRIEVED, ((SUM(QUANTITY)-(SUM(REJECTED)+SUM(RETRIEVED)))/SUM(QUANTITY))*100 AS PERCENTAGE_OF_IN_STOCK FROM sep INNER JOIN products ON products.CODE_NO=sep.CODE_NO WHERE sep.CODE_NO='$id'";
		
		}
		elseif ($n==10){
        $s= "SELECT oct.CODE_NO,NAME,TYPE,VOLUME,SUM(QUANTITY) AS TOTAL_QUANTITY,(SUM(REJECTED)/SUM(QUANTITY))*100 AS PERCENTAGE_OF_REJECTED,(SUM(RETRIEVED)/SUM(QUANTITY))*100 AS PERCENTAGE_OF_RETRIEVED, ((SUM(QUANTITY)-(SUM(REJECTED)+SUM(RETRIEVED)))/SUM(QUANTITY))*100 AS PERCENTAGE_OF_IN_STOCK FROM oct INNER JOIN products ON products.CODE_NO=oct.CODE_NO WHERE oct.CODE_NO='$id'";
		
		}
		elseif ($n==11){
        $s= "SELECT nov.CODE_NO,NAME,TYPE,VOLUME,SUM(QUANTITY) AS TOTAL_QUANTITY,(SUM(REJECTED)/SUM(QUANTITY))*100 AS PERCENTAGE_OF_REJECTED,(SUM(RETRIEVED)/SUM(QUANTITY))*100 AS PERCENTAGE_OF_RETRIEVED, ((SUM(QUANTITY)-(SUM(REJECTED)+SUM(RETRIEVED)))/SUM(QUANTITY))*100 AS PERCENTAGE_OF_IN_STOCK FROM nov INNER JOIN products ON products.CODE_NO=nov.CODE_NO WHERE nov.CODE_NO='$id'";
		}
		else{
			$s= "SELECT de.CODE_NO,NAME,TYPE,VOLUME,SUM(QUANTITY) AS TOTAL_QUANTITY,(SUM(REJECTED)/SUM(QUANTITY))*100 AS PERCENTAGE_OF_REJECTED,(SUM(RETRIEVED)/SUM(QUANTITY))*100 AS PERCENTAGE_OF_RETRIEVED, ((SUM(QUANTITY)-(SUM(REJECTED)+SUM(RETRIEVED)))/SUM(QUANTITY))*100 AS PERCENTAGE_OF_IN_STOCK FROM de INNER JOIN products ON products.CODE_NO=de.CODE_NO WHERE de.CODE_NO='$id'";
		}
        $res=mysqli_query($conn,$s);
		$row = mysqli_fetch_assoc($res);
        if (!($res) || $row["CODE_NO"]=="" ){
	     echo "<script>alert('NO RECORD')</script>";
        }
	    else
	    {
		echo "<div align='left' style='font-family:arial;background-color:white;opacity:0.8;width:50%;border-radius:25px;'><br />";	
		echo "<font size=4><b>&nbsp;Displaying monthly analysis of the item code : </b></font> <font color='red'>" . $id . "</font><br /><font size=4><b> &nbsp;For the month</b> - </b></font><font color='blue'>" . $m."</font>";
        
	    
	    echo "<ul> <li>CODE NO : <mark >" .$row["CODE_NO"]." </li><br /><li> NAME : <font color='brown'>" .$row["NAME"]."</font></li><br /><li> TYPE : <font color='purple'>" .$row["TYPE"]."</font> </li><br /><li>VOLUME : <font color='carrot'>" .$row["VOLUME"]."</font> </li><br /><li>TOTAL QUANTITY : <font color='orange'>" .$row["TOTAL_QUANTITY"]."</font></li><br /><li> PERCENTAGE OF REJECTED PRODUCTS : <mark style='background-color:green'>" .$row["PERCENTAGE_OF_REJECTED"]." % </li><br /><li> PERCENTAGE OF RETRIEVED PRODUCTS : <mark style='background-color:crimson'>" .$row["PERCENTAGE_OF_RETRIEVED"]." % </li><br /><li> PERCENTAGE OF REMAINING PRODUCTS IN STOCK : <mark style='background-color:cyan'>"
	        .$row["PERCENTAGE_OF_IN_STOCK"]." %</li></ul></div>";
            
	    }
	    
        }
	
    
		
	
    mysqli_close($conn);
	


?> 

</div>
</form>
</body>
</html>