      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <!-- search form -->
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MENU NAVIGASI</li>
            <li id="artikel" class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Artikel</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li id="daftar_artikel"><a href="<?php echo base_url();?>admin/artikel"><i class="fa fa-circle-o" ></i>Daftar Artikel</a></li>
                <li id="tambah_artikel"><a href="<?php echo base_url();?>admin/tambah_artikel"><i class="fa fa-circle-o"></i>Tambah Artikel</a></li>
                <li id="kategori"><a href="<?php echo base_url();?>admin/kategori"><i class="fa fa-circle-o"></i>Kategori</a></li>
              </ul>
            </li>
            <?php 
              if ($session['role'] == 'Admin'){
            ?>
              <li id="tampilan" class="treeview">
                <a href="#">
                  <i class="fa fa-pie-chart"></i>
                  <span>Tampilan</span>
                  <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li id="slider"><a href="<?php echo base_url();?>admin/slider"><i class="fa fa-circle-o"></i> Image Slider</a></li>
                </ul>
              </li>
              <li id="user" class="treeview">
                <a href="#">
                  <i class="fa fa-laptop"></i>
                  <span>User</span>
                  <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li id="manage_user"><a href="<?php echo base_url();?>admin/manage_user"><i class="fa fa-circle-o"></i> Manage User</a></li>
                </ul>
              </li>
            <?php
              }else{}
            ?>
            <li id="files" class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Files</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li id="images"><a href="<?php echo base_url();?>admin/manage_images"><i class="fa fa-circle-o"></i> Kelola Gambar</a></li>
                <li id="file"><a href="<?php echo base_url();?>admin/manage_files"><i class="fa fa-circle-o"></i> Kelola File</a></li>
              </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

<script>
  $(document).ready(function(){
    $("#<?php echo $active_parent;?>").addClass("active");
    $("#<?php echo $active;?>").addClass("active");
//$(".treeview-menu li").on("click", function(){
   //$(".treeview-menu li").find(".active").removeClass("active");
   //$(this).parent().addClass("active");
   //$(this).addClass("active");
//});
});
</script>