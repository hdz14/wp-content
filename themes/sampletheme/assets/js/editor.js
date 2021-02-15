wp.blocks.registerBlockStyle( 
    'core/quote', 
    {
        name: 'fancy-quote',
        label: 'Fancy Quote',
    } 
);

wp.blocks.registerBlockStyle( 
    'core/button', 
    {
        name: 'fancy-button',
        label: 'Fancy Button',
    } 
);

wp.blocks.registerBlockStyle( 
    'core/button', 
    {
        name: 'blue-button',
        label: 'Blue Button',
    } 
);

wp.blocks.registerBlockStyle( 
    'core/heading', 
    {
        name: 'fancy-heading',
        label: 'Fancy Heading',
    } 
);

wp.blocks.registerBlockStyle( 
    'core/heading', 
    {
        name: 'blue-heading',
        label: 'Blue Heading',
    } 
);

wp.blocks.registerBlockStyle( 
    'core/image', 
    {
        name: 'fancy-image',
        label: 'Fancy Image',
    } 
);

wp.blocks.registerBlockStyle( 
    'core/paragraph', 
    {
        name: 'fancy-paragraph',
        label: 'Fancy Paragraph',
    } 
);

wp.blocks.registerBlockStyle( 
    'core/paragraph', 
    {
        name: 'smalltext-paragraph',
        label: 'Smalltext Paragraph',
    } 
);

wp.blocks.registerBlockStyle( 
    'core/columns', 
    {
        name: 'fancy-columns',
        label: 'Fancy Columns',
    } 
);


// wp.blocks.unregisterBlockStyle( 'core/quote', 'fancy-quote', 'fancy-heading', 'fancy-paragraph', 'fancy-image' );

wp.domReady( function() {
    // wp.blocks.unregisterBlockStyle( 'core/quote', 'default' );
    wp.blocks.unregisterBlockStyle( 'core/quote', 'large' );
} );