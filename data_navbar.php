       <div class="wrapper row-offcanvas row-offcanvas-left">
              <aside class="left-side sidebar-offcanvas">
                     <section class="sidebar">
                            <div class="user-panel">
                                   <div class="pull-left image">
                            <img src="img/<?php echo $_SESSION['foto'];?>" class="img-circle" alt="User Image" />
                     </div>
                            <div class="pull-left info">
                                   <p>Hello, <?php echo $_SESSION['username'];?></p>
                                          <a href="#"><i class="fa fa-circle text-success"></i>Online</a>
                                          </div>
                                   </div>
                            <ul class="sidebar-menu">
                     <li class="active">
              <a href="index.php">
                    <i class="fa fa-dashboard"></i> <span>Halaman Utama</span>
                            </a>
			  <a href="dokumentasi_kelas/index.php">
                    <i class="fa fa-dashboard"></i> <span>Dokumentasi Kelas</span>
                            </a>
                     </li>       
              </ul>
       </section>
</aside>
       <aside class="right-side">
              <section class="content-header">
                     <h1> Halaman Utama
                            <small>Data Peserta Kelas Belajar Pemrograman Web Dasar</small>
                     </h1>
                            <ol class="breadcrumb">
                                   <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                     <li class="active">Dashboard</li>
              </ol>
       </section>
<section class="content">