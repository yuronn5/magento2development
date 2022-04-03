require(['jquery', 'jquery/ui'], function($) {
    //first one
    let el = document.getElementById('yuronn_popup');
    el.addEventListener("click", addPopup);
    function addPopup() {
        window.open('https://elogic.co/','popUpWindow','height=500,width=400,left=200,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');
    }


    //second one
    let el1 = document.getElementById('popup');
    el1.addEventListener("click", myFunction);


    function myFunction() {
        var popup = document.getElementById("myPopup");
        popup.classList.toggle("show");
    }


})
