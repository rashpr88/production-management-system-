<html>


<head>  
<title>splash</title>
<link rel="stylesheet" type="text/css" href="../css/styles.css">
<style type="text/css">


.container{
    background-image:url('../images/search-search-engine-turn-on-turn-off.jpg');
	background-size: 1400px 800px;
		  }
.button{
			  font-size:41px;
    background-color:cyan;
    border: solid;
    color: black;
    padding: 16px 32px;border-radius:35px;opacity:0.7; font-family:didot;box-shadow:0 9px #905;
	cursor:pointer;
		  }
.button:hover {
	 background-color: navy;
	 color:white;
	 box-shadow:0 9px #385;
    }
</style>
</head>


<body>  

<!--outline-->

<div class=container>

<!--top-->

<div class=top>
<img src="../images/header.png" width="100%" height="20%">
</div> 


<!--navigation-->

<div id="left">
<div id="nav">
<br /><br /><br /><br />
<br /><br /><br />

<ul >
<li><a href="../../home/HomeAdmin.html" id="nav">HOME</a></li>
<li><a href="../../enter_delete/main/" id="nav">ENTER AND DELETE</a></li>
<li><a href="../../access/help.html" id="nav">HELP</a></li>
 <li><a href="../../index.html" onclick="return logout()"><p>Log Out</p></a></li> 
  <script>
  function logout(){
    var logout=confirm("Are you sure you want to log out?");
      if(logout){
         return true;
        }
      else{
         return false;
        }
    }
  </script>
</ul>

</div>
</div>


<!--content-->
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<div id="content">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="menu.php" target="_top"><button class="button"   >VIEW AND UPDATE</button></a>
<br /><br /><br />




</div>
</div>
<!--footer-->

<div id="footer">

</div> 
</body>   
</html>