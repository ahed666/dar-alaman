// to get current year
// function getYear() {
//     var currentDate = new Date();
//     var currentYear = currentDate.getFullYear();
//     document.querySelector("#displayYear").innerHTML = currentYear;
// }

// getYear();

// Header carousel
$(".header-carousel").owlCarousel({
    autoplay: true,
    rtl: $("html").attr("dir") === "rtl", // Enable RTL if Arabic is selected

    smartSpeed: 1500,
    autoplayTimeout: 5000, // 3 seconds delay
    loop: true,
    nav: true,
    dots: false,
    items: 1,
    navText : [
        '<i class="bi bi-chevron-left"></i>',
        '<i class="bi bi-chevron-right"></i>'
    ]
});

// owl carousel slider js
var owl = $('.brands_carousel').owlCarousel({
    loop: false,
    margin: 15,
    center: true,
    startPosition: 2,
    autoplay: true,
    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    autoplayHoverPause: true,
    responsive: {
        0: {
            center: false,
            items: 2,
            margin: 10
        },
        769: {
            items: 3,
        },
        992: {
            center: true,
            items: 5
        }
    }
})


// owl.owlcarousel2_filter

$('.owl-filter-bar').on('click', '.item', function (e) {
    var $items = $('.owl-filter-bar a')
    var $item = $(this);
    var filter = $item.data('owl-filter')
    $items.removeClass("active");
    $item.addClass("active");
    owl.owlcarousel2_filter(filter);

    e.preventDefault();
})
