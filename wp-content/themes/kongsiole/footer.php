
	<div id="sticker-app">
        <div class="container hidden-m">
            <div class="col-12">
                <a href="https://bit.ly/stikerdownload" target="_blank">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/Sticker WhatsApp Gratis - Kongsi OLE777.gif" alt="Sticker WhatsApp Gratis - Kongsi OLE777">
                </a>
            </div>
        </div>

        <div class="visible-m">
            <div class="col-12">
                <a href="https://bit.ly/stikerdownload" target="_blank">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/Sticker WhatsApp Gratis - Kongsi OLE777(600x100).gif" alt="Sticker WhatsApp Gratis - Kongsi OLE777">
                </a>
            </div>
        </div>
    </div>


    <div id="contact">
        <div class="container">
            <div class="col-4">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/icon-skype.svg" alt="Skype Logo">
                <span>
                Pelayanan Pelanggan Skype: <a hrefs="#"><span class="__cf_email__" data-cfemail="49282f2f202520283a2067202d0926252c20273d25672a2624">[email&#160;protected]</span></a>
            </span>
            </div>
            <div class="col-4">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/icon-email.svg" alt="Email Icon">
                <span>
                Email: <a hrefs="mailto:affiliatebola@ole777-indo.com"><span class="__cf_email__" data-cfemail="f1909797989d98908594939e9d90b19e9d94c6c6c6dc989f959edf929e9c">[email&#160;protected]</span></a>
            </span>
            </div>
            <div class="col-4">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/icon-whatsapp.svg" alt="Whatsapp Logo">
                <span>Whatsapp: <a hrefs="#">+6287807264445</a></span>
            </div>
        </div>
    </div>

    <div id="footer">
        <div class="container">
            <div class="col-4 logo-mobile">
                <a href="https://www.gol155.com/aff/71818009" target="_blank">
                    <img width="auto" src="<?php echo get_template_directory_uri();?>/assets/images/ole777-white2.png" alt="OLE 777">'
                </a>
            </div>
            <div class="col-4">
                <a href="https://www.chelseafc.com/in" target="_blank">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/logo-chelsea.svg" alt="Chelsea Affiliate">
                </a>
            </div>
            <div class="col-4">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/logo-pagcor.png" alt="Pagcor License">
            </div>
            <div class="col-4">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/logo-iom.png" alt="Isle of Man License">
            </div>
            <div class="col-4 ole-logo">
                <a href="https://www.gol155.com/aff/71818009" target="_blank">
                    <img width="auto" src="<?php echo get_template_directory_uri();?>/assets/images/ole777-white.png" alt="OLE 777">'
                </a>
            </div>
        </div>
    </div>
    <div id="floating_watsapp"></div>

    <script data-cfasync="false" src="<?php echo get_template_directory_uri();?>/assets/js/email-decode.min.js"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Mobile Navigation Toggle Script -->
    <script src="<?php echo get_template_directory_uri();?>/assets/js/droptoggle.js"></script>
    <!-- particles.js lib - https://github.com/VincentGarreau/particles.js -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <!-- Particles Script -->
    <script src="js/particles.js"></script>
    <!-- floating whatsapp -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/floating-wpp.css">
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/floating-wpp.js"></script>

    <!-- Start of LiveChat (www.livechatinc.com) code -->
    <script type="text/javascript">
        window.__lc = window.__lc || {};
        window.__lc.license = 9764190;
        (function() {
            var lc = document.createElement('script');
            lc.type = 'text/javascript';
            lc.async = true;
            lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(lc, s);
        })();
    </script>
    <noscript>
  <a href="https://www.livechatinc.com/chat-with/9764190/" rel="nofollow">Chat with us</a>,
  powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a>
  </noscript>
    <!-- End of LiveChat code -->

    <!-- Start of floating whatsapp -->
    <script type="text/javascript">
        $(function() {
            var w = window.innerWidth;
            if (w < 600) {
                $('#floating_watsapp').addClass('set_position');
                $('#floating_watsapp').floatingWhatsApp({
                    // phone: '639277375389',
                    phone: '6287807264445',
                    popupMessage: 'Halo, Yuk dapat penghasilan dengan gabung di KONGSI OLE777!!',
                    message: "Saya ingin mendapatkan penghasilan dari OLE777.",
                    size: '60px',
                    showPopup: true,
                    showOnIE: false,
                    position: 'left',
                    headerTitle: 'Welcome!',
                    headerColor: '#faa41f',
                    backgroundColor: 'crimson',
                    buttonImage: '<img src="<?php echo get_template_directory_uri();?>/assets/images/whatsapp.svg" />'
                });
            } else {
                $('#floating_watsapp').removeClass('set_position');
                $('#floating_watsapp').floatingWhatsApp({
                    phone: '6287807264445',
                    popupMessage: 'Halo, Yuk dapat penghasilan dengan gabung di KONGSI OLE777!!',
                    message: "Saya ingin mendapatkan penghasilan dari OLE777.",
                    showPopup: true,
                    showOnIE: false,
                    position: 'left',
                    headerTitle: 'Welcome!',
                    headerColor: '#faa41f',
                    backgroundColor: 'crimson',
                    buttonImage: '<img src="<?php echo get_template_directory_uri();?>/assets/images/whatsapp.svg" />'
                });
            }

        });
    </script>
    <!--End of floating whatsapp-->

	<?php wp_footer(); ?>
</body>

</html>

		

