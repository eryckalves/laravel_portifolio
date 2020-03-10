$( document ).ready(function() {

    //menu-toggle navbar
    const selectElement = function(element)
    {
        return document.querySelector(element);
    }

    let menuToggler = selectElement('.menu-toggle');
    let body = selectElement('body');

    menuToggler.addEventListener('click', addToggle );

    function addToggle() {
            body.classList.toggle('open');
    }

    //scroll on click About US
    $("#contact").click(function (e){
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $(".footer").offset().top
        }, 500);
    });

    //scroll on click Gallery
    $("#gallery").click(function (e){
        var element = document.querySelector("#bodylaravel");
        var testClass = element.className;
        if(element.classList.contains(testClass))
        {
            body.classList.toggle('open');
        }
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $(".gallery-favorite").offset().top
        }, 500);
    });

    //scroll on click Tecnology
    $("#tecnology").click(function (e){
        var element = document.querySelector("#bodylaravel");
        var testClass = element.className;
        if(element.classList.contains(testClass))
        {
            body.classList.toggle('open');
        }
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $(".tecnology-used").offset().top
        }, 500);
    });

    //scroll on click Team
    $("#team").click(function (e){
        var element = document.querySelector("#bodylaravel");
        var testClass = element.className;
        if(element.classList.contains(testClass))
        {
            body.classList.toggle('open');
        }
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $(".team-our-ppl").offset().top
        }, 500);
    });

        //scroll on click Discovery
        $("#discovery").click(function (e){
            var element = document.querySelector("#bodylaravel");
            var testClass = element.className;
            if(element.classList.contains(testClass))
            {
                body.classList.toggle('open');
            }
            e.preventDefault();
            $('html, body').animate({
                scrollTop: $(".discovery").offset().top
            }, 500);
        });

    //scroll on click test
    $("#test").click(function (e){
        var element = document.querySelector("#bodylaravel");
        var testClass = element.className;
        if(element.classList.contains(testClass))
        {
            body.classList.toggle('open');
        }
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $(".tecnology-used").offset().top
        }, 500);
    });

        //scroll on click top
        $("#back-to-top").click(function (e){
            e.preventDefault();
            $('html, body').animate({
                scrollTop: $("#hero").offset().top
            }, 500);
        });

});


