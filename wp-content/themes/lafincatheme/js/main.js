$(document).ready(function() {
  // animaciones
  AOS.init();
  //arco de texto en el banner del home
  $(".arco").arctext({radius: 400});
  // carrusel de productos home
  var swiper = new Swiper('.carousel', {
    slidesPerView: 5,
    spaceBetween: 0,
    slidesPerGroup: 5,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      renderBullet: function (index, className) {
        return '<span class="' + className + '">' + (index + 1) + '</span>';
      },
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      640: {
        slidesPerView: 1,
        slidesPerGroup: 1,
        spaceBetween: 20
      },
      768: {
        slidesPerView: 2,
        slidesPerGroup: 2,
        spaceBetween: 40,
      },
      992: {
        slidesPerView: 3,
        slidesPerGroup: 3,
        spaceBetween: 40,
      },
      1200: {
        slidesPerView: 4,
        slidesPerGroup: 4,
        spaceBetween: 40,
      }
    }
  });
  // scroll down home
  var lastId,
  topMenu = $(".navbar-nav"),
  topMenuHeight = topMenu.outerHeight() + 100,
    // All list items
    menuItems = topMenu.find("a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function() {
      var item = $($(this).attr("href"));
      if (item.length) {
        return item;
      }
    });
    $(".navbar-nav a,.navbar-brand").click(function() {
      let href = $(this).attr('href');
      console.log(href);
      $('html, body').animate({
        scrollTop: $(href).offset().top - 100
      }, 500);
    });

    function scrollmenu(){
        // Get container scroll position
        var fromTop = $(this).scrollTop() + topMenuHeight;
        // Get id of current scroll item
        var cur = scrollItems.map(function() {
          if ($(this).offset().top < fromTop)
            return this;
        });
        // Get the id of the current element
        cur = cur[cur.length - 1];
        var id = cur && cur.length ? cur[0].id : "";

        if (lastId !== id) {
          lastId = id;
            // Set/remove active class
            menuItems
            .parent().removeClass("active")
            .end().filter("[href='#" + id + "']").parent().addClass("active");
          }
        }
        scrollmenu();
        $(window).scroll(function() {
          scrollmenu();
        });
  //movimiento parallax
  var object1=$('.uno');
  var layer=$('.move-parallax');
  layer.mousemove(function(e){
   var valueX=(e.pageX * -1 / 100); 
   var valueY=(e.pageY * -1 / 100); 

   object1.css({
    'transform':'translate3d('+valueX+'px,'+valueY+'px,0)'
  });
 });
});
