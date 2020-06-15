<?php
defined('__NOT_DIRECT') || define('__NOT_DIRECT',1);

//query nilai notifikasi  
$notif = mysql_fetch_array(mysql_query("select count(order_id) as 'order' from orders where dilihat='0'"));
$notifp = mysql_fetch_array(mysql_query("select count(order_id) as 'pembayaran' from pembayaran where dilihat='0'"));
$notifnego = mysql_fetch_array(mysql_query("select count(pid) as 'penawaran' from penawaran where dilihat='0'"));
$notifulasan = mysql_fetch_array(mysql_query("select count(id) as 'ulas' from ulasan where status='t'"));
//menu admin
if ($_SESSION['level']=='Admin') {
    ?>
    <li>
        <a href="<?php echo $c_url;?>/admin/ws-dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a> 
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-shopping-cart"></i> <span>List Order</span>
            <small class="badge pull-right bg-blue"><?php echo $notif['order']; ?></small>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo $c_url;?>/admin/ws-order/listorder"><i class="fa fa-angle-double-right"></i> Order List</a></li>
            <li><a href="<?php echo $c_url;?>/admin/ws-order/buatpo"><i class="fa fa-angle-double-right"></i> Buat PO # </a></li>
        </ul>		
    </li>
    <li>
        <a href="<?php echo $c_url;?>/admin/ws-order/pembayaran">
            <i class="fa fa-credit-card"></i> <span>Konfirmasi</span>
            <small class="badge pull-right bg-green"><?php echo $notifp['pembayaran']; ?></small>
        </a>
    </li>
    <li>
        <a href="<?php echo $c_url;?>/admin/ws-order/penawaran">
            <i class="fa fa-tags"></i> <span>Nego</span>
            <small class="badge pull-right bg-green"><?php echo $notifnego['penawaran']; ?></small>
        </a>
    </li>	
    <li>
        <a href="<?php echo $c_url;?>/admin/ws-ulasan/list">
            <i class="fa fa-comments"></i> <span>Ulasan Pelanggan</span>
            <small class="badge pull-right bg-green"><?php echo $notifulasan['ulas']; ?></small>
        </a>
    </li>		
    <li class="treeview">
        <a href="#">
            <i class="fa fa-qrcode"></i>
            <span>Produk</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>    
        <ul class="treeview-menu">
            <li><a href="<?php echo $c_url;?>/admin/ws-produk/listproduk"><i class="fa fa-angle-double-right"></i> Produk List</a></li>
            <li><a href="<?php echo $c_url;?>/admin/ws-produk/addproduk"><i class="fa fa-angle-double-right"></i> Tambah Produk</a></li>
        </ul>
    </li>                        
    <li class="treeview">
        <a href="#">
            <i class="fa fa-newspaper-o"></i>
            <span>Artikel</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo $c_url;?>/admin/ws-berita/listberita"><i class="fa fa-angle-double-right"></i> Semua Artikel</a></li>
            <li><a href="<?php echo $c_url;?>/admin/ws-berita/tulisberita"><i class="fa fa-angle-double-right"></i> Tulis Baru</a></li>
            <li><a href="<?php echo $c_url;?>/admin/ws-kategoriberita/listkategori"><i class="fa fa-angle-double-right"></i> Kategori Artikel</a></li>
			<li><a href="<?php echo $c_url;?>/admin/ws-berita/komentar"><i class="fa fa-angle-double-right"></i> Komentar</a></li>
        </ul>    
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-user"></i>
            <span>Users Admin</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>    
        <ul class="treeview-menu">
            <li><a href="<?php echo $c_url;?>/admin/ws-users/listuser"><i class="fa fa-angle-double-right"></i> Users List</a></li>
            <li><a href="<?php echo $c_url;?>/admin/ws-users/buatuser"><i class="fa fa-angle-double-right"></i> Buat User</a></li>
        </ul>
    </li>
    <li>
        <a href="<?php echo $c_url;?>/admin/ws-cust/listcust">
            <i class="fa fa-users"></i>
            <span>Customers</span>
        </a> 
    </li>
    <li>
        <a href="<?php echo $c_url;?>/admin/ws-aktivitas-pelanggan/listcust">
            <i class="fa fa-picture-o"></i>
            <span>Aktivitas Pelanggan</span>
        </a> 
    </li>
    <li>
        <a href="<?php echo $c_url;?>/admin/ws-aktivitas-kami/listcust">
            <i class="fa fa-picture-o"></i>
            <span>Aktivitas Kami</span>
        </a> 
    </li>	
<?php } elseif($_SESSION['level']=='Teknisi') { ?>
    <li>
        <a href="<?php echo $c_url;?>/admin/ws-dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a> 
    </li>
    <li>
        <a href="<?php echo $c_url;?>/admin/ws-aktivitas-pelanggan/listcust">
            <i class="fa fa-picture-o"></i>
            <span>Aktivitas Pelanggan</span>
        </a> 
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-newspaper-o"></i>
            <span>Artikel</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo $c_url;?>/admin/ws-berita/listberita"><i class="fa fa-angle-double-right"></i> Semua Artikel</a></li>
            <li><a href="<?php echo $c_url;?>/admin/ws-berita/tulisberita"><i class="fa fa-angle-double-right"></i> Tulis Baru</a></li>
            <li><a href="<?php echo $c_url;?>/admin/ws-kategoriberita/listkategori"><i class="fa fa-angle-double-right"></i> Kategori Artikel</a></li>
			<li><a href="<?php echo $c_url;?>/admin/ws-berita/komentar"><i class="fa fa-angle-double-right"></i> Komentar</a></li>
        </ul>    
    </li>		
<?php } else {?>
    <li>
        <a href="<?php echo $c_url;?>/admin/ws-dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a> 
    </li>
    <li>
        <a href="<?php echo $c_url;?>/admin/ws-order/listorder">
            <i class="fa fa-shopping-cart"></i> <span>List Order</span>
            <small class="badge pull-right bg-blue"><?php echo $notif['order']; ?></small>
        </a>
    </li>
    <li>
        <a href="<?php echo $c_url;?>/admin/ws-order/pembayaran">
            <i class="fa fa-credit-card"></i> <span>Konfirmasi</span>
            <small class="badge pull-right bg-green"><?php echo $notifp['pembayaran']; ?></small>
        </a>
    </li>
    <li>
        <a href="<?php echo $c_url;?>/admin/ws-order/penawaran">
            <i class="fa fa-tags"></i> <span>Nego</span>
            <small class="badge pull-right bg-green"><?php echo $notifnego['penawaran']; ?></small>
        </a>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-qrcode"></i>
            <span>Produk</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>    
        <ul class="treeview-menu">
            <li><a href="<?php echo $c_url;?>/admin/ws-produk/listproduk"><i class="fa fa-angle-double-right"></i> Produk List</a></li>
            <li><a href="<?php echo $c_url;?>/admin/ws-produk/addproduk"><i class="fa fa-angle-double-right"></i> Tambah Produk</a></li>
        </ul>
    </li> 
    <li class="treeview">
        <a href="#">
            <i class="fa fa-newspaper-o"></i>
            <span>Artikel</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo $c_url;?>/admin/ws-berita/listberita"><i class="fa fa-angle-double-right"></i> Semua Artikel</a></li>
            <li><a href="<?php echo $c_url;?>/admin/ws-berita/tulisberita"><i class="fa fa-angle-double-right"></i> Tulis Baru</a></li>
            <li><a href="<?php echo $c_url;?>/admin/ws-kategoriberita/listkategori"><i class="fa fa-angle-double-right"></i> Kategori Artikel</a></li>
			<li><a href="<?php echo $c_url;?>/admin/ws-berita/komentar"><i class="fa fa-angle-double-right"></i> Komentar</a></li>
        </ul>    
    </li>                       
    <li>
        <a href="<?php echo $c_url;?>/admin/ws-cust/listcust">
            <i class="fa fa-users"></i>
            <span>Customers</span>
        </a> 
    </li>	
    <li>
        <a href="<?php echo $c_url;?>/admin/ws-aktivitas-pelanggan/listcust">
            <i class="fa fa-picture-o"></i>
            <span>Aktivitas Pelanggan</span>
        </a> 
    </li>		
<?php } ?>