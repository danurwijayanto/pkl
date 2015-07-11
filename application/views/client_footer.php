    <footer class="footer clearfix" style="">
        <div id="footer-contact">
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

            <!-- jQuery -->
          <script src="<?php echo base_url();?>assets/jquery/1/jquery.min.js"></script>
          <!-- FlexSlider -->
          <script  type="text/javascript" src="<?php echo base_url();?>assets/flexslider/js/jquery.flexslider.js"></script>

          <script type="text/javascript">
             $(function(){
              SyntaxHighlighter.all();
            });
            $(window).load(function(){
              $('.flexslider').flexslider({
                animation: "slide",
                controlNav: false,
                fx: 'fade',
                timeout: 5000,
                speed: 500,
                start: function(slider){
                  $('body').removeClass('loading');
                }
              });
            });
          </script>

        </div>
    </footer>

</html>
