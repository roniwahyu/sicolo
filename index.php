<?php
	session_start(); 
	error_reporting(0);    
	include "include/set.connect.php"; 
	include "include/func.general.php";
	include "include/func.view.php";
	include "include/set.admin.php";
	  
?>  
<!DOCTYPE html> 
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
	<!--<![endif]--><head>
		<title></title> 
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="robots" content="noindex,nofollow,nocache">
		<meta content="<?=BASE_META_DESK;?>" name="description" />
		<meta content="<?=BASE_META_AUTHOR;?>" name="author" /> 
        <meta http-equiv="refresh" content="300">
		<link rel="stylesheet" href="<?=BASE_URL;?>assets/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?=BASE_URL;?>assets/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?=BASE_URL;?>assets/fonts/style.css">
		<link rel="stylesheet" href="<?=BASE_URL;?>assets/css/main.css">
		<link rel="stylesheet" href="<?=BASE_URL;?>assets/css/main-responsive.css">
		<link rel="stylesheet" href="<?=BASE_URL;?>assets/css/iCheck/all.css"> 
		<link rel="stylesheet" href="<?=BASE_URL;?>assets/css/perfect-scrollbar.css">
		<link rel="stylesheet" href="<?=BASE_URL;?>assets/css/<?=$_SESSION["styleLog"];?>.css" type="text/css" id="skin_color">
        <link rel="stylesheet" href="<?=BASE_URL;?>assets/css/bootstrap-wysihtml5.css"></link>
		<link rel="stylesheet" href="<?=BASE_URL;?>assets/css/print.css" type="text/css" media="print"/> 
        <!--[if IE 7]>
		<link rel="stylesheet" href="<?=BASE_URL;?>assets/css/font-awesome-ie7.min.css">
		<![endif]-->  
		<link rel="stylesheet" type="text/css" href="<?=BASE_URL;?>assets/css/select2.css" />
		<link rel="stylesheet" href="<?=BASE_URL;?>assets/css/DT_bootstrap.css" /> 
		<link rel="stylesheet" href="<?=BASE_URL;?>assets/css/datepicker.css">
		<link rel="stylesheet" href="<?=BASE_URL;?>assets/css/bootstrap-timepicker.min.css"> 
		<link rel="stylesheet" href="<?=BASE_URL;?>assets/css/daterangepicker-bs3.css"> 
		<link rel="stylesheet" href="<?=BASE_URL;?>assets/css/bootstrap-switch.css"> 
		<link rel="shortcut icon" href="<?=BASE_URL;?>assets/images/favicon.ico" />
	</head> 
     
	<noscript><meta http-equiv="refresh" content="0" URL="<?=BASE_URL;?>nojs"></noscript>
	<body> 
		<div class="navbar navbar-inverse navbar-fixed-top"> 
			<div class="container">
				<div class="navbar-header"> 
					<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button"><span class="clip-list-2"></span></button> 
					<a class="navbar-brand" href="<?php echo BASE_URL;?>"> <?php echo BASE_NAME;?> </a> 
				</div>
				<div class="navbar-tools"> 
					<ul class="nav navbar-right">  
						<li class="dropdown">
							<a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
								<i class="clip-notification-2"></i><span class="badge"> Status</span>
							</a>
							<ul class="dropdown-menu notifications">
								<li><span class="dropdown-menu-title"> Status Umum Sistem Akademik</span></li>
								<li>
									<div class="drop-down-wrapper">
										<ul>
											<li>
												<a href="#">
													<span class="label label-danger"><i class="fa fa-cogs"></i></span>
													<span class="message"> Tahun Akademik</span><span class="time"> <?=$status_sistem[1];?></span>
												</a>
											</li> 
											<li>
												<a href="#">
													<span class="label label-danger"><i class="fa fa-cogs"></i></span>
													<span class="message"> Semester Akademik</span><span class="time"> <?=$status_sistem[4];?></span>
												</a>
											</li> 
											<li>
												<a href="#">
													<span class="label label-danger"><i class="fa fa-cogs"></i></span>
													<span class="message"> Aktifitas Akademik</span><span class="time"> <?=$status_sistem[3];?></span>
												</a>
											</li> 
											<li>
												<a href="#">
													<span class="label label-danger"><i class="fa fa-cogs"></i></span>
													<span class="message"> Tanggal Mulai</span><span class="time"> <?=tanggal($status_sistem[5]);?></span>
												</a>
											</li> 
											<li>
												<a href="#">
													<span class="label label-danger"><i class="fa fa-cogs"></i></span>
													<span class="message"> Tanggal Selesai</span><span class="time"> <?=tanggal($status_sistem[6]);?></span>
												</a>
											</li> 
										</ul>
									</div>
								</li> 
								<li class="view-all"><a href="#">* Aktifitas default sistem akademik</a></li>
							</ul>
						</li>  
						<li class="dropdown">
							<a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
								<i class="clip-list-5"></i><span class="badge"> Style</span>
							</a>
							<ul class="dropdown-menu todo">
								<li>
									<span class="dropdown-menu-title"> Application Themes</span>
								</li>
								<li>
									<div class="drop-down-wrapper">
										<ul>
											<li>
                                            <div class="images icons-color" align="center" style="margin:10px 0px; cursor:pointer;">
                                                <span id="light"><img class="active" alt="" src="<?=BASE_URL;?>assets/images/lightgrey.png"></span>
                                                <span id="dark"><img alt="" src="<?=BASE_URL;?>assets/images/darkgrey.png" class=""></span>
                                                <span id="black_and_white"><img alt="" src="<?=BASE_URL;?>assets/images/blackandwhite.png" class=""></span>
                                                <span id="navy"><img alt="" src="<?=BASE_URL;?>assets/images/navy.png" class=""></span>
                                                <span id="green"><img alt="" src="<?=BASE_URL;?>assets/images/green.png" class=""></span>
                                            </div> 
											</li> 
										</ul>
									</div>
								</li>
								<li class="view-all">
									<a href="#">
										Ganti Thema Aplikasi <i class="fa fa-check"></i>
									</a>
								</li>
							</ul>
						</li> 
                        <li class="dropdown">
							<a class="dropdown-toggle" data-close-others="true" data-hover="dropdown" data-toggle="dropdown" href="#">
								<i class="clip-bubble-3"></i>
								<span class="badge"> Info</span>
							</a>
							<ul class="dropdown-menu posts">
								<li>
									<span class="dropdown-menu-title"> Info Pengumuman</span>
								</li>
								<li>
									<div class="drop-down-wrapper">
										<ul>
                                        	<? foreach($info_sistem as $key => $val){?>
											<li style="border-bottom:1px #000 solid;">
												<a href="#" id="<?=$val["id_siakad_info"];?>" class="det_info">
													<div class="clearfix"> 
														<div class="thread-content">
															<span class="author"><strong><?=$val["nm_info"];?></strong></span>
															<span class="preview"><?=readMore($val["ket_info"],50);?>.</span> 
														</div>
													</div>
												</a>
											</li>
                                            <? } ?>
										</ul>
									</div>
								</li> 
								<li class="view-all">
									<a href="#">
										Informasi dan Pengumuman <i class="fa fa-check"></i>
									</a>
								</li>
							</ul>
						</li>
						<li class="dropdown current-user">
							<a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
								<img src="<?=BASE_URL;?>assets/images/avatar.jpg" class="circle-img" alt="">
								<span><?=$_SESSION['tipeLog'];?></span><i class="clip-chevron-down"></i>
							</a>
							<ul class="dropdown-menu">
								<li><a href="<?=BASE_URL;?>profile"><i class="clip-user-2"></i>&nbsp;My Profile</a></li>   
								<li><a href="<?=BASE_URL;?>logout"><i class="clip-exit"></i>&nbsp;Log Out</a>
								</li>
							</ul>
						</li> 
					</ul> 
				</div>
			</div>
		</div> 
		<div class="main-container">
			<div class="navbar-content"> 
				<div class="main-navigation navbar-collapse collapse"> 
					<div class="navigation-toggler"><i class="clip-chevron-left"></i><i class="clip-chevron-right"></i></div> 
					<ul class="main-navigation-menu"> 
                    	<? foreach($links[$_SESSION['tipeLog']] as $key => $val){ ?>
                        <li class="<?=($val[4] == $pages)?"active":"";?>">
                        	<? if(is_array($val[3])){?>
                            <a href="<?=$val[0];?>">
                            	<i class="<?=$val[1];?>"></i><span class="title"> <?=$val[2];?> </span>
                            	<i class="icon-arrow"></i><span class="selected"></span>
                          	</a>
                            <ul class="sub-menu">
								<? foreach($val[3] as $subkey => $subval){ ?> 
                                    <li class="<?=($subval[3] == $inis)?"active":"";?>">
                                    	<a href="<?=$subval[0];?>"><i class="<?=$subval[1];?>"></i><span class="title"> <?=$subval[2];?></span> </a>
                                 	</li>
                                <? } ?>
                           	</ul>
                            <? } else { ?>
							<a href="<?=$val[0];?>"><i class="<?=$val[1];?>"></i><span class="title"> <?=$val[2];?> </span><span class="selected"></span></a>  
                            <? } ?>
                      	</li>
						<? } ?>  
					</ul> 
				</div> 
			</div> 
			<div class="main-content">  
				<div class="container"> 
					<div class="row">
						<div class="col-sm-12">  
							<ol class="breadcrumb">
								<li><a href="#">Portal Akademik</a></li>
								<li class="active"><?=title_menu($master_link_menu,$pages);?></li>
                                <? if(!empty($inis)){ ?><li class="active"><?=title_submenu($master_link_menu,$pages,$inis);?></li><? } ?>
								<li class="search-box"></li>
							</ol> 
						</div>
					</div> 
					<div class="row">
						<div class="col-sm-12" style="margin-top:10px;">   
						<? 
                            if(empty($pages)){ echo '<div align="center"><img src="'.BASE_URL.'assets/images/view.jpg"></div>';  } 
                            else{ 
								$inisCase = $pages."_".$inis;
								switch($pages){
									case "setting" : forms($pages,"edit","","0");  break;  
									case "validasimhs" : page_validasi_administrasi(); break;  
									case "heregistrasi" : page_heregistrasi_administrasi();  break;  
									case "lapneraca" : page_mhs_neraca();  break; 
									case "bantuan" : page_bantuan();  break; 
									case "laptranskrip" : page_mhs_transkrip();    break;  
									case "lapjadwal" :  page_mhs_jadwal();  break;  
									case "lapkhs" : page_mhs_khs();   break;  
									case "entrikrs" : page_mhs_krs(); break;   
									case "profile" : 
											$prof_link = strtolower(str_replace(" ","_",$_SESSION['tipeLog']));
											forms("profile_".$prof_link,"edit","",$_SESSION["idLog"]); 
									break;  
									case "profil" : case "settings" : case "pengguna" : case "info" : 
									case "transaksi" : case "maskeu" :   case "neraca" :  
									case "prodi" : case "matakuliah" : case "kuliah" :  case "cmahasiswa" :    case "amahasiswa" :    
									case "kemahasiswaan" :  case "perwalian" :   case "validasi" :   
									case "bimbingan" :    
										switch($inis){
											case "pt" : forms($inisCase,"edit","","073080"); break; 
											case "profil" : forms($inisCase,"edit","",$_SESSION["idtipeLog"]);  break;    
											case "nilaicopy" : case "predikatcopy" : forms($inisCase,"copy","","");  break;  
											case "mhsfoto" : case "mhsstatus" : case "mhswali" : forms($inisCase,"edit","",$id_data); break; 
											case "jadwaluts" : case "jadwaluas" : forms($inisCase,$field_id,"",$id_data);  break;  
											case "jadwalpresensi" : page_prodi_presensi($field_id); break;  
											case "jadwalnilai" : page_prodi_nilai($field_id,"kuliah_nilai"); break;  
											case "dosennilai" : page_prodi_nilai($field_id,"dosen_nilai"); break;  
											case "studi" : page_entri_krs($field_id); break;  
											case "ps" : case "sp" : case "pp" : case "kelas" : case "struktur" : case "ruang" : case "super" :  case "keuangan" :  case "prodi" : 
											case "pengumuman" : case "alumni" : 
											case "umum" : case "pmb" : case "paket" : case "biaya" : case "biayapmb" : case "rekening" :  case "tagihan" : 
											case "dosen" : case "staff" : case "jabatan" : case "struktur" :
											case "kurikulum" : case "mk" :  case "syarat" : case "paket" : case "nilai" : case "predikat" :
											case "jadwal" : case "ujian" :  case "presensi" : 
											case "pmb" : case "mhs" : case "krs" : case "ta" : case "kkn" : case "ppl" : case "khs" : case "mahasiswa" : case "rentang" :
												if($field_id != "add" && $field_id != "edit"){ tables($inisCase,"","",true,true); } 
												else { forms($inisCase,$field_id,"",$id_data); }
											break;  
											default :
												notFound();
											break;
										}
									break;     
									default : 
										echo '<div align="center"><img src="'.BASE_URL.'assets/images/view.jpg"></div>';
									break;
								}
							} 
                        ?>   
						</div>
					</div>
				</div>
			</div> 
		</div> 
		<div class="footer clearfix">
			<div class="footer-inner">
				<?=date('Y');?> &copy; <?=BASE_TITLE;?>.
			</div>
			<div class="footer-items">
				<span class="go-top"><i class="clip-chevron-up"></i></span>
			</div>
		</div> 
		<script>var BASE_URL = "<?=BASE_URL;?>";</script>
		<!--[if lt IE 9]>
		<script src="<?=BASE_URL;?>assets/js/respond.min.js"></script>
		<script src="<?=BASE_URL;?>assets/js/excanvas.min.js"></script>
		<script type="text/javascript" src="<?=BASE_URL;?>assets/js/jquery.ie.min.js"></script>
		<![endif]-->
		<!--[if gte IE 9]><!-->
		<script src="<?=BASE_URL;?>assets/js/jquery.min.js"></script>
		<!--<![endif]-->
        <script src="<?=BASE_URL;?>assets/js/wysihtml5.min.js"></script>
		<script src="<?=BASE_URL;?>assets/js/jquery-ui-1.10.2.custom.min.js"></script>
		<script src="<?=BASE_URL;?>assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?=BASE_URL;?>assets/js/bootstrap3-wysihtml5.js"></script>
		<script src="<?=BASE_URL;?>assets/js/bootstrap-hover-dropdown.min.js"></script>
		<script src="<?=BASE_URL;?>assets/js/jquery.blockUI.js"></script>
		<script src="<?=BASE_URL;?>assets/js/jquery.icheck.min.js"></script>
		<script src="<?=BASE_URL;?>assets/js/jquery.mousewheel.js"></script>
		<script src="<?=BASE_URL;?>assets/js/perfect-scrollbar.js"></script> 
		<script src="<?=BASE_URL;?>assets/js/jquery.cookie.js"></script>  
		<script src="<?=BASE_URL;?>assets/js/select2.min.js"></script>
		<script src="<?=BASE_URL;?>assets/js/select2_locale_id.js"></script>
		<script src="<?=BASE_URL;?>assets/js/jquery.dataTables.min.js"></script>
		<script src="<?=BASE_URL;?>assets/js/DT_bootstrap.js"></script>
		<script src="<?=BASE_URL;?>assets/js/jquery.validate.min.js"></script>
		<script src="<?=BASE_URL;?>assets/js/bootstrap-datepicker.js"></script> 
		<script src="<?=BASE_URL;?>assets/js/bootstrap-timepicker.min.js"></script>   
		<script src="<?=BASE_URL;?>assets/js/bootstrap-switch.min.js"></script>
		<script src="<?=BASE_URL;?>assets/js/moment.min.js"></script>
		<script src="<?=BASE_URL;?>assets/js/daterangepicker.js"></script> 
		<script src="<?=BASE_URL;?>assets/js/main.js"></script> 
		<script src="<?=BASE_URL;?>assets/js/addon.js"></script>
		<script src="<?=BASE_URL;?>assets/js/table.js"></script>  
		<script src="<?=BASE_URL;?>assets/js/form.js"></script>  
		<script src="<?=BASE_URL;?>assets/js/index.js"></script>   
	</body> 
</html>
