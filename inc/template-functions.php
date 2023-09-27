<?php
if (function_exists('acf_register_block_type')) {
    add_action('acf/init', 'register_acf_block_types');
}

function register_acf_block_types()
{
    acf_register_block_type(
        array(
            'name' => 'Hero Section',
            'title' => __('Hero Section'),
            'render_template' => '/templates/blocks/hero-section.php',
            'icon' => 'block-default',
            'keywords' => array('hero section'),
        )
    );
    acf_register_block_type(
        array(
            'name' => 'About Section',
            'title' => __('About Section'),
            'render_template' => '/templates/blocks/about-section.php',
            'icon' => 'block-default',
            'keywords' => array('about section'),
        )
    );
    acf_register_block_type(
        array(
            'name' => 'Discover Section',
            'title' => __('Discover Section'),
            'render_template' => '/templates/blocks/discover-section.php',
            'icon' => 'block-default',
            'keywords' => array('discover section'),
        )
    );
    acf_register_block_type(
        array(
            'name' => 'Road Section',
            'title' => __('Road Section'),
            'render_template' => '/templates/blocks/road-section.php',
            'icon' => 'block-default',
            'keywords' => array('road section'),
        )
    );
    acf_register_block_type(
        array(
            'name' => 'Job Section',
            'title' => __('Job Section'),
            'render_template' => '/templates/blocks/job-section.php',
            'icon' => 'block-default',
            'keywords' => array('job section'),
        )
    );
    acf_register_block_type(
        array(
            'name' => 'Subscribe Section',
            'title' => __('Subscribe Section'),
            'render_template' => '/templates/blocks/subscribe-section.php',
            'icon' => 'block-default',
            'keywords' => array('subscribe section'),
        )
    );

}
?>