<div class="container">
        <div id="contacts" class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
            <ul>
                <li>
                    <a href="https://www.facebook.com/marta.kichura">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span class="fab fa-facebook-f"></span>
                    </a>
                </li>
                <li>
                    <a href="https://instagram.com/marta.kichura_ph?igshid=6suho9vhw3z3">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span class="fab fa-instagram"></span>
                    </a>
                </li>
                <li>
                    <a href="mailto:martakichura@gmail.com">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span><i class="fab fa-google"></i></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
<div class="form-section container">
    <h5>Залишити заявку</h5>
    <p>Залиште заявку і я зв'яжуся з Вами протягом найближчого часу!</p>
        <form class="send-form">
            <?php echo do_shortcode('[contact-form-7 id="237" title="Contacts"]') ?>
        </form>
    </div>
<div class="sub-footer">
    <div class="container">
        <footer>
            <p>
                Сайт Марти Кічури. Всі права захищено. Львів
                <br>
                <a href="tel:+380979876532">+38 (097) 987 65 32</a>
                <br>
                <a href="mailto:martakichura@gmail.com">martakichura@gmail.com</a>
                <br>
            </p>
            <a href="#top" class="smooth" id="scrollUp"><i class="fas fa-arrow-circle-up"></i></a>
        </footer>
    </div>
</div>


<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>

<!--Bootstrap library and init carousel-->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
<script>
    $('.carousel').carousel();
</script>
<!--END Bootstrap library and init carousel-->

<!--Tilt plugin for animate persinal photo-card-->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/tilt.jquery.js"></script>
<script>
    $(document).ready(function () {
        $('.team-card').tilt({
            maxTilt: 10,
            glare: true,
            maxGlare: 0.4
        })
    });
</script>
<!--END Tilt plugin for animate persinal photo-card-->

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/scroll-nav.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/mansoryGridComments.js"></script>
<?php wp_footer(); ?>
</body>
</html>
