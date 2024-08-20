
wp.domReady(() => {

  
    wp.blocks.registerBlockStyle('core/heading',{
        name: 'headline',
        label: 'Style Headline'
    });

    wp.blocks.registerBlockStyle('core/media-text',{
        name: 'custom',
        label: 'Custom Style'
    });

   
    wp.blocks.unregisterBlockType('core/nextpage');

});
/*
wp.hooks.addFilter(
    'blocks.getSaveContent.extraProps',
    'lookup_theme/cover-no-srcset',
    function(extraProps, blockType, attributes) {
        if (blockType.name !== 'core/cover') {
            return extraProps;
        }
        extraProps.style = {
            ...extraProps.style,
            backgroundImage: `url(${attributes.url})`, 
        };
        return extraProps;
    }
);*/