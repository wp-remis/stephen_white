<?php
/**
 * Registering ACF Gutenberg blocks.
 *
 * @package stephen_white
 */

if ( ! function_exists( 'stephen_white_acf_blocks' ) ) :
	/**
	 * Registers ACF blocks.
	 */
	function stephen_white_acf_blocks() {
        acf_register_block_type(
            array(
                'name'              => 'hero',
                'title'             => __( 'Hero', 'stephen_white' ),
                'description'       => __( 'Page hero block.', 'stephen_white' ),
                'render_template'   => get_template_directory() . '/template-parts/blocks/hero.php',
                'category'          => 'formatting',
                'icon'              => 'admin-comments',
                'keywords'          => array( 'hero' ),
                'supports'          => array(
                    'align'      => true,
                    'anchor'     => true,
                    'mode'       => true,
                    'jsx'        => true,
                ),
            )
        );

        acf_register_block_type(
            array(
                'name'              => 'text-with-image',
                'title'             => __( 'Text with image', 'stephen_white' ),
                'description'       => __( 'Text with image block.', 'stephen_white' ),
                'render_template'   => get_template_directory() . '/template-parts/blocks/text-with-image.php',
                'category'          => 'formatting',
                'icon'              => 'admin-comments',
                'keywords'          => array( 'text', 'image' ),
                'supports'          => array(
                    'align'      => true,
                    'anchor'     => true,
                    'mode'       => true,
                    'jsx'        => true,
                ),
            )
        );

        acf_register_block_type(
            array(
                'name'              => 'services',
                'title'             => __( 'Services', 'stephen_white' ),
                'description'       => __( 'Services block.', 'stephen_white' ),
                'render_template'   => get_template_directory() . '/template-parts/blocks/services.php',
                'category'          => 'formatting',
                'icon'              => 'admin-comments',
                'keywords'          => array( 'services' ),
                'supports'          => array(
                    'align'      => true,
                    'anchor'     => true,
                    'mode'       => true,
                    'jsx'        => true,
                ),
            )
        );

        acf_register_block_type(
            array(
                'name'              => 'partners',
                'title'             => __( 'Partners', 'stephen_white' ),
                'description'       => __( 'Partners block.', 'stephen_white' ),
                'render_template'   => get_template_directory() . '/template-parts/blocks/partners.php',
                'category'          => 'formatting',
                'icon'              => 'admin-comments',
                'keywords'          => array( 'partners' ),
                'supports'          => array(
                    'align'      => true,
                    'anchor'     => true,
                    'mode'       => true,
                    'jsx'        => true,
                ),
            )
        );

        acf_register_block_type(
            array(
                'name'              => 'gallery',
                'title'             => __( 'Gallery', 'stephen_white' ),
                'description'       => __( 'Gallery block.', 'stephen_white' ),
                'render_template'   => get_template_directory() . '/template-parts/blocks/gallery.php',
                'category'          => 'formatting',
                'icon'              => 'admin-comments',
                'keywords'          => array( 'gallery' ),
                'supports'          => array(
                    'align'      => true,
                    'anchor'     => true,
                    'mode'       => true,
                    'jsx'        => true,
                ),
            )
        );

        acf_register_block_type(
            array(
                'name'              => 'services',
                'title'             => __( 'Services', 'stephen_white' ),
                'description'       => __( 'Services block.', 'stephen_white' ),
                'render_template'   => get_template_directory() . '/template-parts/blocks/services.php',
                'category'          => 'formatting',
                'icon'              => 'admin-comments',
                'keywords'          => array( 'services' ),
                'supports'          => array(
                    'align'      => true,
                    'anchor'     => true,
                    'mode'       => true,
                    'jsx'        => true,
                ),
            )
        );

        acf_register_block_type(
            array(
                'name'              => 'projects',
                'title'             => __( 'Projects', 'stephen_white' ),
                'description'       => __( 'Projects block.', 'stephen_white' ),
                'render_template'   => get_template_directory() . '/template-parts/blocks/projects.php',
                'category'          => 'formatting',
                'icon'              => 'admin-comments',
                'keywords'          => array( 'projects' ),
                'supports'          => array(
                    'align'      => true,
                    'anchor'     => true,
                    'mode'       => true,
                    'jsx'        => true,
                ),
            )
        );
    }

    add_action( 'acf/init', 'stephen_white_acf_blocks' );
endif;
