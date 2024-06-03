$("#signupF").hide();

$(".canvi").click(function(event){
    event.preventDefault();
    $("#loginF").toggle();
    $("#signupF").toggle();
});


