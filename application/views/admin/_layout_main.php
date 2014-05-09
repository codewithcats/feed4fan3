 <?php $this->load->view('admin/components/page_head');?>
  <body>
  	 <nav class="navbar navbar-default navbar-inverse navbar-fixed-top  navbar-static-top" role="navigation">
  		<div class="container">
  		<ul class="nav navbar-nav">
   		 	<li> <a href="<?php echo base_url(); ?>"><?php echo $meta_title ?> </a></li>
<?php
 if(false){
			$mainmenu = $this->menu_m -> get_by('parent_id = 0');
      $gid = (int)($this->session->userdata('group'));
			foreach ($mainmenu as $menu) {
        $p = (int)($menu->permission);
         if (( $p  & $gid) == $gid){
            echo "<li class='dropdown'>"; 
                echo "<a href=" . base_url('sale/ticket') . ' class="dropdown-toggle" data-toggle="dropdown">';
                echo $menu->title .  " <b class='caret'></b></a>";

                $submenu = $this->menu_m -> get_by('parent_id = '. $menu->id);
                if (count($submenu)){
                    echo '<ul class="dropdown-menu">';
                    foreach ($submenu as $smenu) {
                       $p = (int)($smenu->permission);

                      if (($p & $gid) == $gid){
                        if ($smenu->title == 'div'){
                          echo '<li class="divider"></li>';
                        }else{
                          echo '<li>';
                          echo '<a href="'.base_url($smenu->link).'">'.$smenu->title.'</a></li>'; 
                        }
                      }
                  }
                  echo '</ul>';
                }
          echo '</li>';
        }

			}
  }    
?>
        </ul>
      	
  		</div>
	</nav>

	<div class="container">
    <div class="row">
      <div class="col-md-8">

        <?php  if (isset($subview)){
          $this->load->view($subview);
        };?>
        <?php  if (isset($subview2)){
          $this->load->view($subview2);
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
  
