<html>
<head>
<title>PRODUCTION DETAILS</title>

<link rel="stylesheet" type="text/css" href="../css/styles.css">
<style>



ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}
li.dropbtn { background-color: #00FF00; color: black; padding: 14px; font-size: 14px; border: none; cursor: default;}

li a.dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  background-color: teal;
  font-size:25;
  border: solid black;
  width:160px;
  margin-top:20px;
  
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: crimson;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  border:none;
  font-size:20;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
  background-color: #9F5577;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}
.i{
	
	width:100%;
}
</style>





</head>
<body bgcolor="#CCC999"">
<form action="" method="post" name="a">

<a id="top"><table style="width:100%;height:100%;"></a>
<tr>
<td >
<ul>
  <li class="dropbtn"><h1 style="font-family:calibri; color:#334466;"> <marquee>PRODUCTION DETAILS</marquee></h1></li>
  <li  class="dropdown"><a href="javascript:void(0)" class="dropbtn">DAILY</a>
  <div class="dropdown-content">
      <a href="daily(product).php" target="a" > PRODUCT-WISE </a>
	 <a href="daily(all).php" target="a" > ALL </a>
  
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">MONTHLY</a>
    <div class="dropdown-content">
      <a href="monthly(product).php" target="a" >PRODUCT-WISE</a>
	<a href="monthly(p).php" target="a" >ALL</a>
      
    </div>
  </li>
</ul>

    </td>


</tr>

<tr>
<td><iframe src="im.html" name="a" class="i"  height="450"   ></iframe></td>
</tr>
</table>





</div>
	

</table>


</body>
</html>