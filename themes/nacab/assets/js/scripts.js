/**
 * Scripts
 */
$(document).ready(function () {

    $( ".toggal_btn" ).click( function() {
        $( ".toggal_section" ).toggleClass( "toggle_open" );
    });


    $( ".toggal_btn" ).click( function() {
        $( ".my_header" ).toggleClass( "header_bg" );
    });
});

/* Dropdown button */
function openAtos() {
    document.getElementById("myDropdown").classList.toggle("show");
}

function openMenuInt() {
    document.getElementById("myDropdown").classList.toggle("show");
}

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

