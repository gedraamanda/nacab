function openAtos(){document.getElementById("myDropdown").classList.toggle("show")}$(document).ready((function(){$(".toggal_btn").click((function(){$(".toggal_section").toggleClass("toggle_open")})),$(".toggal_btn").click((function(){$(".my_header").toggleClass("header_bg")}))})),$(document).ready((function(){if($(".home-sl")&&$(".home-sl").owlCarousel({loop:!0,margin:10,responsiveClass:!0,navText:["<img src='https://sitesupportplus.com/nacab/img/left_icon.svg'>","<img src='https://sitesupportplus.com/nacab/img/right_icon.svg'>"],responsive:{0:{items:1,nav:!0},400:{items:1,nav:!1},600:{items:2,nav:!1},1e3:{items:3,nav:!0,loop:!0,margin:20}}}),$(".estatuto-sl")&&$(".estatuto-sl").owlCarousel({loop:!0,margin:10,nav:!0,navText:["<img src='https://sitesupportplus.com/nacab/img/left_icon.svg'>","<img src='https://sitesupportplus.com/nacab/img/right_icon.svg'>"],responsiveClass:!0,responsive:{0:{items:1,nav:!0},400:{items:1,nav:!1},600:{items:1,nav:!1},1e3:{items:1,nav:!0,loop:!0,margin:20}}}),$(".mina-sl")&&$(".mina-sl").owlCarousel({loop:!0,margin:10,nav:!0,navText:["<img src='https://sitesupportplus.com/nacab/img/left_icon.svg'>","<img src='https://sitesupportplus.com/nacab/img/right_icon.svg'>"],responsiveClass:!0,responsive:{0:{items:1,nav:!0},400:{items:1,nav:!1},600:{items:2,nav:!1},1e3:{items:3,nav:!0,loop:!0,margin:20}}}),$("#sync1")){var e=$("#sync1"),t=$("#sync2");e.owlCarousel({items:1,slideSpeed:2e3,nav:!0,autoplay:!1,dots:!0,loop:!0,responsiveRefreshRate:200,navText:['<svg width="100%" height="100%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>','<svg width="100%" height="100%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>']}).on("changed.owl.carousel",(function(e){var s=e.item.count-1,o=Math.round(e.item.index-e.item.count/2-.5);o<0&&(o=s);o>s&&(o=0);t.find(".owl-item").removeClass("current").eq(o).addClass("current");var i=t.find(".owl-item.active").length-1,n=t.find(".owl-item.active").first().index(),a=t.find(".owl-item.active").last().index();o>a&&t.data("owl.carousel").to(o,100,!0);o<n&&t.data("owl.carousel").to(o-i,100,!0)})),t.on("initialized.owl.carousel",(function(){t.find(".owl-item").eq(0).addClass("current")})).owlCarousel({items:3,dots:!0,nav:!0,navText:["<img src='https://sitesupportplus.com/nacab/img/left_icon.svg'>","<img src='https://sitesupportplus.com/nacab/img/right_icon.svg'>"],smartSpeed:200,slideSpeed:500,slideBy:3,responsiveRefreshRate:100}).on("changed.owl.carousel",(function(t){if(null===t.relatedTarget){var s=t.item.index;e.data("owl.carousel").to(s,100,!0)}})),t.on("click",".owl-item",(function(t){t.preventDefault();var s=$(this).index();e.data("owl.carousel").to(s,300,!0)}))}}));