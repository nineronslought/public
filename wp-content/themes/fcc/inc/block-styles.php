<?php
/* Add Styles to Paragraphs */
if ( function_exists( 'register_block_style' ) ) {

    /* PARAGRAPHS */
    register_block_style(
        'core/paragraph',
        array(
            'name'         => 'lead',
            'label'        => __( 'Lead', 'textdomain' ),
            'is_default'   => false,
            'inline_style' => '.lead',
        ),
    );
    register_block_style(
        'core/paragraph',
        array(
            'name'         => 'eyebrow',
            'label'        => __( 'Eyebrow', 'textdomain' ),
            'is_default'   => false,
            'inline_style' => '.eyebrow',
        ),
    );
    register_block_style(
        'core/paragraph',
        array(
            'name'         => 'max-width',
            'label'        => __( 'Max Width', 'textdomain' ),
            'is_default'   => false,
            'inline_style' => '.max-width',
        ),
    );
    register_block_style(
        'core/paragraph',
        array(
            'name'         => 'callout',
            'label'        => __( 'Callout', 'textdomain' ),
            'is_default'   => false,
            'inline_style' => '.callout',
        ),
    );
    register_block_style(
        'core/paragraph',
        array(
            'name'         => 'loud',
            'label'        => __( 'Loud', 'textdomain' ),
            'is_default'   => false,
            'inline_style' => '.loud',
        ),
    );
    /* BUTTONS */
    register_block_style(
        'core/button',
        array(
            'name'         => 'btn-text',
            'label'        => __( 'Text Link', 'textdomain' ),
            'is_default'   => false,
            'inline_style' => '.btn-text',
        ),
    );
    register_block_style(
        'core/button',
        array(
            'name'         => 'btn-secondary',
            'label'        => __( 'Secondary', 'textdomain' ),
            'is_default'   => false,
            'inline_style' => '.btn-secondary',
        ),
    );
    /* Group BACKGROUNDS */
    register_block_style(
        'core/group',
        array(
            'name'         => 'bkg-light',
            'label'        => __( 'White', 'textdomain' ),
            'is_default'   => false,
            'inline_style' => '.bkg-light',
        ),
    );
    
    /* LIST STYLES */
    register_block_style(
        'core/list',
        array(
            'name'         => 'linklist',
            'label'        => __( 'Link List', 'textdomain' ),
            'is_default'   => false,
            'inline_style' => '.is-style-linklist',
        ),
    );
    register_block_style(
        'core/list',
        array(
            'name'         => 'two-col',
            'label'        => __( 'Two Col', 'textdomain' ),
            'is_default'   => false,
            'inline_style' => '.two-col',
        ),
    );
    /* COLUMNS */
    register_block_style(
        'core/columns',
        array(
            'name'         => 'small-margin',
            'label'        => __( 'Small Margin', 'textdomain' ),
            'is_default'   => false,
            'inline_style' => '.small-margin',
        ),
    );
    register_block_style(
        'core/columns',
        array(
            'name'         => 'large-gap',
            'label'        => __( 'Large gap', 'textdomain' ),
            'is_default'   => false,
            'inline_style' => '.large-gap',
        ),
    );
    register_block_style(
        'core/image',
        array(
            'name'         => 'bkg-texture',
            'label'        => __( 'Bkg Texture', 'textdomain' ),
            'is_default'   => false,
            'inline_style' => '.bkg-texture',
        ),
    );
}

?>