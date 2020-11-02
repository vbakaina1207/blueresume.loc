<?php
/*
Template Name: Main Page
*/
?>
<?php get_header() ?>
<div class="line">
    <header>
        <div class="top__line">
            <div class="top__line_left">
                <div class="top__line_left-menu">
                    <ul>
                        <?php $data_line_left_menu = carbon_get_post_meta( get_the_ID(), 'main_left_menu' ); ?>
                        <?php foreach ( $data_line_left_menu as $item_link ): ?>
                        <li><a class="scroll-to" href="<?php echo $item_link['left_menu_link'] ?>"><?php echo $item_link['left_menu'] ?></a></li>
                        <?php endforeach; ?>

<!--                        <li><a class="scroll-to" href="#Works">Works</a></li>-->
<!--                        <li><a class="scroll-to" href="#About">About</a></li>-->
                    </ul>
                </div>
            </div>
            <div class="top__line_center">
                <?php if ( carbon_get_theme_option( 'logo_image' ) ) { ?>
                    <div class="top__line_center-logo">
                        <a href="<?php get_home_url();?>"><img src="<?php echo carbon_get_theme_option( 'logo_image' ); ?>" alt="img"></a>
                    </div>
                <?php } ?>
            </div>
            <div class="top__line_right">
                <div class="top__line_right-menu">
                    <ul>
                        <?php $data_line_right_menu = carbon_get_post_meta( get_the_ID(), 'right_main_menu' ); ?>
                        <?php foreach ( $data_line_right_menu as $item_link ): ?>
                            <li><a class="scroll-to" href="<?php echo $item_link['right_menu_link'] ?>"><?php echo $item_link['right_menu'] ?></a></li>
                        <?php endforeach; ?>
<!--                        <li><a class="scroll-to" href="#Links">Links</a></li>-->
<!--                        <li><a class="scroll-to" href="#Contacts">Contacts</a></li>-->
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div id="button_mobile__menu" class="mobile__menu"></div>
    <div id="block_mobile__menu" class="mobile__block">
        <ul>
            <?php $data_line_left_menu = carbon_get_post_meta( get_the_ID(), 'main_left_menu' ); ?>
            <?php foreach ( $data_line_left_menu as $item_link ): ?>
                <li><a class="scroll-to" href="<?php echo $item_link['left_menu_link'] ?>"><?php echo $item_link['left_menu'] ?></a></li>
            <?php endforeach; ?>

            <?php $data_line_right_menu = carbon_get_post_meta( get_the_ID(), 'right_main_menu' ); ?>
            <?php foreach ( $data_line_right_menu as $item_link ): ?>
                <li><a class="scroll-to" href="<?php echo $item_link['right_menu_link'] ?>"><?php echo $item_link['right_menu'] ?></a></li>
            <?php endforeach; ?>
<!--            <li><a class="scroll-to" href="#Works">Works</a></li>
            <li><a class="scroll-to" href="#About">About</a></li>
            <li><a class="scroll-to" href="#Links">Links</a></li>
            <li><a class="scroll-to" href="#Contacts">Contacts</a></li>
-->
        </ul>
    </div>
    <section>

        <?php if ( carbon_get_post_meta( get_the_ID(), 'main-slag' ) ) { ?>
            <div class="main__slogan">
                    <div class="main__slogan_head">
                        <h1><?php echo carbon_get_post_meta( get_the_ID(), 'main-slag' ); ?></h1>
                    </div>
            </div>
            <?php } ?>
<!--            <div class="main__slogan_head">-->
<!--                <h1>Motivation Is The First Step To <span>Success</span></h1>-->
<!--            </div>-->

        <div class="social__line">
            <?php $data_social_links = carbon_get_theme_option( 'social_links' ); ?>
            <?php if ( ! empty( $data_social_links ) ): ?>
                <?php foreach ( $data_social_links as $item_link ): ?>
                    <a href="<?php echo $item_link['social_link'] ?>" target="_blank"><span class="icon <?php echo $item_link['fonts_code'] ?>"></span></a>
                <?php endforeach; ?>
            <?php endif; ?>
