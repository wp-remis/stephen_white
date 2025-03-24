<?php
$content     = get_field( 'content' );
$button_text = get_field( 'button_text' );
$button_link = get_field( 'button_url' );
$partners    = get_field( 'partners_list' );
$anchor      = get_field( 'anchor_id' );
?>

<div id="<?php echo esc_attr( $anchor ); ?>" class="partners block max-width-[100vw] w-[100vw] overflow-hidden pt-[26px] pb-[29px] md:pt-[76px] md:pb-[75px] relative left-1/2 translate-x-[-50%] bg-darker-marble">
    <div class="container-small">
        <div class="md:flex md:gap-x-[45px] lg:gap-x-[105px]">
            <div class="text-content-spaced w-full md:flex-1 lg:pt-[99px] lg:pb-[91px] mb-[60px] md:mb-[0px]">
                <?php echo wp_kses_post( $content ); ?>

                <?php if ( ! empty( $button_text ) && ! empty( $button_link ) ) : ?>
                    <a href="<?php echo esc_url( $button_link ); ?>" class="button">
                        <?php echo esc_html( $button_text ); ?>
                    </a>
                <?php endif; ?>
            </div>

            <div class="w-full md:w-[50.65%] grid grid-cols-3 gap-x-[34px] gap-y-[25px] lg:gap-x-[58px] lg:gap-y-[42px]">
                <?php foreach ( $partners as $partner ) : ?>
                    <?php
                    $partner_logo = $partner['partner_logo'];
                    $partner_url  = $partner['partner_website'];
                    ?>

                    <div class="aspect-[1.714] flex items-center justify-center">
                        <?php if ( ! empty( $partner_url ) ) : ?>
                            <a href="<?php echo esc_url( $partner_url ); ?>" target="_blank" title="<?php echo esc_attr( $partner['partner_name'] ); ?>">
                                <?php
                                echo wp_get_attachment_image( $partner_logo, 'full', false, [
                                    'class' => 'max-h-full max-w-full object-contain',
                                ] );
                                ?>
                            </a>
                        <?php else : ?>
                            <?php
                            echo wp_get_attachment_image( $partner_logo, 'full', false, [
                                'class' => 'max-h-full max-w-full object-contain',
                            ] );
                            ?>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
