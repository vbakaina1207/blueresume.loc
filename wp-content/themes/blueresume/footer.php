<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blue_Resume
 */

?>

<footer>
    <div class="contact">
        <div id="Contacts"></div>
        <div class="contact__head">
            <h2>Contacts</h2>
        </div>
        <div class="contact__info">
            <?php if ( carbon_get_theme_option( 'footer_text' ) ) { ?>
                <div class="contact__info_text">
                    <?php echo carbon_get_theme_option( 'footer_text' ); ?>
                </div>
            <?php } ?>

            <div class="contact__info_link">
                <?php $data_social_links = carbon_get_theme_option( 'social_links' ); ?>
                <?php if ( ! empty( $data_social_links ) ): ?>
                    <?php foreach ( $data_social_links as $item_link ): ?>
                        <a href="<?php echo $item_link['social_link'] ?>" target="_blank"><span class="icon <?php echo $item_link['fonts_code'] ?>"></span></a>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="contact__form">
            <?php echo do_shortcode('[contact-form-7 id="23" title="Контактная форма 2"]');?>
            <!--
            <form>
                <div class="form-group-line">
                    <label class="form-label" for="in_name">Name</label>
                    <input type="text" class="form-input" id="in_name" placeholder="Incognito">
                </div>

                <div class="form-group-line">
                    <label class="form-label" for="in_email">E-mail</label>
                    <input type="email" class="form-input" id="in_email" placeholder="incognito@gmail.com">
                </div>

                <div class="form-group-line">
                    <label class="form-label" for="message">Message</label>
                    <textarea class="form-input" id="message" rows="3" placeholder="Your question or suggestion"></textarea>
                </div>

                <button type="submit" class="button-form">
                    <span class="icon ed-tl"></span>
                </button>
            </form>
            -->
        </div>
    </div>
    <div class="copyright">
        <div class="copyright__text">
            Copyright &copy; 2018 Denis Abdullin – deab.ru
        </div>
        <div class="copyright__link">
            <a href="#">Invoicing</a>
            <a href="#">Documents</a>
        </div>
    </div>
</footer>
<div class="contain-popup">
    <div class="popup">
        <div class="popup__close"></div>
        <div class="popup__head">
            <h3>
                Информационное сообщение
            </h3>
        </div>
        <div class="popup__text">
            Lorem ipsum dolor sit amet, consectetur adipisicing.
        </div>
    </div>
</div>
<div class="to__top">
    <div class="menu-item"><a href="#Top">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/top.svg" alt="img">
        </a>
    </div>
</div>

<?php wp_footer(); ?>

</body>
</html>
