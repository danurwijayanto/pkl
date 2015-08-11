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
            <small style="font-size: 75%;">Copyright &copy; 2015 2 Senior High School Salatiga</small>
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
            <small style="font-size: 75%;">Copyright &copy; 2015 SMA Negeri 2 Salatiga</small>
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

        </div>
    </footer>

</html>
