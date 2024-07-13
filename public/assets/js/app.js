
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
$(".slick-cert").slick({
    dots:false,
    infinite: true,
    speed: 500,
    slidesToShow: 4,
    slidesToScroll: 1,
    appendArrows:  $(".certificate-arrow"),
    prevArrow:'<div class="prev-arrow"><img src="/assets/images/Arrow_right.svg" alt=""></div>',
    nextArrow:'<div class="next-arrow"><img src="/assets/images/Arrow_left.svg" alt=""></div>',
  });
  $(".slick-reviews").slick({
    dots:false,
    infinite: true,
    speed: 500,
    slidesToShow: 3,
    slidesToScroll: 1,
    appendArrows:  $(".reviews-arrow"),
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






const time = 3000;

function formatNumber(number) {
    return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
}

function animateNumber(element, num, step) {
    let n = 0;
    const t = Math.round(time / (num / step));
    const interval = setInterval(() => {
        n += step;
        if (n >= num) {
            clearInterval(interval);
            n = num;
        }
        if (element.id === 'number2') {
            element.innerHTML = formatNumber(n) + " +";
        } else {
            element.innerHTML = formatNumber(n);
        }
    }, t);
}

function onScroll() {
    const numbers = document.querySelectorAll('.number');
    const windowHeight = window.innerHeight;

    numbers.forEach(number => {
        const position = number.getBoundingClientRect().top;
        if (position < windowHeight && position > 0) {
            if (!number.classList.contains('animated')) {
                const num = parseInt(number.getAttribute('data-num'), 10);
                const step = parseInt(number.getAttribute('data-step'), 10);
                animateNumber(number, num, step);
                number.classList.add('animated');
            }
        }
    });
}

window.addEventListener('scroll', onScroll);
  // $(".slick-prev").slick-prev({
  //   type:boolean,
  //   default:false, 
  // })
  



  