<?php
$title    = get_field( 'title' );
$services = get_field( 'services' );
$anchor   = get_field( 'anchor_id' );
?>

<div id="<?php echo esc_attr( $anchor ); ?>" class="md:flex md:gap-[48px] w-full pt-[26px] pb-[46px] md:pt-[69px] md:pb-[62px]">
    <div class="w-full md:w-[270px] lg:w-[370px] md:shrink-0">
        <div class="sticky top-[100px]">
            <?php echo wp_kses_post( $title ); ?>

            <?php foreach ( $services as $key => $service ) : ?>
                <div class="sidebar-item hidden md:block">
                    <a href="/#<?php echo esc_attr( sanitize_title( $service['menu_title'] ) ); ?>" class="<?php echo 0 === $key ? 'active' : ''; ?>" data-target="<?php echo esc_attr( sanitize_title( $service['menu_title'] ) ); ?>"><?php echo esc_html( $service['menu_title'] ); ?></a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="flex-1">
        <?php foreach ( $services as $key => $service ) : ?>
            <div id="<?php echo esc_attr( sanitize_title( $service['menu_title'] ) ); ?>" class="service">
                <?php echo wp_get_attachment_image( $service['background_image'], 'medium', false, [ 'class' => 'desktop-bg absolute w-full h-full object-cover z-1 hidden md:block' ] ); ?>
                <?php echo wp_get_attachment_image( $service['background_image_mobile'], 'medium', false, [ 'class' => 'mobile-bg absolute w-full h-full object-cover z-1 md:hidden' ] ); ?>

                <div class="service-content">
                    <div class="service-text-container">
                        <?php echo wp_kses_post( $service['content'] ); ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
