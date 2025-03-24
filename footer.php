<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stephen_white
 */

$copyright        = get_field( 'copyright_text', 'option' );
$signature        = get_field( 'created_by_text', 'option' );
$contact_form     = get_field( 'contact_form_shortcode', 'option' );
$footer_bg        = get_field( 'footer_image', 'option' );
$footer_form_text = get_field( 'form-text', 'option' );
$person_photo     = get_field( 'persons_image', 'option' );
$person_name      = get_field( 'name', 'option' );
$person_position  = get_field( 'position', 'option' );
$person_email     = get_field( 'email', 'option' );
?>

	<footer class="block w-full relative">
        <?php
        if ( ! empty( $footer_bg ) ) :
            echo wp_get_attachment_image( $footer_bg, 'full', false, [
                'class' => 'absolute inset-0 w-full h-full object-cover object-top z-1',
            ] );
        endif;
        ?>

        <div class="block w-full pt-[37px] pb-[68px] md:pt-[216px] md:pb-[93px] relative z-5">
            <div class="container">
                <?php if ( ! empty( $contact_form ) ) : ?>
                    <div id="contacts" class="inline-block max-w-[790px] w-full md:bg-white md:rounded-[15px] md:shadow-form md:overflow-hidden">
                        <div class="md:flex">
                            <div class="w-full bg-white shadow-form md:shadow-none rounded-[15px] md:rounded-0 md:bg-transparent md:flex-1 pl-[28px] pr-[27px] pt-[24px] pb-[24px] md:pl-[48px] md:pr-[37px] md:pt-[38px] md:pb-[39px]">
                                <?php
                                if ( ! empty( $contact_form ) ) {
                                    echo do_shortcode( $contact_form );
                                }
                                ?>
                            </div>

                            <div class="w-full md:w-[40.76%] bg-marble rounded-[15px] md:rounded-[0px] md:border-l md:border-l-black/5 mt-[19px] md:mt-0 pt-[34px] pb-[36px] px-[12px] md:pt-[128px] md:pb-[64px]">
                                <?php if ( ! empty( $footer_form_text ) ) : ?>
                                    <div class="form-side-text">
                                        <?php echo wp_kses_post( $footer_form_text ); ?>
                                    </div>
                                <?php endif; ?>

                                <?php if ( ! empty( $person_photo ) ) : ?>
                                    <div class="w-full mb-[31px] flex justify-center">
                                        <?php
                                        echo wp_get_attachment_image( $person_photo, 'medium', false, [
                                            'class' => 'w-[146px] h-[146px] rounded-full object-cover',
                                        ] );
                                        ?>
                                    </div>
                                <?php endif; ?>

                                <?php if ( ! empty( $person_name ) ) : ?>
                                    <strong class="block w-full mb-[12px] text-[21px] font-bold leading-none text-center text-black font-grotesk">
                                        <?php echo esc_html( $person_name ); ?>
                                    </strong>
                                <?php endif; ?>

                                <?php if ( ! empty( $person_position ) ) : ?>
                                    <p class="block w-full mb-[12px] text-[16px] font-normal leading-none text-center text-light-gray font-grotesk">
                                        <?php echo esc_html( $person_position ); ?>
                                    </p>
                                <?php endif; ?>

                                <?php if ( ! empty( $person_email ) ) : ?>
                                    <a href="mailto:<?php echo esc_attr( $person_email ); ?>" class="block w-full text-[16px] font-normal leading-none text-center text-link-color hover:text-blue font-grotesk underline">
                                        <?php echo esc_html( $person_email ); ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="block w-full pt-[34px] pb-[27px] md:pb-[14px] backdrop-blur bg-black/70 relative z-5">
            <div class="container">
                <?php
                wp_nav_menu( array(
                    'theme_location'  => 'footer',
                    'container'       => 'nav',
                    'container_class' => 'w-full',
                    'menu_class'      => 'footer-navigation flex flex-wrap gap-x-[25px] md:gap-x-[35px] items-center justify-start',
                    'fallback_cb'     => false,
                ) );
                ?>

                <span class="block w-full h-px mt-[28px] mb-[12px] md:mt-[27px] md:mb-[30px] bg-white/12"></span>

                <div class="flex flex-wrap">
                    <div class="footer-col mb-[7px] md:mb-0"><?php echo sprintf( esc_html__( '© %s %s', ), gmdate( 'Y' ), esc_html( $copyright ) ); ?></div>

                    <?php if ( ! empty( $signature ) ) : ?>
                        <div class="footer-col md:text-right"><?php echo esc_html( $signature ); ?></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
