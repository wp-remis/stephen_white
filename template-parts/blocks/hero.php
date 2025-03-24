<?php
$hero_bg      = get_field( 'background_image' );
$hero_content = get_field( 'content' );
$button_text  = get_field( 'button_text' );
$button_link  = get_field( 'button_url' );
$anchor       = get_field( 'anchor_id' );
?>

<div id="<?php echo esc_attr( $anchor ); ?>" class="hero block w-[100vw] pt-[103px] pb-[168px] md:pt-[243px] md:pb-[188px] relative left-1/2 translate-x-[-50%]">
    <?php
    if ( ! empty( $hero_bg ) ) :
        echo wp_get_attachment_image( $hero_bg, 'full', false, [
            'class' => 'absolute inset-0 w-full h-full object-cover z-1',
        ] );
    endif;
    ?>

    <div class="container relative z-10">
        <div class="hero-content block w-full max-w-[636px]">
            <?php
            if ( ! empty( $hero_content ) ) :
                echo wp_kses_post( $hero_content );
            endif;
            ?>

            <?php if ( ! empty( $button_text ) && ! empty( $button_link ) ) : ?>
                <a hef="<?php echo esc_url( $button_link ); ?>" class="button">
                    <?php echo esc_html( $button_text ); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</div>
