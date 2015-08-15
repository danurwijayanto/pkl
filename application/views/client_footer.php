    <footer class="footer clearfix" style="">
        <div id="footer-contact">
          <?php if ($language['selected']=='english'){ ?>
            2 Senior High School Salatiga
            <br>
            <span class="glyphicon glyphicon-home"></span> Tegalrejo Street 79 Argomulyo Salatiga - Indonesia
            <br>
            <span class="glyphicon glyphicon-phone-alt"></span> (0298) 322250 | 
            <span class="glyphicon glyphicon-print"></span> (0298) 316638 | 
            <span class="glyphicon glyphicon-envelope"></span> sma2salatiga@gmail.com
            <br>
            <br>
            <small style="font-size: 75%;">Copyright &copy; 2015 2 Senior High School Salatiga<br><br>Total Visitor :</small>
          <?php }else{ ?>
            SMA Negeri 2 Salatiga
            <br>
            <span class="glyphicon glyphicon-home"></span> Jalan Tegalrejo No. 79 Kecamatan Argomulyo Kota Salatiga - Indonesia
            <br>
            <span class="glyphicon glyphicon-phone-alt"></span> (0298) 322250 | 
            <span class="glyphicon glyphicon-print"></span> (0298) 316638 | 
            <span class="glyphicon glyphicon-envelope"></span> sma2salatiga@gmail.com
            <br>
            <br>
            <small style="font-size: 75%;">Copyright &copy; 2015 SMA Negeri 2 Salatiga<br><br>Total Pengunjung :</small>
            <?php } ?>
            <!-- jQuery -->
          <script src="<?php echo base_url();?>assets/jquery/1/jquery.min.js"></script>
          <!-- FlexSlider -->
          <script  type="text/javascript" src="<?php echo base_url();?>assets/flexslider/js/jquery.flexslider.js"></script>

          <script type="text/javascript">
            $(function(){
              SyntaxHighlighter.all();
            });
            $(window).load(function(){
              $('#slider-one').flexslider({
                animation: "slide",
                controlNav: false,
                fx: 'fade',
                timeout: 5000,
                speed: 500,
                start: function(slider){
                  $('body').removeClass('loading');
                }
              });

              $('#slider-two').flexslider({
                    animation: "slide",
                    animationLoop: true,
                    controlNav: false,
                    itemWidth: 100,
                    itemHeight: 100,
                    itemMargin: 5,
                    minItems: 2,
                    maxItems: 4
                });

            });
          </script>

          <!-- Start of StatCounter Code for Default Guide -->
          <!-- Start of StatCounter Code for Dreamweaver -->
          <script type="text/javascript">
          var sc_project=10574226; 
          var sc_invisible=0; 
          var sc_security="32242c9a"; 
          var scJsHost = (("https:" == document.location.protocol) ?
          "https://secure." : "http://www.");
          document.write("<sc"+"ript type='text/javascript' src='" +
          scJsHost+
          "statcounter.com/counter/counter.js'></"+"script>");
          </script>
          <noscript><div class="statcounter"><a title="web stats"
          href="http://statcounter.com/free-web-stats/"
          target="_blank"><img class="statcounter"
          src="http://c.statcounter.com/10574226/0/32242c9a/0/"
          alt="web stats"></a></div></noscript>
          <!-- End of StatCounter Code for Dreamweaver -->
          <a href="http://statcounter.com/p10574226/?guest=1">View My
          Stats</a>

        </div>
    </footer>

</html>
