<!DOCTYPE html>
<html>
  <head>
    <title>
      SMA Negeri 2 Salatiga
    </title>
    <!--View Port-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
     <!-- Latest compiled font-awesome CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css">
    <!-- jQuery library -->
    <script src="<?php echo base_url();?>assets/jquery/1.11.3/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>

    <!--Slider-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/flexslider/css/flexslider.css" type="text/css" media="screen" />

    <!-- Modernizr -->
    <script src="<?php echo base_url();?>assets/flexslider/js/modernizr.js"></script>


    <style>
      /* Sticky footer styles-------------------------------------------------- */
      html {
          position: relative;
          min-height: 100%;
      }
      body {
        /* Margin bottom by footer height */
        margin-bottom: 60px;
        /* padding-top: 40px; */
        padding-top: 0px;
        background-image: url(assets/image/bg3.png);
        background-repeat: repeat;
      }
      .footer {
        background: #252525 url(assets/image/foot.png) repeat-x scroll 0% 0%;
            background-color: #252525;
            background-image: url(assets/image/foot.png);
            background-repeat: repeat-x;
            background-attachment: scroll;
            background-position: 0% 0%;
            background-clip: border-box;
            background-origin: padding-box;
            background-size: auto auto;
            position: absolute;
          bottom: 0;
          width: 100%;
          /* Set the fixed height of the footer here */
          min-height: 145px;
          margin-top: 10px;
          color:#FFF;
          margin: 0 0 -35px 0;         
      }
      
      .pengumuman {
        border: 4px solid #D2D2D2;
        border-radius: 6px;
        padding: 10px;
        
      }
      #footer-contact {
          padding: 20px;
          text-align: center;
      }

      ul.home , li.home {
        list-style-type:none;
        padding-left: 0;
      }

      .flex-caption {
          width: 100%;
          padding: 2%;
          left: 0;
          bottom: 0;
          background: rgba(0,0,0,.5);
          color: #fff;
          text-shadow: 0 -1px 0 rgba(0,0,0,.3);
          font-size: 14px;
          line-height: 18px;
        }
        li.css a {
          border-radius: 0;
        }

        .panel {
          border: solid 1px #31A1FF;
        margin: 2px 3px 10px;
        box-shadow: 0px 1px 1px #888888;
        border: 3px solid #D2D2D2;
        border-radius: 5px;
        padding: 10px;
      } 

      .judul_panel {
        color: #000;
        background-color: #004A87;
        padding: 10px;
        border-radius: 6px;
        font-weight: bold;
        color: #fff;
        border-radius: 5px;
      }

      .site_news_metadate {
        padding: 3px 3px 3px 20px;
        margin-bottom: 5px;
        font-size: 12px;
        background-color: #E2F2FF;
        color: #0077D3;
        background-position: 5px center;
        background-size: 12px 12px;
        background-repeat: no-repeat;
      }

      #article {        
        background-color: #FCFDFF;
        box-shadow: 0px 3px 2px #888888;
      }

      hr {
        display: block;
        -webkit-margin-before: 0.5em;
        -webkit-margin-after: 0.5em;
        -webkit-margin-start: auto;
        -webkit-margin-end: auto;
        border-style: inset;
        border-width: 2px;
      }

      .date-title {
        font-size: 10px;
        color: #555;
      }

      .link-gambar {
          margin: 63px 0px;
          padding: 5px;
          min-height: 100px;
      }
      .link-gambar img {
          padding: 5px;
          filter: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'/></filter></svg>#grayscale");
          transition-duration: 1s;
      }

      .link-gambar img:hover {
          transition-duration: 1s;
          filter: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='1 0 0 0 0, 0 1 0 0 0, 0 0 1 0 0, 0 0 0 1 0'/></filter></svg>#grayscale");
      }

      .news_readmore {
          margin-top: 15px;
          padding: 3px;
          border: 1px solid #D3EBFF;
          border-radius: 1px;
          background: #F7FBFF none repeat scroll 0% 0%;
          clear: both;
      }

      .dropdown-submenu {
          position:relative;
      }
      .dropdown-submenu>.dropdown-menu {
          top:0;
          left:100%;
          margin-top:-6px;
          margin-left:-1px;
          -webkit-border-radius:0 6px 6px 6px;
          -moz-border-radius:0 6px 6px 6px;
          border-radius:0 6px 6px 6px;
      }
      .dropdown-submenu:hover>.dropdown-menu {
          display:block;
      }
      .dropdown-submenu>a:after {
          display:block;
          content:" ";
          float:right;
          width:0;
          height:0;
          border-color:transparent;
          border-style:solid;
          border-width:5px 0 5px 5px;
          border-left-color:#cccccc;
          margin-top:5px;
          margin-right:-10px;
      }
      .dropdown-submenu:hover>a:after {
          border-left-color:#ffffff;
      }
      .dropdown-submenu.pull-left {
          float:none;
      }
      .dropdown-submenu.pull-left>.dropdown-menu {
          left:-100%;
          margin-left:10px;
          -webkit-border-radius:6px 0 6px 6px;
          -moz-border-radius:6px 0 6px 6px;
          border-radius:6px 0 6px 6px;
      }
    </style>
  </head>
  <body>
    <!--Gambar header-->
    <div class="image-header" >
      <img class="img-responsive" style="width:100%;" src="<?php if ($language['selected']=='indonesia'){echo base_url()."assets/image/header_in.png"; }else{echo base_url()."assets/image/header_en.png";}?>">
    </div>
    <!--Menu Navigasi-->
    <div class="navigasi_atas">
      <nav class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header">
            <!--Menu navigasi jika dibuka dari hp-->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarku">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>                        
                </button>
                <a class="navbar-brand" href="<?php echo base_url();?>client">SMAN 2 Salatiga</a>
              </div>
          <div  class="collapse navbar-collapse" id="navbarku">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Profile
                      <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="<?php echo base_url();?>client/sejarah"><?php echo $language['sejarah'];?></a></li>
                          <li><a href="<?php echo base_url();?>client/visimisi"><?php echo $language['visimisi'];?></a></li>
                          <li><a href="<?php echo base_url();?>client/tujuan"><?php echo $language['tujuan'];?></a></li>
                          <li><a href="<?php echo base_url();?>client/logo_motto"><?php echo $language['logomoto'];?></a></li>
                          <li><a href="<?php echo base_url();?>client/struktur_organisasi"><?php echo $language['strukturor'];?></a></li>
                        </ul>
                
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $language['kepegawaian'];?>
                      <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="<?php echo base_url();?>client/guru"><?php echo $language['guru'];?></a></li>
                          <li><a href="<?php echo base_url();?>client/karyawan"><?php echo $language['karyawan'];?></a></li>
                          <li class="menu-item dropdown dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $language['staff'];?></a>
                              <ul class="dropdown-menu">
                                  <li>
                                      <a href="<?php echo base_url();?>client/manajemen_mutu"><?php echo $language['kualitasmanagemen'];?></a>
                                  </li>
                                  <li>
                                      <a href="<?php echo base_url();?>client/kurikulum"><?php echo $language['kurikulum'];?></a>
                                  </li>
                                  <li>
                                      <a href="<?php echo base_url();?>client/kemahasiswaan"><?php echo $language['student'];?></a>
                                  </li>
                                  <li>
                                      <a href="<?php echo base_url();?>client/infrastruktur"><?php echo $language['infrastruktur'];?></a>
                                  </li>
                                  <li>
                                      <a href="<?php echo base_url();?>client/humas"><?php echo $language['humas'];?></a>
                                  </li>
                              </ul>
                          </li>
                      </ul>
                        
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $language['informasi'];?>
                      <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="<?php echo base_url();?>client/kategori?id=6"><?php echo $language['pengumuman'];?></a></li>
                          <li><a href="<?php echo base_url();?>client/kategori?id=9"><?php echo $language['berita'];?></a></li>
                          <li><a href="<?php echo base_url();?>client/kategori?id=3"><?php echo $language['artikel'];?></a></li>
                          <li><a href="<?php echo base_url();?>client/kategori?id=8"><?php echo $language['agenda'];?></a></li>
                        </ul>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $language['kemitraan'];?>
                      <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="<?php echo base_url();?>client/perguruan_tinggi"><?php echo $language['perguruan'];?></a></li>
                          <li><a href="<?php echo base_url();?>client/pemerintah"><?php echo $language['pemerintah'];?></a></li>
                          <li><a href="<?php echo base_url();?>client/masyarakat"><?php echo $language['masyarakat'];?></a></li>
                        </ul>
                
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $language['bahanajar'];?>
                      <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="<?php echo base_url();?>client/materibelajar"><?php echo $language['materibelajar'];?></a></li>
                          <li><a href="<?php echo base_url();?>client/mediabelajar"><?php echo $language['mediabelajar'];?></a></li>
                          <li><a href="<?php echo base_url();?>client/download">Download</a></li>
                        </ul>
              </li>
              <li class="">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Elearning
                <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="#">Coming Soon</a></li>
                        </ul>
              <li class=""><a href="<?php echo base_url();?>client/kontak"><?php echo $language['kontak'];?></a></li>
              <li style="top:13px; left:185px">
                <form action="<?php echo base_url();?>operation/ganti_bahasa" method="post" >
                  <select name="language" id="lang"  onChange="this.form.submit()" style="font-family: 'Raleway',sans-serif; font-size: 16px; height: 25px; width: 100px;">
                    <option value="indonesia" <?php if($language['selected']=='indonesia'){echo 'selected="selected"';}?>>Indonesia</option>
                    <option value="english" <?php if($language['selected']=='english'){echo 'selected="selected"';}?>>English</option>
                  </select>
                </form> 
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <!--End Menu Navigasi-->
