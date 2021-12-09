document.addEventListener( 'DOMContentLoaded', function () {
    // new Splide( '.splide' ).mount();
    new Splide( '.splide', {
        type   : 'loop',
        focus  : 'center',
        autoplay: true,
        pauseOnHover: true,
        trimSpace: true,
        gap: '3em',
        fixedWidth: '1100px',
        // breakpoints: {
        //     640: {
        //         fixedHeight: 500,
        //     },
        // }

    }     
    ).mount();
    
} );

//check screen size 
//swap images

