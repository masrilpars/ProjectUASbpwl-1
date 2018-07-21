<?php
if (isset  ($_GET['modul'])) {
	if ($_GET['modul']=="home" or $_GET['modul']=="") {
	?>
	<div id="container">
        <div class="tabbed">
         
            <div class="items">
              <div class="cl"></div>
              <ul>
                <li>
                  <div class="image"><img src="sepatu-lari-nike-130377.jpg" width="140" height="85" /></a> </div>
                  <p> Nama : <span> Nike Air Zoom Elite</span><br />
                    Merk  : <span>Nike</span><br />
                   Ukuran : <a href="#">39 - 42</a>2055000 </p>
                  <p class="price">Harga: Rp. <strong></strong></p>
                </li>
                <li>
                   <div class="image"><img src="css/images/nike/image2.jpg" width="140" height="85" /></a> </div>
                  <p> Nama : <span>Lebron Elite 11</span><br />
                    Merk : <span>Nike</span><br />
                    Ukuran: <a href="#">40 - 44</a> </p>
                  <p class="price">Harga: Rp. <strong>800000</strong></p>
                </li>
                <li>
                   <div class="image"><img src="css/images/nike/image3.jpg" width="140" height="85" /></a> </div>
                  <p> Nama: <span>Air Zoom Huarache</span><br />
                    Merk : <span>Nike</span><br />
                    Ukuran: <a href="#">40 - 44</a> </p>
                  <p class="price">Harga: Rp. <strong>750000</strong></p>
                </li>
                <li>
                   <div class="image"><img src="css/images/nike/image4.jpg" width="140" height="85" /></a> </div>
                  <p> Nama: <span>Air Max Flyknit Vivid Blue</span><br />
                    Merk : <span>Nike</span><br />
                    Ukuran: <a href="#">39 - 42</a> </p>
                  <p class="price">Harga: Rp. <strong>350000</strong></p>
                </li>
				<li>
                   <div class="image"><img src="css/images/converse/image1.jpg" width="140" height="85" /></a> </div>
                  <p> Nama: <span>Black Sabbath Shot1</span><br />
                    Merk : <span>Converse</span><br />
                    Ukuran: <a href="#">35 - 40</a> </p>
                  <p class="price">Harga: Rp. <strong>200000</strong></p>
                </li>
                <li>
                  <div class="image"><img src="css/images/converse/image2.jpg" width="140" height="85" /></a> </div>
                  <p> Nama: <span>Black Sabbath Shot2</span><br />
                    Merk : <span>Converse</span><br />
                    Ukuran: <a href="#">35 - 40</a> </p>
                  <p class="price">Harga: Rp. <strong>200000</strong></p>
                </li>
                <li>
                   <div class="image"><img src="css/images/converse/image3.jpg" width="140" height="85" /></a> </div>
                  <p> Nama: <span>Converse Batman</span><br />
                    Merk : <span>Converse</span><br />
                    Ukuran: <a href="#">35 - 40</a> </p>
                  <p class="price">Harga: Rp. <strong>200000</strong></p>
                </li>
                <li>
                  <div class="image"><img src="css/images/converse/image9.jpg" width="140" height="85" /></a> </div>
                  <p> Nama: <span>Chuck Taylor Volt</span><br />
                    Merk : <span>Converse</span><br />
                    Ukuran: <a href="#">35 - 40</a> </p>
                  <p class="price">Harga: Rp. <strong>150000</strong></p>
                </li>
                <li>
                   <div class="image"><img src="css/images/adidas/image4.jpg" width="140" height="85" /></a> </div>
                  <p> Nama: <span>Adidas Silas</span><br />
                    Merk : <span>Adidas</span><br />
                    Ukuran: <a href="#">35 - 40</a> </p>
                  <p class="price">Harga: Rp. <strong>2800000</strong></p>
                </li>
                <li>
                   <div class="image"><img src="css/images/adidas/image6.jpg" width="140" height="85" /></a> </div>
                  <p> Nama: <span>Easy Rider</span><br />
                    Merk : <span>Puma</span><br />
                    Ukuran: <a href="#">35 - 40</a> </p>
                  <p class="price">Harga: Rp. <strong>275000</strong></p>
                </li>
                <li>
                  <div class="image"><img src="css/images/adidas/image8.jpg" width="140" height="85" /></a> </div>
                  <p> Nama: <span>Classic Nylon</span><br />
                    Merk : <span>Reebok</span><br />
                    Ukuran: <a href="#">39 - 42</a> </p>
                  <p class="price">Harga: Rp. <strong>450000</strong></p>
                </li>
                <li>
                   <div class="image"><img src="css/images/adidas/image9.jpg" width="140" height="85" /></a> </div>
                  <p> Nama: <span>Vans Era</span><br />
                    Merk : <span>Vans</span><br />
                    Ukuran: <a href="#">40 - 44</a> </p>
                  <p class="price">Harga: Rp. <strong>150000</strong></p>
                </li>
              </ul>
          </div>
		  </div>
	<?php
	
	}else if ($_GET['modul']=="barang") {
		include "aksi/barang.php";
		
	}else if ($_GET['modul']=="pelanggan") {
		include "aksi/pelanggan.php";	
		
	}else if ($_GET['modul']=="pemesanan") {
		include "aksi/pemesanan.php";

	}else if ($_GET['modul']=="login") {
		include "aksi/login.php";
		
	}else if ($_GET['modul']=="logout") {
		include "aksi/logout.php";
		
	}else if ($_GET['modul']=="databarang") {
		include "aksi/databarang.php";	
		
	}else if ($_GET['modul']=="shop") {
		include "aksi/shop.php";	
		
	}else if ($_GET['modul']=="cari") {
		include "aksi/cari.php";
		
			
	}else if ($_GET['modul']=="laporanbarang") {
		include "laporan/lbarang.php";
		
	}else if ($_GET['modul']=="laporanpemesan") {
		include "laporan/lpemesan.php";
		
	}else if ($_GET['modul']=="datapemesan") {
		include "aksi/datapemesan.php";
		
	}else if ($_GET['modul']=="order") {
		include "aksi/order.php";
		
	}else if ($_GET['modul']=="search") {
		include "aksi/search.php";
		
	}else if ($_GET['modul']=="cart") {
		include "aksi/cart2.php";
	
		
		}	
		
	}
	?>