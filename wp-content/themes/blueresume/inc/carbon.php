<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
    Container::make( 'theme_options', ( 'Theme Options' ) )
        ->add_fields( array(
            Field::make( 'image', 'logo_image', ( 'Logo' ) )
                ->set_value_type( 'url' ),
            Field::make( 'complex', 'social_links', ( 'Social Links' ) )
                ->add_fields( array(
                    Field::make( 'text', 'fonts_code', ( 'Код шрифта' ) ),
                    Field::make( 'text', 'social_link', __( 'Ссылка на сеть' ) ),
                ) ),
            Field::make( 'textarea', 'footer_text', __( 'Текст в футере' ) )

        ) );

    Container::make( 'post_meta', 'main-page', __( 'Содержимое Прайс', 'blueresume' ) )
        ->where( 'post_type', '=', 'page' )
        ->where( 'post_template', '=', 'main-page.php' )
        ->add_fields( array(
            Field::make( 'text', 'main-slag', __( 'Заголовок страницы', 'blueresume' ) )
                ->set_required( true ),
  /*          Field::make( 'text', 'main-left-menu', __( 'Левое меню', 'blueresume' ) )
                ->set_required( true ),
            Field::make( 'text', 'main-right-menu', __( 'Прпавое меню', 'blueresume' ) )
                ->set_required( true ),

                ) )*/
            Field::make( 'complex', 'main_left_menu', ( 'Left Main menu') )
                ->add_fields( array(
                    Field::make( 'text', 'left_menu', __( 'Левое меню' ) ),
                    Field::make( 'text', 'left_menu_link', __( 'Ссылка меню' ) )
                        ->set_required( true ),
                ) ),
            Field::make( 'complex', 'right_main_menu', ( 'Right Main menu') )
                 ->add_fields( array(
                      Field::make( 'text', 'right_menu', __( 'Правое меню' ) ),
                      Field::make( 'text', 'right_menu_link', __( 'Ссылка правого меню' ) )
                           ->set_required( true ),
                ) ),

            Field::make( 'complex', 'copyright_links', ( 'copyright link') )
                ->add_fields( array(
                    Field::make( 'text', 'copyright_text', __( 'Копирайт' ) ),
                    Field::make( 'text', 'copyright_link', __( 'Ссылка копирайт' ) )
                        ->set_required( true ),
                ) ),

            Field::make( 'text', 'copyright', __( 'Копирайт', 'blueresume' ) )
                ->set_required( true ),

            Field::make( 'complex', 'about__info', ( 'about info') )
                ->add_fields( array(
                    Field::make( 'text', 'about__info_head', __( 'Заголовок Инфо' ) ),
                    Field::make( 'textarea', 'about__info_text', __( 'Текст инфо' ) )
                        ->set_required( true ),
                ) ),

            Field::make( 'complex', 'works_left', ( 'works left') )
                ->add_fields( array(
                    Field::make( 'text', 'works_left_img', __( 'Изображение' ) ),
                    Field::make( 'text', 'works_left_link', __( 'Ссылка' ) ),
                    Field::make( 'text', 'works_left_link_name', __( 'Имя ссылки' ) ),
                    Field::make( 'text', 'works_left_text', __( 'Текст' ) )
                        ->set_required( true ),
                ) ),

            Field::make( 'complex', 'works_right', ( 'works right') )
                ->add_fields( array(
                    Field::make( 'text', 'works_right_img', __( 'Изображение' ) ),
                    Field::make( 'text', 'works_right_link', __( 'Ссылка' ) ),
                    Field::make( 'text', 'works_right_link_name', __( 'Имя ссылки' ) ),
                    Field::make( 'text', 'works_right_text', __( 'Текст' ) )
                        ->set_required( true ),
                ) ),
        ) );
}

