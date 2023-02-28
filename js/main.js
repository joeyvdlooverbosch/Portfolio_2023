$('#darkSwitch').click(function(){

    if($('body').hasClass('dark-body')){
        $('body').removeClass('dark-body');
        $('.banner').removeClass('bg-dark');
    }
    else{
        $('body').addClass('dark-body');
        $('.banner').addClass('bg-dark');
    }
});

