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
            'name' => 'Show example Section',
            'title' => __('Show example Section'),
            'render_template' => '/templates/blocks/show-example-section.php',
            'icon' => 'block-default',
            'keywords' => array('show example section'),
        )
    );

}
?>