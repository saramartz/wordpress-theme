<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper m-0 p-0" id="wrapper-footer">
    <div>
    
        <!----------- Footer ------------>
        <footer class="footer-bs mb-0 pb-5">
            <div class="row">
                <div class="col-md-3 footer-brand animated fadeInLeft">
                    <div class='mb-3'>
                        <img src='<?php echo get_template_directory_uri(); ?>/img/logo.png' alt='Logo' width='60px'>
                    </div>
                    <p class='text-justify'>Suspendisse hendrerit tellus laoreet luctus pharetra. 
                        Aliquam porttitor vitae orci nec ultricies. Curabitur vehicula, libero eget faucibus faucibus, 
                        purus erat eleifend enim, porta pellentesque ex mi ut sem. <br><br>
                        © 2021 Company Name, All rights reserved
                    </p>
                </div>
                <div class="col-md-4 footer-nav animated fadeInUp">
                    <h4>Menu —</h4>
                    <div class="d-flex justify-content-around">
                        <div class="col-md-5">
                            <ul class="pages">
                                <li><a href="#">Category</a></li>
                                <li><a href="#">Category</a></li>
                                <li><a href="#">Category</a></li>
                                <li><a href="#">Category</a></li>
                                <li><a href="#">Category</a></li>
                            </ul>
                        </div>
                        <div class="col-md-5">
                            <ul class="list">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 footer-social animated fadeInDown">
                    <h4>Follow Us</h4>
                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">RSS</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-ns animated fadeInRight">
                    <h4>Newsletter</h4>
                    <p>Suscribe to our weekly newsletter chalked full of recommendations.</p>
                    <p>                    
                        <form>
                            <div class="form-group">    
                                <input type="email" class="form-control font-italic" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email">
                            </div>
                            <button type="submit" class="btn btn-primary text-right pull-right rounded-pill text-white">Subscribe &rightarrow;</button>
                        </form>
                    </p>
                </div>
            </div>
        </footer>
        <section class='m-0 p-3 text-center text-white' style="background-color: #FFB932">      
            © 2021 Copyright:   
            <a class='text-white' href="#">Sara Martínez Vega</a>
        </section>

    </div>
</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

