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

$('.scroll-individual').click(function(){
    $('html, body').animate({
        scrollTop: $('.invidvidual-project-visual').offset().top
      }, 250);
});

$('.scroll-group').click(function(){
    $('html, body').animate({
        scrollTop: $('.group-scroll').offset().top
      }, 250);
});

$(".hamburger").click(function(){
    $(".custom-nav").fadeIn();
    $(".open").show();
});
$(".open").click(function(){
    $("#check").prop("checked", false);
    $(".custom-nav").fadeOut();
    $(".open").hide();
});


// // create a new URLSearchParams object using the current URL
// var urlParams = new URLSearchParams(window.location.search);

// // get the value of the 'project' parameter from the URL
// var project = urlParams.get('project');

// // if a project parameter is found in the URL, use it to load the corresponding JSON file
// if (project) {
//   $.getJSON("projects/" + project, function(data) {
//     // your existing code here
//   });
//   showModal();
// }

$(document).ready(function() {
    // check if the URL contains a project ID in the hash
    var hash = window.location.hash;
    var project = hash.substring(1);
  
    if (project) {
      // load the corresponding JSON file and display the modal
      $.getJSON("projects/" + project + ".json", function(data) {
         var preface = data.preface;
        var title = data.title;
        var sub_title = data.sub_title;
        var method = data.method;
        var research = data.research;
        var findings = data.findings;
        var findings_url = data.findings_url;
        var conclusion = data.conclusion;

        var sources = data.sources;
        var sourcesCount = sources.length;

        $(".sources-ul").empty();

        // iterate over the sources array and append <li> elements to the <ul>
        for (var i = 0; i < sourcesCount; i++) {
            var source = sources[i];
            var li = $("<li></li>");
            li.html(source.title + "  " + "<br><a href='" + source.url + "' target='_blank'>" + source.url + "</a>");
            $(".sources-ul").append(li);
        }

        $(".json-title").html(title);
        $(".json-subtitle").html(sub_title);
        $(".json-preface").html(preface);
        $(".json-method").html(method);
        $(".json-research-question").html(research);
        $(".json-findings").html(findings);
        $(".json-findings-url").attr("href", findings_url);
        $(".json-conclusion").html(conclusion);
        $('.row-scroll').scrollTop(0);
      });
      showModal();
    }
  });


$('.deliverable').click(function(){
    var project = $(this).attr('id');
   
    $.getJSON("projects/" + project, function(data) {
        var preface = data.preface;
        var title = data.title;
        var sub_title = data.sub_title;
        var method = data.method;
        var research = data.research;
        var findings = data.findings;
        var findings_url = data.findings_url;
        var conclusion = data.conclusion;

        var sources = data.sources;
        var sourcesCount = sources.length;

        $(".sources-ul").empty();

        // iterate over the sources array and append <li> elements to the <ul>
        for (var i = 0; i < sourcesCount; i++) {
            var source = sources[i];
            var li = $("<li></li>");
            li.html(source.title + "  " + "<br><a href='" + source.url + "' target='_blank'>" + source.url + "</a>");
            $(".sources-ul").append(li);
        }

        $(".json-title").html(title);
        $(".json-subtitle").html(sub_title);
        $(".json-preface").html(preface);
        $(".json-method").html(method);
        $(".json-research-question").html(research);
        $(".json-findings").html(findings);
        $(".json-findings-url").attr("href", findings_url);
        $(".json-conclusion").html(conclusion);
        $('.row-scroll').scrollTop(0);
    });
    showModal();
})



$('.modal-overlay').click(function(){
    hideModal();
})

$('.close-btn').click(function(){
    hideModal();
})

$(".scrollto").click(function(){
    $('#op').scrollIntoView({ 
        behavior: 'smooth' 
    });
})




function showModal(){

    $('html, body').css({
        overflow: 'hidden'
    });

    $('.custom-modal').css('display', 'block');
    $('.modal-overlay').css('display', 'block');

    $( ".blur" ).css('filter', 'blur(10px)');
}

function hideModal(){
       
    $('html, body').css({
        overflow: 'auto'
    });

    $('.custom-modal').css('display', 'none');
    $('.modal-overlay').css('display', 'none');

    $( ".blur" ).css('filter', 'blur(0)');
}

