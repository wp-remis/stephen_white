<?php
$side_image = get_field( 'side_image' );
$content    = get_field( 'content' );
$anchor     = get_field( 'anchor_id' );
?>

<div id="<?php echo esc_attr( $anchor ); ?>" class="about block max-width-[100vw] w-[100vw] overflow-hidden pt-[26px] pb-[29px] md:pt-[78px] md:pb-[74px] relative left-1/2 translate-x-[-50%] bg-darker-marble">
    <div class="container-small">
        <div class="md:flex md:gap-x-[45px] lg:gap-x-[90px]">
            <?php if ( ! empty( $side_image ) ) : ?>
                <div class="w-full md:w-[44.5%] mb-[21px] md:mb-[0px] aspect-[1/1] rounded-[15px] overflow-hidden">
                    <?php
                    echo wp_get_attachment_image( $side_image, 'full', false, [
                        'class' => 'w-full h-full object-cover',
                    ] );
                    ?>
                </div>
            <?php endif; ?>

            <div class="text-content w-full md:flex-1 lg:pt-[84px] lg:pb-[100px]">
                <?php echo wp_kses_post( $content ); ?>
            </div>
        </div>
    </div>
</div>
