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

$('.deliverable').click(function(){
    showModal();
})

$('.modal-overlay').click(function(){
    hideModal();
})

$('.close-btn').click(function(){
    hideModal();
})




function showModal(){
    $('.custom-modal').css('display', 'block');
    $('.modal-overlay').css('display', 'block');

    $( ".blur" ).css('filter', 'blur(10px)');
}

function hideModal(){
    $('.custom-modal').css('display', 'none');
    $('.modal-overlay').css('display', 'none');

    $( ".blur" ).css('filter', 'blur(0)');
}

