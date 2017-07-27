<?php
$admin_info	=	$this->session->userdata('admin');
?>
<!-- START SIDEBAR -->
<div class="sidebar clearfix">
<div class="dropdown link">
      <a href="#" data-toggle="dropdown" class="dropdown-toggle profilebox">
     <div class="user-name"><b>How are you <?php echo $admin_info['name'];?> ?</b><span class="caret"></span></div></a>



    </div>
<ul class="sidebar-panel nav">
  <li class="sidetitle">Main Menu</li>
  <li><a href="<?php echo base_url('admin')?>"><span class="icon color5"><i class="fa fa-dashboard fa-fw"></i></span>Dashboard</a></li>

  <li><a href="<?php echo base_url('admin/pages')?>"><span class="icon color5"><i class="fa fa-file-o fa-fw"></i></span>Pages</a></li>

  <li><a href="<?php echo base_url('admin/posts')?>"><span class="icon color5"><i class="fa fa-rss fa-fw"></i></span>Posts</a></li>

  <li><a href="<?php echo base_url('admin/modules')?>"><span class="icon color5"><i class="fa fa-window-restore fa-fw"></i></span>Modules</a></li>

  <li><a href="<?php echo base_url('admin/contacts')?>"><span class="icon color5"><i class="fa fa-comments fa-fw"></i></span>Contacts</a></li>
 
 

  <li class="sidetitle">Settings</li>
  <div class="slide_toggel_settings">
  <li><a href="<?php echo base_url('admin/appearance')?>"><span class="icon color6"><i class="fa fa-paint-brush"></i></span>Appearance</a></li>
  <li><a href="<?php echo base_url('admin/sliders')?>"><span class="icon color6"><i class="fa fa-picture-o"></i></span>Sliders</a></li>
  <li><a href="<?php echo base_url('admin/settings')?>"><span class="icon color6"><i class="fa fa-sliders"></i></span>Settings</a></li>
  <li><a href="<?php echo base_url('admin/admin_users')?>"><span class="icon color6"><i class="fa fa-black-tie"></i></span>Administrators</a></li>
  <?php 
  /*
  <li><a href="<?php echo base_url('admin/logs')?>"><span class="icon color6"><i class="fa fa-list"></i></span>API Logs</a></li>
  */?>
  
  
  <li><a href="<?php echo base_url('admin/logout')?>"><span class="icon color6"><i class="fa fa-power-off"></i></span>Logout</a></li>
	</div>
</ul>


</div>
<!-- END SIDEBAR -->
<!-- //////////////////////////////////////////////////////////////////////////// -->
