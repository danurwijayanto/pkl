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
        background-image: url(../assets/image/bg3.png);
        background-repeat: repeat;
      }
      .footer {
        background: #252525 url(../assets/image/foot.png) repeat-x scroll 0% 0%;
            background-color: #252525;
            background-image: url(../assets/image/foot.png);
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

      ul, li {
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

  
    </style>
  </head>
  <body>
    <!--Gambar header-->
    <div class="image-header" >
      <img class="img-responsive" style="width:100%;" src="<?php echo base_url();?>assets/image/header.png">
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
                <a class="navbar-brand" href="#">SMAN 2 Salatiga</a>
              </div>
          <div  class="collapse navbar-collapse" id="navbarku">
            <ul class="nav navbar-nav">
              <li class=""><a href="<?php echo base_url();?>client">Home</a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Profile
                      <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="#">Sejarah</a></li>
                          <li><a href="<?php echo base_url();?>client/visimisi">Visi dan Misi</a></li>
                          <li><a href="#">Tujuan</a></li>
                          <li><a href="#">Logo dan Motto</a></li>
                          <li><a href="#">Struktur Organisasi</a></li>
                        </ul>
                
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Kepegawaian
                      <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="#">Guru</a></li>
                          <li><a href="#">Karyawan</a></li>
                        </ul>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Informasi
                      <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="#">Pengumuman</a></li>
                          <li><a href="#">Berita</a></li>
                          <li><a href="#">Artikel</a></li>
                        </ul>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Kemitraan
                      <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="#">Perguruan Tinggi</a></li>
                          <li><a href="#">Pemerintah</a></li>
                          <li><a href="#">Masyarakat</a></li>
                        </ul>
                
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Bahan Ajar
                      <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="#">Materi Pembelajaran</a></li>
                          <li><a href="#">Media Pembelajaran</a></li>
                          <li><a href="#">Download</a></li>
                        </ul>
              </li>
              <li class=""><a href="#">Elearning</a></li>
              <li class=""><a href="#">Kontak</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <!--End Menu Navigasi-->
