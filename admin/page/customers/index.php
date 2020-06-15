<?php
defined('__NOT_DIRECT') || define('__NOT_DIRECT',1);



switch ($_GET['act']) {
	case 'listcust':
		?>
		<div class="row">
            <section class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <i class="fa fa-users"></i>
                        <h3 class="box-title">Daftar Customers</h3>                
                    </div>
                    <div class="box-body table-responsive">
                       <table class="table table-bordered">
                            <tr>
                                <th  style="width: 10px; text-align:center">No</th>                                
                                <th style="text-align:center">Nama Lengkap</th>
                                <th style="text-align:center">Email</th>
                                <th style="text-align:center">Status</th>
                                <th style="text-align:center">Tgl. Daftar</th>
                                <th style="text-align:center">Action</th>
                            </tr>
                            
                            <?php
                            $query_user = mysql_query("select * from cust_users");
                            $no = 1;
                            while ($user = mysql_fetch_array($query_user)) {
                            	if ($user['status']=="Y") {
                            		$status = "<i class='fa fa-check' style='color:#84ad05;'></i>";
                            	} else {
                            		$status = "<i class='fa fa-times' style='color:#e30b13;'></i>";
                            	}
                                echo "<tr>
                                    <td align='center'>$no</td>
                                    <td>".$user['cust_fn']."</td>
                                    <td>".$user['cust_mail']."</td>
                                    <td align='center'>$status</td>
                                    <td align='center'>".date('d M y', strtotime($user['tgl_daftar']))."</td>                                    
                                    <td align='center'>
                                        <a href='".$c_url."/admin/ws-cust/editcust?id=$user[cust_id]'>Edit</a> | 
                                        <a href='../page/customers/proses.php?page=cust&act=delete&id=$user[cust_id]' onclick='return confirm(\"Apakah anda yakin akan menghapusnya?\");'>Hapus</a>
                                    </td></tr>";
                                $no++;
                            }
                            ?>                        
                            </tr>                           
                        </table>
                    </div><!-- /.box-body -->            
            </section>
        </div>
		<?php
		break;
	case 'editcust':
        $id = $_GET['id'];
        $q = mysql_query("select * from cust_users where cust_id='$id'");
        $d = mysql_fetch_array($q);

        $id2 = $_GET['id'];
        $q1 = mysql_query("select * from profile where username='$id2'");
        $d1 = mysql_fetch_array($q1);		
        ?>
        <div class="row">
            <section class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <i class="fa fa-user"></i>
                        <h3 class="box-title">Edit Profile</h3> 
                        <!-- tools box -->
                        <div class="pull-right box-tools">
                            <a class="btn btn-default btn-sm" onclick="history.back();" ><i class="fa fa-arrow-circle-o-left"></i> Kembali</a>
                        </div><!-- /. tools -->                      
                    </div>
                    <div class="box-body">
                        <form method="post" action="../page/customers/proses.php?page=cust&act=update" class="form-horizontal" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Nama Lengkap</label>
                                <div class="col-md-4">                                    
                                    <input type="text" name="fullname" class="form-control" value="<?php echo $d1['nama']; ?>" required>                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Email</label>
                                <div class="col-md-4">
                                    <input type="email" name="email" class="form-control" value="<?php echo $d1['email']; ?>">
									
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">No. Telp</label>
                                <div class="col-md-4">
                                    <input type="text" name="telp" class="form-control" value="<?php echo $d1['nohp']; ?>">
                                </div>
                            </div>                          
                            <div class="form-group">
                                <label class="col-md-4 control-label">Foto Profile*</label>
                                <div class="col-md-4">
                                    <input type="hidden" name="avatar" value="<?php echo $d1['foto'];?>">
                                    <div class="thumbnail">
									<?php if(!isset($d1['foto'])){ ?>
                                        <img id="img_prev" src="<?php echo $c_cdn;?>/uploads/users/2505171049footer-logo.png" style="width:100%;height:auto;"/>
									<?php } else { ?>
										<img id="img_prev" src="<?php echo $c_cdn;?>/<?php echo $d1['foto'];?>" style="width:100%;height:auto;"/>
									<?php } ?>	
                                    </div>
                                </div>
                            </div>
                            <?php
                            if ($_SESSION['level']=="Admin") {
                            ?> 
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Status</label>
                                    <div class="col-md-4">
										<label class="radio-inline">
											<input type="radio" name="status" value="Y" <?php echo $d['status']=="Y" ? 'checked' : '' ;?>> Aktif
										</label>
										<label class="radio-inline">
											<input type="radio" name="status" value="N" <?php echo $d['status']=="N" ? 'checked' : '' ;?>> Blokir
										</label>
                                    </div>
                                </div>   
                            <?php } ?>
                            <div class="form-group">   
                                <div class="col-md-offset-4 col-md-4">
                                    <input type="hidden" name="id" value="<?php echo $d['cust_id'];?>"/>
									<input type="submit" class="btn btn-primary" value="Update">
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- /.box-body -->            
            </section>
        </div>

        <!-- ganti password-->
        <div class="row">
            <section class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <i class="fa fa-lock"></i>
                        <h3 class="box-title">Ganti Password</h3>                          
                    </div>
                    <div class="box-body">
                        <form name="gantipass" method="post" action="../page/customers/proses.php?page=cust&act=updatepass" onsubmit="return cek_pass()" class="form-horizontal" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Password Sekarang</label>
                                <div class="col-md-4">
                                    <input type="password" name="current_pass" class="form-control" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Password Baru</label>
                                <div class="col-md-4">
                                    <input type="password" name="pass" class="form-control" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Ulangi Password</label>
                                <div class="col-md-4">
                                    <input type="password" name="password" class="form-control" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" required>
                                </div>
                            </div>
                            <div class="form-group">   
                                <div class="col-md-offset-4 col-md-4">
                                    <input type="hidden" name="id" value="<?php echo $d['cust_id'];?>"/>
									<input type="submit" class="btn btn-primary" value="Ganti Password">
                                </div>
                            </div>
                        </form>
                    </div><!-- /.box-body -->   
				</div>
            </section>
        </div>
        <script type="text/javascript">            
            function cek_pass(){
                if (gantipass.password.value!=gantipass.pass.value){
                    alert("Password tidak sama, silahkan ulangi");
                    gantipass.pass.value="";
                    gantipass.password.value="";
                    gantipass.pass.focus()
                    return false
                }
                return true
            }
        </script>		
        <?php
        break;
	default:
		# code...
		break;
}
		