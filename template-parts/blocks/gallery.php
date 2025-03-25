<?php
$title  = get_field( 'title' );
$images = get_field( 'images' );
$anchor = get_field( 'anchor_id' );
?>

<div id="<?php echo esc_attr( $anchor ); ?>" class="gallery block w-full pt-[34px] pb-[47px] md:pt-[70px] md:pb-[48px]">
    <div class="block w-full gallery-title-container">
        <?php echo wp_kses_post( $title ); ?>

        <?php if ( $images ) : ?>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-[21px] aspect-[1.926]">
                <div class="flex flex-col gap-[21px]">
                    <?php if ( !empty( $images[0] ) ) : ?>
                        <div class="aspect-[1.458] gallery-image">
                            <?php echo wp_get_attachment_image( $images[0]['background_image'], 'medium', false, [ 'class' => 'w-full h-full object-cover brightness-130' ] ); ?>

                            <div class="gallery-image-content">
                                <img src="<?php echo esc_url( $images[0]['icon'] ); ?>" class="mb-[10px] md:mb-[7px]" alt="<?php echo esc_attr( $images[0]['icon_alt'] ); ?>" />

                                <?php echo wp_kses_post( $images[0]['text'] ); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if ( !empty( $images[1] ) ) : ?>
                        <div class="aspect-[1.124] gallery-image">
                            <?php echo wp_get_attachment_image( $images[1]['background_image'], 'medium', false, [ 'class' => 'w-full h-full object-cover brightness-130' ] ); ?>

                            <div class="gallery-image-content">
                                <img src="<?php echo esc_url( $images[1]['icon'] ); ?>" class="mb-[10px] md:mb-[7px]" alt="<?php echo esc_attr( $images[1]['icon_alt'] ); ?>" />

                                <?php echo wp_kses_post( $images[1]['text'] ); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>

                <div>
                    <?php if ( !empty( $images[2] ) ) : ?>
                        <div class="h-full gallery-image">
                            <?php echo wp_get_attachment_image( $images[2]['background_image'], 'large', false, [ 'class' => 'w-full h-full object-cover brightness-130' ] ); ?>

                            <div class="gallery-image-content">
                                <img src="<?php echo esc_url( $images[2]['icon'] ); ?>" class="mb-[10px] md:mb-[7px]" alt="<?php echo esc_attr( $images[2]['icon_alt'] ); ?>" />

                                <?php echo wp_kses_post( $images[2]['text'] ); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="flex flex-col gap-[21px]">
                    <?php if ( !empty( $images[3] ) ) : ?>
                        <div class="aspect-[1.128] gallery-image">
                            <?php echo wp_get_attachment_image( $images[3]['background_image'], 'medium', false, [ 'class' => 'w-full h-full object-cover brightness-130' ] ); ?>

                            <div class="gallery-image-content">
                                <img src="<?php echo esc_url( $images[3]['icon'] ); ?>" class="mb-[10px] md:mb-[7px]" alt="<?php echo esc_attr( $images[3]['icon_alt'] ); ?>" />

                                <?php echo wp_kses_post( $images[3]['text'] ); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if ( !empty( $images[4] ) ) : ?>
                        <div class="aspect-[1.460] gallery-image">
                            <?php echo wp_get_attachment_image( $images[4]['background_image'], 'medium', false, [ 'class' => 'w-full h-full object-cover brightness-130' ] ); ?>

                            <div class="gallery-image-content">
                                <img src="<?php echo esc_url( $images[4]['icon'] ); ?>" class="mb-[10px] md:mb-[7px]" alt="<?php echo esc_attr( $images[4]['icon_alt'] ); ?>" />

                                <?php echo wp_kses_post( $images[4]['text'] ); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>

    </div>
</div>
