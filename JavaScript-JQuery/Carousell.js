

//que tengan animaciones
$(".cap").hover(function(){
        $(this).animate( {
            opacity: '0.5'

        })
        },
        function(){
            $(this).animate( {
                opacity: '1'
            })
        });


$(".BTN").hover(
    function() {
        $(this).animate({
            backgroundColor: "gray"
        }, "fast"); // Adjust animation speed as needed
    },
    function() {
        $(this).animate({
            backgroundColor: "initial" // Change back to original background color
        }, "fast");
    }
);




//que rote el carousell


let slider = document.getElementById('slider');
console.log(slider);
let i = 0;

$('#1').hide();
$('#2').hide();
$('#3').show();

// Corrected setInterval call
let intervalId = setInterval(rotar, 3000);

function rotar() {
    console.log(i);

    if (i >= 3) i = 0;

    if (i === 0) {
        $('#1').show();
        $('#2').hide();
        $('#3').hide();
        }
        else if (i === 1) {
            $('#1').hide();
            $('#2').show();
            $('#3').hide();
            }
            else if (i === 2) {
                $('#1').hide();
                $('#2').hide();
                $('#3').show();
            }

    // Increment at the end of the function
    i = i + 1;
    return i;
}


    $('#left').click(function(){
        i = i - 2;

        if (i < 0) i = 2;

        clearInterval(intervalId);

        rotar();

        intervalId  = setInterval(rotar, 3000);
    })

    $('#right').click(function(){

        clearInterval(intervalId);

        intervalId  = setInterval(rotar, 3000);

        rotar();
    })




