document.addEventListener( 'DOMContentLoaded', function () {
    new Splide( '.splide', {
        type   : 'loop',
        focus  : 'center',
        autoplay: true,
        pauseOnHover: true,
        trimSpace: true,
        gap: '3em',
        // padding: '10rem',
    }     
    ).mount();
    
} );

