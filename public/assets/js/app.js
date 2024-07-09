
$(".slick-carousel").slick({
    dots:false,
    infinite: true,
    speed: 500,
    slidesToShow: 4,
    slidesToScroll: 1,
    appendArrows:  $(".sales-arrow"),
    prevArrow:'<div class="prev-arrow"><img src="/assets/images/Arrow_right.svg" alt=""></div>',
    nextArrow:'<div class="next-arrow"><img src="/assets/images/Arrow_left.svg" alt=""></div>',
    
    

  });


  document.addEventListener('DOMContentLoaded', function () {
    const trigger = document.querySelector('.custom-trigger');
    const options = document.querySelector('.custom-options');
    const triggerImg = trigger.querySelector('img');

    trigger.addEventListener('click', function () {
        if (options.classList.contains('show')) {
            options.classList.remove('show');
            triggerImg.classList.remove('rotate');
            setTimeout(() => {
                options.style.display = 'none';
            }, 300);
        } else {
            options.style.display = 'block';
            setTimeout(() => {
                options.classList.add('show');
                triggerImg.classList.add('rotate');
            }, 10);
        }
    });

    document.addEventListener('click', function (event) {
        if (!trigger.contains(event.target) && !options.contains(event.target)) {
            options.classList.remove('show');
            triggerImg.classList.remove('rotate');
            setTimeout(() => {
                options.style.display = 'none';
            }, 300);
        }
    });
});



  // $(".slick-prev").slick-prev({
  //   type:boolean,
  //   default:false, 
  // })
  



  