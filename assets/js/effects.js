$(document).on('click', '#goDown', function(){
    fullpage_api.moveSectionDown();
});

if ($(".subtitle").length == 1) { 
    var typed_strings = "Salesforce Developer, Web Developer"; 
    var typed = new Typed(".subtitle", { 
        strings: typed_strings.split(", "), 
        typeSpeed: 50, 
        loop: true, 
        backDelay: 900, 
        backSpeed: 30, 
    }); 
}
