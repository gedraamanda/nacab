/**
 * Scripts
 */
$(document).ready(function () {

    $( ".toggal_btn" ).click( function() {
        $( ".menu-hide" ).addClass( "open" );
    });

    $( ".menu-hide .close" ).click( function() {
        $( ".menu-hide" ).removeClass( "open" );
    });
    //
    //
    // $( ".toggal_btn" ).click( function() {
    //     $( ".my_header" ).toggleClass( "header_bg" );
    // });
});



// Close the dropdown if the user clicks outside of it
// window.onclick = function(event) {
//     if (!event.target.matches('.dropbutton')) {
//         var dropdowns = document.getElementsByClassName("dropdown-content");
//         var i;
//         for (i = 0; i < dropdowns.length; i++) {
//             var openDropdown = dropdowns[i];
//             if (openDropdown.classList.contains('show')) {
//                 openDropdown.classList.remove('show');
//             }
//         }
//     }
//
//     if (!event.target.matches('.dropbtn')) {
//         var dropdowns = document.getElementsByClassName("dropdown-content");
//         var i;
//         for (i = 0; i < dropdowns.length; i++) {
//             var openDropdown = dropdowns[i];
//             if (openDropdown.classList.contains('show')) {
//                 openDropdown.classList.remove('show');
//             }
//         }
//     }
// }

function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
if($('#defaultOpen').length > 0) {
    document.getElementById("defaultOpen").click();
}

