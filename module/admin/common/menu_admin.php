    <li>
        <a href="<?php echo $c_url;?>/ws_admin/ws-dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a> 
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-shopping-cart"></i> <span>List Order</span>
            <small class="badge pull-right bg-blue"><?php echo $notif_orderan; ?></small>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo $c_url;?>/ws_admin/ws-order/listorder"><i class="fa fa-angle-double-right"></i> Order List</a></li>
            <li><a href="<?php echo $c_url;?>/ws_admin/ws-order/buatpo"><i class="fa fa-angle-double-right"></i> Buat PO # </a></li>
        </ul>		
    </li>
    <li>
        <a href="<?php echo $c_url;?>/ws_admin/ws-order/pembayaran">
            <i class="fa fa-credit-card"></i> <span>Konfirmasi</span>
            <small class="badge pull-right bg-green"><?php echo $notif_pembayaran; ?></small>
        </a>
    </li>
    <li>
        <a href="<?php echo $c_url;?>/ws_admin/ws-order/penawaran">
            <i class="fa fa-tags"></i> <span>Nego</span>
            <small class="badge pull-right bg-green"><?php echo $notif_penawaran; ?></small>
        </a>
    </li>	
    <li>
        <a href="<?php echo $c_url;?>/ws_admin/ws-ulasan/list">
            <i class="fa fa-comments"></i> <span>Ulasan Pelanggan</span>
            <small class="badge pull-right bg-green"><?php echo $notif_ulasan; ?></small>
        </a>
    </li>		
    <li class="treeview">
        <a href="#">
            <i class="fa fa-qrcode"></i>
            <span>Produk</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>    
        <ul class="treeview-menu">
            <li><a href="<?php echo $c_url;?>/ws_admin/ws-produk/listproduk"><i class="fa fa-angle-double-right"></i> Produk List</a></li>
            <li><a href="<?php echo $c_url;?>/ws_admin/ws-produk/addproduk"><i class="fa fa-angle-double-right"></i> Tambah Produk</a></li>
        </ul>
    </li>                        
    <li class="treeview">
        <a href="#">
            <i class="fa fa-newspaper-o"></i>
            <span>Artikel</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo $c_url;?>/ws_admin/ws-berita/listberita"><i class="fa fa-angle-double-right"></i> Semua Artikel</a></li>
            <li><a href="<?php echo $c_url;?>/ws_admin/ws-berita/tulisberita"><i class="fa fa-angle-double-right"></i> Tulis Baru</a></li>
            <li><a href="<?php echo $c_url;?>/ws_admin/ws-kategoriberita/listkategori"><i class="fa fa-angle-double-right"></i> Kategori Artikel</a></li>
			<li><a href="<?php echo $c_url;?>/ws_admin/ws-berita/komentar"><i class="fa fa-angle-double-right"></i> Komentar</a></li>
        </ul>    
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-user"></i>
            <span>Users Admin</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>    
        <ul class="treeview-menu">
            <li><a href="<?php echo $c_url;?>/ws_admin/ws-users/listuser"><i class="fa fa-angle-double-right"></i> Users List</a></li>
            <li><a href="<?php echo $c_url;?>/ws_admin/ws-users/buatuser"><i class="fa fa-angle-double-right"></i> Buat User</a></li>
        </ul>
    </li>
    <li>
        <a href="<?php echo $c_url;?>/ws_admin/ws-cust/listcust">
            <i class="fa fa-users"></i>
            <span>Customers</span>
        </a> 
    </li>
    <li>
        <a href="<?php echo $c_url;?>/ws_admin/ws-aktivitas-pelanggan/listcust">
            <i class="fa fa-picture-o"></i>
            <span>Aktivitas Pelanggan</span>
        </a> 
    </li>
    <li>
        <a href="<?php echo $c_url;?>/ws_admin/ws-aktivitas-kami/listcust">
            <i class="fa fa-picture-o"></i>
            <span>Aktivitas Kami</span>
        </a> 
    </li>	