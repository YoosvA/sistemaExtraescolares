$(document).ready(function() {
    mascaraObloqueo();
});

function mascaraObloqueo() {
    $.blockUI({
        //Fondo Para Colocar Una Img De Loader ( Loader Spinner )
        message: ' <img src="../../img/ITMA II.png" width="300" height="300">',
        css: {
            border: 'none',
            // padding: '15px', 
            backgroundColor:'rgba(138,221,45,0)',
            '-webkit-border-radius': '10px',
            '-moz-border-radius': '10px',
            // opacity: .5, 
            color: '#000000 '
        }
    });

    setTimeout($.unblockUI, 800);
}