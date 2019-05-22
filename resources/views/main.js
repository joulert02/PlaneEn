$('document').ready(function(){
    $('.item1').on('click',function(e){
        // e.preventDefault();
        if (!$(this).hasClass('active')) {
            $(this).addClass('active');
            $('.item2').removeClass('active');
        }
       
    });
    $('.item2').on('click',function(e){
        // e.preventDefault();
        if (!$(this).hasClass('active')) {
            $(this).addClass('active');
            $('.item1').removeClass('active');
        }
    });
});