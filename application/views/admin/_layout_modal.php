<?php $this->load->view('admin/components/page_head');?>

<body style="background: #555">


<div class="modal-dialog">
    <div class="modal-content">
    	<?php $this->load->view($subview); ?>
      	<div class="modal-footer" style="text-align:center">
      	<img style="width:70px;"src="<?php echo base_url(). "img/oit.png"?>"/> <br/>
        &copy; Olympus Innovation Technology Co., Ltd.
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
<?php $this->load->view('admin/components/page_tail');?>
  
