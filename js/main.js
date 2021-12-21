$(window).scroll(function(){
    if($(this).scrollTop() >=1000){
        // $('#top').fadeIn();
        $('#scrool-to-top').css({
            bottom: "20px",
        });
    }else{
        // $('#top').fadeOut(1000);
        $('#scrool-to-top').css({
        bottom: "-60px",
    });
    }
    
    });
    $('#scrool-to-top').click(function(){

    $('body,html').animate({
        scrollTop:0
    },0);
    });