<!--            <a href="#" target="_blank"><span class="icon ed-fb"></span></a>-->
<!--            <a href="#" target="_blank"><span class="icon ed-in"></span></a>-->
        </div>
    </section>

    <section>
        <div id="Works"></div>
        <div class="works">
            <div class="works__head">
                <h2>Works</h2>
            </div>
            <div class="works__left">
                <?php $data_works_left = carbon_get_post_meta( get_the_ID(),'works_left' ); ?>
                <?php foreach ( $data_works_left as $item_link ): ?>
                <div class="project" style="background-image: url(<?php echo get_template_directory_uri();?><?php echo $item_link['works_left_img'] ?>);">
               <?php if ( ! empty( $item_link['works_left_link'] ) ): ?>
                <div class="project__links">
                        <a href="<?php echo $item_link['works_left_link'] ?>" target="_blank"><?php echo $item_link['works_left_link_name'] ?></a>
                    </div>
               <?php endif; ?>
                    <div class="project__text">
                        <?php echo $item_link['works_left_text'] ?>
                    </div>
 <!--                  <div class="project__links">
                        <a href="#" target="_blank">Featured</a>
                    </div>
                    <div class="project__text">
                        Motivation Is The First Step To Success
                    </div>
                    -->
                </div>
                <?php endforeach; ?>

                <!--         <div class="project" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/img_2.webp);">
                    <div class="project__text">
                        Benjamin Franklin S Method Of Habit Formation
                    </div>
                </div>
                -->
            </div>
            <div class="works__right">
                
                <?php $data_works_right = carbon_get_post_meta( get_the_ID(),'works_right' ); ?>
                <?php foreach ( $data_works_right as $item_link ): ?>
                <div class="project" style="background-image: url(<?php echo get_template_directory_uri();?><?php echo $item_link['works_right_img'] ?>);">
                    <?php if ( ! empty( $item_link['works_right_link'] ) ): ?>
                    <div class="project__links">
                        <a href="<?php echo $item_link['works_right_link'] ?>" target="_blank"><?php echo $item_link['works_right_link_name'] ?></a>
                    </div>
                    <?php endif; ?>
                    <div class="project__text">
                        <?php echo $item_link['works_right_text'] ?>I
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

    </section>
    <section>
        <div id="About"></div>
        <div class="about">
            <div class="about__head">
                <h2>About</h2>
            </div>
            <?php $data_about__info = carbon_get_post_meta( get_the_ID(), 'about__info' ); ?>
            <?php foreach ( $data_about__info as $item_link ): ?>
            <div class="about__info">
                <div class="about__info_head">
                    <h3><?php echo $item_link['about__info_head'] ?></h3>
                </div>
                <div class="about__info_text myClass">
                    <?php echo $item_link['about__info_text'] ?>
                </div>
            </div>
            <?php endforeach; ?>
<!--            <div class="about__info">
                <div class="about__info_head">
                    <h3>UX/UI</h3>
                </div>
                <div class="about__info_text myClass">
                    Of course, motivation really isn’t <a href="#" target="_blank">simple at all</a>. That is why there is multi-billion industry focused on self-help books, tapes, seminars, camps, and coaches.
                </div>
            </div>
            <div class="about__info">
                <div class="about__info_head">
                    <h3 id="Motion">Motion</h3>
                </div>
                <div class="about__info_text myClass">
                    As humans, we have progressed in so many ways, but we have lost touch with our bodies, nature, and the power of prayer. There seems to be a spiritual renaissance, of sorts, going on in the
                    “new age” movement.
                </div>
            </div>
            <div class="about__info">
                <div class="about__info_head">
                    <h3>Branding</h3>
                </div>
                <div class="about__info_text myClass">
                    If at anytime, you notice that a friend of yours is getting demotivated about life, try to inspire him/her as much as you can. Even if you are physically away from your friend you can send
                    him inspirational ecards and tell him to download motivational screensavers and wallpapers. So motivate everyone who needs the boost.
                </div>
            </div>
            <div class="about__info">
                <div class="about__info_head">
                    <h3>Development</h3>
                </div>
                <div class="about__info_text myClass">
                    Personally, the importance does not lie in what religion you are; however, a lack of religion does seem to run parallel with depression. This is classified as spiritual illness, which will
                    have a negative effect on you mentally, physically, or totally.
                </div>
            </div>
            -->
        </div>
    </section>
    <section>
        <div id="Links"></div>
        <div class="links">
            <div class="links__head">
                <h2>Links</h2>
            </div>
        </div>
    </section>
    <span class="line-1"></span>
    <span class="line-2"></span>
    <span class="line-3"></span>
    <span class="line-4"></span>
    <span class="line-5"></span>
</div>
<?php get_footer() ?>
