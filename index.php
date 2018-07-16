<?php 
include "koneksi.php";
	header("cache-control:no cache,must-revalited");
	header("expires: sat, 26 jul 1997 05:00:00 GTM");
session_start();
if (!isset ($_SESSION['nama']) &&(isset($_SESSION['password']))){
	
	$status="";
	} else {
		
		$status=@$_SESSION['status'];
	}
session_destroy();
?>

<html>
<head>
<title>Sebelas (11)</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery-1.4.1.min.js" type="text/javascript"></script>
<script src="js/jquery.jcarousel.pack.js" type="text/javascript"></script>
<script src="js/jquery.slide.js" type="text/javascript"></script>
<script src="js/jquery-func.js" type="text/javascript"></script>
</head>
<body>

<div id="top">
  <div class="shell">
    <div id="header">
      <h1 id="logo"><a href="#">NOVIRA IRWANITA</a></h1>
      <?php if ($status=="") { ?>   
  <div id="navigation">
  <ul>
        <li><a href="?modul=home">HOME</a></li>
        
        <li><a href="?modul=databarang">BARANG</a></li>
		
		<li><a href="?modul=search">CARI</a></li>
		
		<li class="last"><a href="?modul=login">LOGIN</a></li>
		          
     </ul>
	 
<?php } else if ($status=="Admin") { ?>	
   <div id="navigation">   
   <ul>
	<li><a href="?modul=home">HOME</a></li>
	
    <li><a href="?modul=barang">DATA BARANG</a></li>

	<li><a href="?modul=pelanggan">DATA PELANGGAN</a></li></li>
	
	<li><a href="?modul=datapemesan">DATA PEMESANAN</a></li></li>	

	<li class="last"><a href="?modul=logout">LOGOUT</a>
          </li>
        
        </ul>
		
<?php } else if ($status=="Pelanggan") { ?>
	<div id="navigation">
	<ul>
	<li><a href="?modul=home">HOME</a></li>
	
    <li><a href="?modul=databarang">BARANG</a></li>
	
	<li><a href="?modul=search">CARI</a></li>

	<li class="last"><a href="?modul=logout">LOGOUT</a>
	</li>
	</ul>
	
<?php } else if ($status=="Atasan") { ?>
	<div id="navigation">
	<ul>
	<li><a href="?modul=home">HOME</a></li>
	 
	<li><a href="?modul=laporanbarang"> <span>LAPORAN BARANG</span></a></li>
	
	<li> <a href="?modul=laporanpemesan"><span>LAPORAN PEMESANAN</span></a></li>
 	  
	<li class="last"><a href="?modul=logout"><span>LOGOUT</span></a></li>
	</ul>
	<?php }
		?>
    </div>
	</div>
	
    <div id="slider">
      <div id="slider-holder">
        <ul>
          <li><a href="#"><img src="css/images/slide1.jpg" ></a></li>
          <li><a href="#"><img src="css/images/slide2.jpg" ></a></li>
          <li><a href="#"><img src="css/images/slide3.jpg" ></a></li>
          <li><a href="#"><img src="css/images/slide4.jpg" width="980" height="500"></a></li>
		  <li><a href="#"><img src="css/images/slide7.jpg" ></a></li>
        </ul>
      </div>
      <div id="slider-nav"> <a href="#" class="prev">Previous</a> <a href="#" class="next">Next</a> </div>
    </div>
  </div>
</div>

<div id="main">
  <div class="shell">
    <div class="options">
      <div class="search">
          <span class="field">
          <marquee><h1>THANK FOR VISIT &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DON'T FORGET TO VISITING TOMMOROW AGAIN</h1></marquee>
          </span>
      </div>
<?php
$sql="select *from pemesanan order by Kode_Pemesan asc";
$keranjangx = mysql_query("$sql");
$pesan = 0;
while($psn = mysql_fetch_array($keranjangx)){
    $pesan = $pesan + $psn['Banyak_Pesanan'];
}
            ?>
      <div class="right"> <span class="cart"> <a href="?modul=shop" class="cart-ico">&nbsp;</a> <strong><b><?php include "aksi/cart2.php"; ?></strong> </span> </div>
    
	</div>
    
	
    <div id="content">
      <div class="tabs">
        <ul>
          <li><a href="#" class="red"><span>NIKE</span></a></li>
          <li><a href="?modul=nike"><span>ADIDAS</span></a></li>
		  <li><a href="#" class="red"><span>NEW BALANCE</span></a></li>
        </ul>
      </div>
      
      <div id="container">
        <?php include"content.php";?>
		
		  </div>
		  
       
        <div class="brands">
          <h3>Brands</h3>
          <div class="logos"> <a href="#"><img src="css/images/logo1.gif" alt="" /></a> <a href="#"><img src="css/images/logo2.gif" alt="" /></a> <a href="#"><img src="css/images/logo3.gif" alt="" /></a> <a href="#"><img src="css/images/logo4.gif" alt="" /></a> <a href="#"><img src="css/images/logo5.gif" alt="" /></a> </div>
        </div>
        
        <div id="footer">
          <div class="right"> <font size="2">&copy; 2015 Design by NOVIRA IRWANITA</font></div>
        </div>
</body>       
</html>
