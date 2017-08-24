$ = jQuery;
var $document = $(document);
$document.ready(function () {

    $document.scroll(function(){

        var y = $(this).scrollTop();
        if(y>170 && $document.width() > 1024)
        {
            $("#headlink").fadeIn();
        }
        else
        {
            $("#headlink").fadeOut();
        }
    });
});