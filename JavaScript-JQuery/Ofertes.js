$(".caixa").hover(
    function() {
        console.log("detecta entrada");

        $(this).animate({
            width: '+=30px',
            height: '+=30px'
        }, "fast");

//"filter", "brightness(50%)"
    },
    function() {
        console.log("detecta sortida");
        $(this).animate({
            width: '-=30px',
            height: '-=30px'
        }, "fast" );
    }
);