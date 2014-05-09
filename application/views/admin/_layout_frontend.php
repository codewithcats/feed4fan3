 <?php $this->load->view('admin/components/page_head');?>
<body>
<div class="container">
    <div class="row">
      <div class="col-md-8">

        <?php  if (isset($subview)){
          $this->load->view($subview);
        };?>
        
      </div>

      <?php if ( false && $this->session->userdata('logedin') == 1): ?>
      <div class="col-md-4">
        <section>
        <?php echo '<span class="glyphicon glyphicon-user"></span>'. $this->session->userdata('name'); ?> <br/>
        <?php echo anchor(base_url('admin/user/logout'), '<span class="glyphicon glyphicon-off"></span> logout')?> <br/>
        </section>
      </div>
      <?php endif; ?>
    </div>
	</div>
<?php $this->load->view('admin/components/page_tail');?>