<?php
$title       = get_field( 'title' );
$slides      = get_field( 'slides' );
$cta_title   = get_field( 'call_to_action_title' );
$button_text = get_field( 'button_text' );
$button_link = get_field( 'button_url' );
$anchor      = get_field( 'anchor_id' );
?>

<div id="<?php echo esc_attr( $anchor ); ?>" class="block w-full pt-[31px] pb-[54px] md:pt-[74px] md:pb-[76px]">
    <div class="projects-title-container block w-full max-w-[529px] mx-auto">
        <?php echo wp_kses_post( $title ); ?>
    </div>

    <div class="projects-wrapper relative">
        <div class="projects swiper block">
            <div class="swiper-wrapper">
                <?php foreach ( $slides as $slide ) : ?>
                    <div class="swiper-slide pt-[142px] pb-[24px] px-[29px] rounded-[20px] bg-darker-marble relative">
                        <?php
                        echo wp_get_attachment_image( $slide['logo'], 'full', false, [
                            'class' => 'max-w-[100%] w-auto mb-[23px] absolute top-[24px] left-[29px]',
                        ] );
                        ?>

                        <strong class="mb-[10px] block w-full text-[24px] font-medium leading-none tracking-normal text-left text-black font-grotesk">
                            <?php echo esc_html( $slide['companytitle'] ); ?>
                        </strong>

                        <p class="block w-full text-[18px] font-normal leading-[1.89] tracking-normal text-left text-black/70 font-grotesk">
                            <?php echo esc_html( $slide['content'] ); ?>
                        </p>
                    </div>
                <?php endforeach; ?>

                <?php if ( count( $slides ) <= 3 ) : ?>
                    <?php foreach ( $slides as $slide ) : ?>
                        <div class="swiper-slide pt-[142px] pb-[24px] px-[29px] rounded-[20px] bg-darker-marble relative">
                            <?php
                            echo wp_get_attachment_image( $slide['logo'], 'full', false, [
                                'class' => 'max-w-[100%] w-auto mb-[23px] absolute top-[24px] left-[29px]',
                            ] );
                            ?>

                            <strong class="mb-[10px] block w-full text-[24px] font-medium leading-none tracking-normal text-left text-black font-grotesk">
                                <?php echo esc_html( $slide['companytitle'] ); ?>
                            </strong>

                            <p class="block w-full text-[18px] font-normal leading-[1.89] tracking-normal text-left text-black/70 font-grotesk">
                                <?php echo esc_html( $slide['content'] ); ?>
                            </p>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>

        <div class="swiper-button-next"><i class="fa-solid fa-chevron-right"></i></div>
        <div class="swiper-button-prev"><i class="fa-solid fa-chevron-left"></i></div>
    </div>

    <div class="block w-full text-center mt-[34px] md:mt-[20px]">
        <?php if ( ! empty( $cta_title ) ) : ?>
            <span class="cta-text block w-full text-[30px] mb-[14px] md:mb-[10px] font-normal md:leading-[2.33] tracking-[-0.6px] text-center text-paragraph font-grotesk">
                <?php echo esc_html( $cta_title ); ?>
            </span>

            <?php if ( ! empty( $button_text ) && ! empty( $button_link ) ) : ?>
                <a hef="<?php echo esc_url( $button_link ); ?>" class="button">
                    <?php echo esc_html( $button_text ); ?>
                </a>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</div>
