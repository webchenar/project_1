AOS.init();

$(window).scroll(function(){
    if($(this).scrollTop() >=1000){
        // $('#top').fadeIn();
        $('#scrool-to-top').css({
            bottom: "20px"
        });
    }else{
        // $('#top').fadeOut(1000);
        $('#scrool-to-top').css({
        bottom: "-60px"
    });
    }
    
    });
    $('#scrool-to-top').click(function(){

    $('body,html').animate({
        scrollTop:0
    },0);
    });


$(window).scroll(function(){
    if($(this).scrollTop() >=250){
        $('.fix-top').css({
            width:"100%",
            position: "sticky",
            zIndex:"2",
            top:0,
            backgroundColor:"#ededed1",
            transition:"all 2s",
  
        });
    }else{
        $('.fix-top').css({
           position:"unset"
    });
}
});


$('.owl-carousel').owlCarousel({
    rtl:true,
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        900:{
            items:2
        },
        1000:{
            items:3
        },
        1200:{
            items:4
        }
    }
})