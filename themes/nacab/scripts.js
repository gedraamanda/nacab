function openCity(e,s){var t,i,o;for(i=document.getElementsByClassName("tabcontent"),t=0;t<i.length;t++)i[t].style.display="none";for(o=document.getElementsByClassName("tablinks"),t=0;t<o.length;t++)o[t].className=o[t].className.replace(" active","");document.getElementById(s).style.display="block",e.currentTarget.className+=" active"}$(document).ready((function(){$(".toggal_btn").click((function(){$(".menu-hide").addClass("open")})),$(".menu-hide .close").click((function(){$(".menu-hide").removeClass("open")}))})),$("#defaultOpen").length>0&&document.getElementById("defaultOpen").click(),$(document).ready((function(){if($(".home-sl")&&$(".home-sl").owlCarousel({loop:!0,margin:10,responsiveClass:!0,navText:["<img src='https://sitesupportplus.com/nacab/img/left_icon.svg'>","<img src='https://sitesupportplus.com/nacab/img/right_icon.svg'>"],responsive:{0:{items:1,nav:!0},400:{items:1,nav:!1},600:{items:2,nav:!1},1e3:{items:3,nav:!0,loop:!0,margin:20}}}),$(".estatuto-sl")&&$(".estatuto-sl").owlCarousel({loop:!0,margin:10,nav:!0,navText:["<img src='https://sitesupportplus.com/nacab/img/left_icon.svg'>","<img src='https://sitesupportplus.com/nacab/img/right_icon.svg'>"],responsiveClass:!0,responsive:{0:{items:1,nav:!0},400:{items:1,nav:!1},600:{items:1,nav:!1},1e3:{items:1,nav:!0,loop:!0,margin:20}}}),$(".mina-sl")&&$(".mina-sl").owlCarousel({loop:!0,margin:10,nav:!0,navText:["<img src='https://sitesupportplus.com/nacab/img/left_icon.svg'>","<img src='https://sitesupportplus.com/nacab/img/right_icon.svg'>"],responsiveClass:!0,responsive:{0:{items:1,nav:!0},400:{items:1,nav:!1},600:{items:2,nav:!1},1e3:{items:3,nav:!0,loop:!0,margin:20}}}),$("#sync1")){var e=$("#sync1"),s=$("#sync2");e.owlCarousel({items:1,slideSpeed:2e3,nav:!0,autoplay:!1,dots:!0,loop:!0,responsiveRefreshRate:200,navText:['<svg width="100%" height="100%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>','<svg width="100%" height="100%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>']}).on("changed.owl.carousel",(function(e){var t=e.item.count-1,i=Math.round(e.item.index-e.item.count/2-.5);i<0&&(i=t);i>t&&(i=0);s.find(".owl-item").removeClass("current").eq(i).addClass("current");var o=s.find(".owl-item.active").length-1,n=s.find(".owl-item.active").first().index(),a=s.find(".owl-item.active").last().index();i>a&&s.data("owl.carousel").to(i,100,!0);i<n&&s.data("owl.carousel").to(i-o,100,!0)})),s.on("initialized.owl.carousel",(function(){s.find(".owl-item").eq(0).addClass("current")})).owlCarousel({items:3,dots:!0,nav:!0,navText:["<img src='https://sitesupportplus.com/nacab/img/left_icon.svg'>","<img src='https://sitesupportplus.com/nacab/img/right_icon.svg'>"],smartSpeed:200,slideSpeed:500,slideBy:3,responsiveRefreshRate:100}).on("changed.owl.carousel",(function(s){if(null===s.relatedTarget){var t=s.item.index;e.data("owl.carousel").to(t,100,!0)}})),s.on("click",".owl-item",(function(s){s.preventDefault();var t=$(this).index();e.data("owl.carousel").to(t,300,!0)}))}$(".owl_one").owlCarousel({loop:!0,margin:10,nav:!0,navText:["<img src='https://sitesupportplus.com/nacab/img/left_icon.svg'>","<img src='https://sitesupportplus.com/nacab/img/right_icon.svg'>"],responsiveClass:!0,responsive:{0:{items:1,nav:!0},400:{items:1,nav:!1},600:{items:1,nav:!1},1e3:{items:1,nav:!0,loop:!0,margin:20}}}),$(".owl_two").owlCarousel({loop:!0,margin:10,nav:!0,navText:["<img src='https://sitesupportplus.com/nacab/img/left_icon.svg'>","<img src='https://sitesupportplus.com/nacab/img/right_icon.svg'>"],responsiveClass:!0,responsive:{0:{items:1,nav:!0},400:{items:1,nav:!1},600:{items:1,nav:!1},1e3:{items:5,nav:!0,loop:!0,margin:20}}}),$(".owl_three").owlCarousel({loop:!0,margin:10,nav:!0,navText:["<img src='https://sitesupportplus.com/nacab/img/left_icon.svg'>","<img src='https://sitesupportplus.com/nacab/img/right_icon.svg'>"],responsiveClass:!0,responsive:{0:{items:1,nav:!0},400:{items:1,nav:!1},600:{items:1,nav:!1},1e3:{items:2,nav:!0,loop:!0,margin:20}}})}));