<?php global $tp_options; ?>
<section class="home-coming-in-from-out">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-8">
                <div class="home-coming-in-from-out--title">Coming in from out of town ?</div>
                <div class="home-coming-in-from-out--des">
                    <?php echo $tp_options['coming-in-from-out'] ?>

                </div>
            </div>
        </div>

    </div>
</section>
<section class="home-talk-to-us" style="<?php if ($detect->isMobile()){ echo 'background-image:url('.get_template_directory_uri().'/images/MOB-Home-Contact_Image-375x895px-v1.png)' ;}  ?>">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-5">
                <div class="home-talk-to-us--title">Talk to us in confidence today</div>
                <div class="home-talk-to-us--des">
                   <?php echo $tp_options['talk-to-us'] ?>
                </div>
            </div>
            <div class="col-12 col-sm-7">
                <div class="from-footer-contact">
                <?php echo do_shortcode('[caldera_form id="CF5b8ea7cdbad80"]'); ?>
                </div>
               <!-- <form class="from-footer-contact">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="First Name *">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email*">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Phone Number">
                    </div>
                    <div class="form-group">
                        <textarea rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <div class="">
                            <button class="btn-submit-contact-footer" type="button">Enquire</button>
                        </div>
                    </div>
                </form>-->
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class=" background-footer-s">
            <div class="row">
                <div class="col-12 col-sm-4">
                    <div class="footer-logo">
                        <img src="<?php echo $tp_options['logo-image-footer']['url'] ?>">
                    </div>

                </div>
                <div class="col-12 col-sm-4">
                    <?php echo $tp_options['info-text'] ?>
                </div>
                <div class="col-6 col-sm-2">
                    <div class="menu-footer">
                        <?php wp_nav_menu(array('theme_location' => 'footer-nav-left')) ?>
                       <!-- <ul>
                            <li><a href="">Hands</a> </li>
                            <li><a href="">Body</a> </li>
                            <li><a href="">Breast</a> </li>
                            <li><a href="">Face</a> </li>
                            <li><a href="">Skin</a> </li>

                        </ul>-->
                    </div>
                </div>
                <div class="col-6 col-sm-2">
                    <div class="menu-footer">
                        <?php wp_nav_menu(array('theme_location' => 'footer-nav-right')) ?>
                      <!--  <ul>
                            <li><a href="">Your Surgeon</a> </li>
                            <li><a href="">Risk/Recovery</a> </li>
                            <li><a href="">Contact</a> </li>
                        </ul>-->
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
<?php wp_footer(); ?>
</body>
</html>
