$(document).ready(function(){
    const menu = $(".menuHamburguer");
    const nav = $(".menu")
     const body = $('body')
     const main = $('main')
    menu.on("click", function(){
        if(nav.hasClass("hide")){
            nav.removeClass("hide").addClass("show");
            body.addClass("no-scroll");
           
            

        }
    })
    $(document).click(function(event) {
        if (!$(event.target).closest('.menu').length && !$(event.target).closest('.menuHamburguer').length) {
          $('.menu').removeClass('show').addClass("hide");
          body.removeClass("no-scroll");
          
          

        }
      });
})

