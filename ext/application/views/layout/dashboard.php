<div id="wrapper">
        <?php $this->load->view('sidebar'); ?>

        <div id="page-wrapper" class="gray-bg dashbard-1">
           
	       	<?php echo $header; ?>
	       	<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-9">
                   
                    <h2><?php echo !empty($title)?$title:'' ?></h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url() ?>">Home</a>
                        </li>
                        <li class="active">
                            <strong><?php echo !empty($title)?$title:'' ?></strong>
                        </li>
                    </ol>
                </div>
            </div>
	        <!-- Content -->
	        <div class="row">

               


	            <?php echo $main_content; ?>
	        </div>
	        <!-- End Content -->
        </div>
        <!-- End Page Wrapper -->


        <?php //$this->load->view('right-sidebar') ?>
    </div>
<?php echo $footer; ?>