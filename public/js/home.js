$( document ).ready(function() {

    //Scroll reveal
    window.sr = ScrollReveal({ reset: true });
    //console.log(sr);
    sr.reveal('.animate-left',
    {
        origin:'left',
        duration: 1000,
        distance: '20rem',
        delay: 300
    });

    sr.reveal('.animate-right',
    {
        origin:'right',
        duration: 1000,
        distance: '20rem',
        delay: 600
    });

    sr.reveal('.animate-top',
    {
        origin:'top',
        duration: 1000,
        distance: '20rem',
        delay: 600
    });

    sr.reveal('.animate-bottom',
    {
        origin:'bottom',
        duration: 1000,
        distance: '20rem',
        delay: 600
    });

    sr.reveal('.animate-chart-left',
    {
        origin:'left',
        duration: 1000,
        distance: '20rem',
        delay: 300,
        beforeReveal: chartleft
    });

    sr.reveal('.animate-chart-right',
    {
        origin:'left',
        duration: 1000,
        distance: '20rem',
        delay: 300,
        beforeReveal: chartright
    });


    //scroll on click About US
    $("#aboutUs, #socialMedia").click(function (e){
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $(".footer").offset().top
        }, 500);
    });

    //scroll on click Gallery
    $("#gallery").click(function (e){
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $(".gallery-favorite").offset().top
        }, 500);
    });

    //scroll on click Tecnology
    $("#tecnology").click(function (e){
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $(".tecnology-used").offset().top
        }, 500);
    });

    //scroll on click Team
    $("#team").click(function (e){
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $(".team-our-ppl").offset().top
        }, 500);
    });

    //scroll on click discovery
    $("#discovery").click(function (e){
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $(".discovery").offset().top
        }, 500);
    });

    //scroll on click test
    $("#test").click(function (e){
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $(".test").offset().top
        }, 500);
    });


    //chart 1

    function chartleft () {
      //console.log('teste')
      var ctx = document.getElementById('myChart').getContext('2d');
      var myChart = new Chart(ctx, {
          type: 'pie',
          data: {
          labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
          datasets: [{
              label: "Population (millions)",
              backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
              data: [2478,5267,734,784,433]
          }]
          },
          options: {
              animation:
            {
                  duration:3000,
                  easing: 'easeInOutQuint'
            },
              title: 
              {
                  display: true,
                  text: 'Chart Type Pie'
              }
          }
      });
    }

    

    //chart 2
    function chartright () {
      var horizontal = document.getElementById('myChartHorizontal').getContext('2d');
      var myChartHorizontal = new Chart(horizontal, {
          type: 'line',
          data: {
            labels: [1500,1600,1700,1750,1800,1850,1900,1950,1999,2050],
            datasets: [{ 
                data: [86,114,106,106,107,111,133,221,783,2478],
                label: "Africa",
                borderColor: "#3e95cd",
                fill: false
              }, { 
                data: [282,350,411,502,635,809,947,1402,3700,5267],
                label: "Asia",
                borderColor: "#8e5ea2",
                fill: false
              }, { 
                data: [168,170,178,190,203,276,408,547,675,734],
                label: "Europe",
                borderColor: "#3cba9f",
                fill: false
              }, { 
                data: [40,20,10,16,24,38,74,167,508,784],
                label: "Latin America",
                borderColor: "#e8c3b9",
                fill: false
              }, { 
                data: [6,3,2,2,7,26,82,172,312,433],
                label: "North America",
                borderColor: "#c45850",
                fill: false
              }
            ]
          },
          options: {
            animation:
            {
              duration:3000,
              easing: 'easeInOutQuint'
            },
            title: {
              display: true,
              text: 'Chart Type Line'
            }
          }
      });
    }


    //SWIPER

    var swiper = new Swiper('.swiper-container', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        loop: true,
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 700,
          modifier: 1,
          slideShadows : true,
        },
        pagination: {
          el: '.swiper-pagination',
        },
      });

});
