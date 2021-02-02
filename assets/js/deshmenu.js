$('.menu').on("click",'.single-menu', function(){
    var numberIndex = $(this).index();

    if(!$(this).is("active")){
        $(".menu .single-menu").removeClass("active");
        $(".content-area .content").removeClass("active");

        $(this).addClass("active");
        $(".content-area").find(".content:eq(" + numberIndex + ")").addClass("active");
    }
});