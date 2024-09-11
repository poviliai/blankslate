    <?php
    if(preg_match('/(aufschaltung-fernueberwachung)/', get_permalink())) {
    ?>
    <section style:"background-color: #000000;" class="bottom-banner">

    <?php  echo  get_template_part('protocol') ;?>
    <!--//
      <figure class="wp-block-image size-full">
        <img decoding="async" src="/wp-content/uploads/2024/08/p04_ZSD-Protokollflyer.svg" alt="" class="wp-image-783">
       </figure>
    //-->   
    </section>
    <?php
    }
    ?>
    <footer id="footer">
        <div class="container">
            <div class="footer-inner">
                <div class="col_half">
                    <div class="logo">
                     
                    <!-- //2020/11/ZSD_sm.png //--> 
                        <a href="/"><img src="/wp-content/uploads/2024/08/logo-bottom-new.png" alt=""></a>
                    </div>
                    <div class="logo-info">
                        <span class="mrg-10 footer-logo-text"><img src="/wp-content/uploads/2024/08/AryaS-Protection-UG.png" alt=""/></span>

                        <span>Bahnhofstrasse 29</span>
                        <span>86415 Mering</span>
                        <span>Telefon: <a href="tel:082337479495">08233 7479495</a></span>
                        <span>E-Mail: <a href="mailto:service@aryas-protection.de">service@aryas-protection.de</a></span>
                       
<!--                        <div class="social-ico">-->
<!--                            <a href="https://www.facebook.com/ZSD-Ziviler-Sicherheitsdienst-107357381138862" target="_blank">-->
<!--                                <i class="fa fa-facebook-official" aria-hidden="true"></i>-->
<!--                            </a>-->
<!--                            <a href="https://www.instagram.com/zsd_ziviler_sicherheitsdienst/"  target="_blank">-->
<!--                                <i class="fa fa-instagram" aria-hidden="true"></i>-->
<!--                            </a>-->
<!--                            <a href="https://www.youtube.com/channel/UCIEC8KmL7ScDlZWFD3Z5HNA/featured"  target="_blank">-->
<!--                                <i class="fa fa-youtube-play" aria-hidden="true"></i>-->
<!--                            </a>-->
<!--                            <a href="https://www.linkedin.com/groups/12477015/"  target="_blank">-->
<!--                            <i class="fa fa-linkedin" aria-hidden="true"></i>-->
<!--                            </a>-->
<!--                            <a href="https://www.xing.com/profile/Hans_Giesser"  target="_blank">-->
<!--                            <i class="fa fa-xing" aria-hidden="true"></i>-->
<!--                            </a>-->
<!--                        </div>-->
                    </div>
                </div>
                <div class="col_half">
                    <div class="nav-menu-big">
                        <?php wp_nav_menu( [ 'menu' => 'Footer Big menu' ] ); ?>
                    </div>
                    <!-- <div class="nav-menu-small">
                        <?php //wp_nav_menu( [ 'menu' => 'Footer Small menu' ] ); ?>
                    </div> -->
                </div>
            </div>
            <div id="copyright">
            
                <p><a href="#" class="topScroll"><i class="fa fa-arrow-up" aria-hidden="true"></i></a></p>
                <span>AryaS Protection UG. ALLE RECHTE VORBEHALTEN</span>
                <script>
                        jQuery('a.topScroll').click(function(){
                            var body = jQuery("html, body");
                            body.stop().animate({scrollTop:0}, 500, 'swing', function() { 
                            });
                            return false;
                        });
                </script>
            </div>
        </div>
    </footer>
    
</div>
<?php wp_footer(); ?>



</body>
</html>