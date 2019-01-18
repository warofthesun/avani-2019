(function( $ ) {
    "use strict";
    wp.customize( 'banner_image', function( value ) {
        value.bind( function( to ) {
            $( '.baner-section' ).css( 'background-image', 'url( ' + to + ')' );
        } );
    });
})( jQuery );