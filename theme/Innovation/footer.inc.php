<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); } 
/****************************************************
*
* @File: 			footer.inc.php
* @Package:		GetSimple
* @Action:		Innovation theme for GetSimple CMS
*
*****************************************************/
?>

   <!--==============================
        Footer Area
    ==============================-->
    <footer class="footer-wrapper footer-layout3 overflow-hidden bg-smoke">
        <div class="container">
            <div class="footer-menu-area">
                <div class="row gy-3 justify-content-between">
                    <div class="col-xxl-6 col-lg-7">
                        <ul class="footer-menu-list">
                            <li>
                                <a href="<?php get_site_url(); ?>about-us/">
                                    <span class="link-effect">
                                        <span class="effect-1">ABOUT COMPANY</span>
                                        <span class="effect-1">ABOUT COMPANY</span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php get_site_url(); ?>our-projects/">
                                    <span class="link-effect">
                                        <span class="effect-1">PROJECTS</span>
                                        <span class="effect-1">PROJECTS</span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php get_site_url(); ?>our-services/">
                                    <span class="link-effect">
                                        <span class="effect-1">SERVICES</span>
                                        <span class="effect-1">SERVICES</span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php get_site_url(); ?>contact-us/">
                                    <span class="link-effect">
                                        <span class="effect-1">CONTACT US</span>
                                        <span class="effect-1">CONTACT US</span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xxl-6 col-lg-5 text-lg-end">
                        <ul class="footer-menu-list">
                            <li>
                                <a href="https://blog.alessiontech.co.ke/">
                                    <span class="link-effect">
                                        <span class="effect-1">BLOG</span>
                                        <span class="effect-1">BLOG</span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php get_site_url(); ?>faq/">
                                    <span class="link-effect">
                                        <span class="effect-1">FAQS</span>
                                        <span class="effect-1">FAQS</span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row gy-3 justify-content-between align-items-center">
                    <div class="col-md-6">
                        <div class="social-btn style3">
                            <a href="https://www.facebook.com/alessiontechnology" target="_blank">
                                <span class="link-effect">
                                    <span class="effect-1"><i class="fab fa-facebook"></i></span>
                                    <span class="effect-1"><i class="fab fa-facebook"></i></span>
                                </span>
                            </a>
                            <a href="https://www.instagram.com/alessiontech/" target="_blank">
                                <span class="link-effect">
                                    <span class="effect-1"><i class="fab fa-instagram"></i></span>
                                    <span class="effect-1"><i class="fab fa-instagram"></i></span>
                                </span>
                            </a>
                            <a href="https://x.com/AlessionTech" target="_blank">
                                <span class="link-effect">
                                    <span class="effect-1"><i class="fab fa-twitter"></i></span>
                                    <span class="effect-1"><i class="fab fa-twitter"></i></span>
                                </span>
                            </a>
                            <a href="https://www.linkedin.com/company/alessiontech/" target="_blank">
                                <span class="link-effect">
                                    <span class="effect-1"><i class="fab fa-linkedin"></i></span>
                                    <span class="effect-1"><i class="fab fa-linkedin"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 align-self-center text-lg-end">
                    <p class="copyright-text">Copyright © <span id="current-year"></span>
                        <a href="www.alessiontech.com">AlessionTech</a>
                    </p>
                </div>

                    <script>
                        document.getElementById("current-year").textContent = new Date().getFullYear();
                    </script>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>

	<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
	<div class="elfsight-app-19f155fe-b0e9-4b58-a1aa-dce7fac3d642" data-elfsight-app-lazy></div>

    <!-- Jquery -->
    <script src="<?php get_theme_url(); ?>/assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="<?php get_theme_url(); ?>/assets/js/slick.min.js"></script>
    <script src="<?php get_theme_url(); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php get_theme_url(); ?>/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php get_theme_url(); ?>/assets/js/jquery.counterup.min.js"></script>
    <script src="<?php get_theme_url(); ?>/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?php get_theme_url(); ?>/assets/js/isotope.pkgd.min.js"></script>
    <script src="<?php get_theme_url(); ?>/assets/js/gsap.min.js"></script>
    <script src="<?php get_theme_url(); ?>/assets/js/twinmax.js"></script>
    <script src="<?php get_theme_url(); ?>/assets/js/imageRevealHover.js"></script>
    <script src="<?php get_theme_url(); ?>/assets/js/jarallax.min.js"></script>
    <script src="<?php get_theme_url(); ?>/assets/js/jquery.marquee.min.js"></script>
    <script src="<?php get_theme_url(); ?>/assets/js/jquery-ui.min.js"></script>
    <script src="<?php get_theme_url(); ?>/assets/js/waypoints.js"></script>
    <script src="<?php get_theme_url(); ?>/assets/js/wow.js"></script>

    <!-- Main Js File -->
    <script src="<?php get_theme_url(); ?>/assets/js/main.js"></script>


        <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/671553cf4304e3196ad4d0df/1ialkuoqi';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>

</html>