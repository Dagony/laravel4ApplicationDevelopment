$(window).load(function() {
    $('.flexslider').flexslider({
        animation: "slide",
        slideshow: false
    });

    $('.create-foldagram').click(function() {
        $('#createfoldagram').modal({
            keyboard: false
        });
    });
});