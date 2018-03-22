<!-- **********************************************************************************************************************************************************
MAIN SIDEBAR MENU
*********************************************************************************************************************************************************** -->
<!--sidebar start-->
<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">

            <p class="centered"><a href="./?mod=users&act=profile"><img src="assets/img/profile/<?php echo $_SESSION['username']?>.jpg" class="img-circle" width="60"></a></p>
            <h5 class="centered"><?php echo $_SESSION['name']?></h5>

            <li class="mt">
                <a href="./?mod=transaksi">
                    <i class="fa fa-dashboard"></i>
                    <span>Transaksi</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-desktop"></i>
                    <span>Inventory</span>
                </a>
                <ul class="sub">
                    <li><a  href="general.html">Master Barang</a></li>
                    <li><a  href="./?mod=kategori">Kategori</a></li>
                    <li><a  href="panels.html">Manajemen Stok</a></li>
                    <li><a href="./?mod=pelanggan">Data Pelanggan</a></li>
                     <li><a href="./?mod=digital">Data Digital Induk</a></li>

                        <li><a href="./?mod=digita_anak">Data Digital Anak</a></li>
                </ul>
            </li>

            <li class="">
                <a href="./?mod=transaksi">
                    <i class="fa fa-dashboard"></i>
                    <span>Pengguna</span>
                </a>
            </li>
                 <li class="">
                <a href="./?mod=users">
                    <i class="fa fa-dashboard"></i>
                    <span>Admin</span>
                </a>
            </li>

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
