$(document).ready(function () {
    $('.burger, .menu, .burger-background').click(function (event) {
        $('.burger, .menu, .burger-background').toggleClass('active');
    });
});

$(document).ready(function(){
    let position = 0;
    const container = $('.slider-container');

    let slidesToShow = 3;
    if(container.width() < 725 && container.width() > 500) {
        slidesToShow = 2;
    } else if (container.width() <= 500) {
        slidesToShow = 1;
    }

    const slidesToScroll = 1;
    const track = $('.slider-track');
    const item = $('.slider-item');
    const prev = $('.prev');
    const next = $('.next');
    const itemCount = item.length;
    const itemWidth = container.width() / slidesToShow;
    const movePosition = slidesToScroll * itemWidth;

    item.each(function (index, item) {
        $(item).css({
            minWidth: itemWidth,
        });
    });


    next.click(function (){
        const itemsLeft = itemCount - (Math.abs(position) + slidesToShow * itemWidth) / itemWidth;
        position -= itemsLeft >= slidesToScroll ? movePosition : itemsLeft * itemWidth;
        setPosition();
        checkButtons();
    });

    prev.click(function (){
        const itemsLeft = Math.abs(position) / itemWidth;
        position += itemsLeft >= slidesToScroll ? movePosition : itemsLeft * itemWidth;
        setPosition();
        checkButtons();
    });

    const setPosition = () => {
        track.css({
            transform: `translateX(${position}px)`
        });
    };

    const checkButtons = () => {
        prev.prop('disabled', position === 0);
        next.prop('disabled', position <= -(itemCount - slidesToShow) * itemWidth);
    };

    checkButtons();
});

$(document).ready(function () {
    $('.gallery-button').click(function (event) {
        $(this).toggleClass('opened').next().toggleClass('opened').slideToggle(300);
    });
});
