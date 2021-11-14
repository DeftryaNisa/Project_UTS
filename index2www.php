<?php 
include('pages/cek-login.php');
?>

<html>
<head>
<title>Tugas UTS PEMOGRAMAN INTERNET</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="fl_left">
      <ul class="nospace inline pushright">
        <li><i class="fa fa-phone"></i></li>
        <li><i class="fa fa-envelope-o"></i> deftryanis22@gmail.com</li>
      </ul>
    </div>
    
    
    <div class="fl_right">
      <ul class="nospace inline pushright">
        <li><i class="fa fa-sign-out"></i> <a href="pages/logout.php">Logout</a></li>
        
		<!-- menampilkan nama admin-->  
        <li><i class="fa fa-user"></i>
          <?php 

			echo "Selamat Datang <strong>".$_SESSION['username']."</strong>";
			?>
		</li>
        
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="index.html">CRUD</a></h1>
    </div>
    <div id="search" class="fl_right">
      <form class="clear" method="post" action="#">
        <fieldset>
          <legend>Search:</legend>
          <input type="search" value="" placeholder="Search Here&hellip;">
          <button class="fa fa-search" type="submit" title="Search"><em>Search</em></button>
        </fieldset>
      </form>
    </div>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <nav id="mainav" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul class="clear">
      <li class="active"><a href="index2.php">Home</a></li>
      <li><a class="drop" href="#">Pages</a>
        <ul>
          <li><a href="pages/gallery.html">Gallery</a></li>
          
        </ul>
      </li>
      <li><a class="drop" href="#">DATA</a>
        <ul>
          <li><a href="pages/Data.php">Lihat Data</a></li>
          <li><a href="pages/Data3.php">Lihat Data Mahasiswa</a></li>
          <li><a href="pages/Tambah data.php">Tambah Data</a></li>
            <li><a href="pages/Tambah_data_mhs.php">Tambah Data Mahaiswa</a></li>
        </ul>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </nav>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded" style="background-image:url('images/demo/backgrounds/001.png');">
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article>
      <div class="overlay inspace-30 btmspace-30">
        <h2 class="heading">Belajar PHP</h2>
        <p>Cread Read Update & Delete.</p>
      </div>
      <footer>
        <ul class="nospace inline pushright">
          <li><a class="btn" href="pages/Data.php">Lihat Data</a></li>
          <li><a class="btn inverse" href="pages/Tambah data.php">Tambah Data</a></li>
        </ul>
      </footer>
    </article>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="center btmspace-50">
      <h2 class="heading">Engga Ari Setiawan</h2>
          </article>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/002.png');">
  <div class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <article class="center">
      <h2 class="font-x3 uppercase">Belajar Memasukan Script PHP Dalam HTML</h2>
      <p class="btmspace-50">Cread Read Update & Delete</p>
      <footer>
        <ul class="nospace inline pushright">
          <li><a class="btn inverse" href="#">Home</a></li>
          <li><a class="btn" href="#">Home</a></li>
        </ul>
      </footer>
    </article>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4 bgded overlay" style="background-image:url('images/demo/backgrounds/003.png');">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="cta" class="group">
      <div class="one_third first"><i class="fa fa-map-marker"></i>
        <p>Find us</p>
        <p><a href="#">Google Maps</a></p>
      </div>
      <div class="one_third"><i class="fa fa-phone"></i>
        <p>Call us</p>
        <p>+00 (XXX) XXX XXXX</p>
      </div>
      <div class="one_third"><i class="fa fa-envelope-o"></i>
        <p>Email us</p>
        <p>deftryanis22@gmail.com</p>
      </div>
    </div>
    <!-- ################################################################################################ -->
    <div class="group">
      
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="social" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_half first">
      <h6 class="title">Social Media</h6>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
        <li><a class="faicon-youtube" href="#"><i class="fa fa-youtube"></i></a></li>
        <li><a class="faicon-rss" href="#"><i class="fa fa-rss"></i></a></li>
      </ul>
    </div>
    <div class="one_half">
      <h6 class="title">Newsletter subscription</h6>
      <form class="clear" method="post" action="#">
        <fieldset>
          <legend>Newsletter:</legend>
          <input type="text" value="" placeholder="Type Email Here&hellip;">
          <button class="fa fa-share" type="submit" title="Submit"><em>Submit</em></button>
        </fieldset>
      </form>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row6">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2021 - Deftrya Nisa - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
</body>
</html>