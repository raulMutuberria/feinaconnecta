
$(".botnav").hover(function(){
        $(this).animate( {
            transition: 'linear',
            transitionDuration: '0,3s',
            backgroundColor: '#0d6efd',
            borderRadius: '10px 10px 0 0',
            color: '#b6ebb3'

        })
    },
    function(){
        $(this).animate( {
            backgroundColor: 'transparent',
            borderRadius: '0',
            color: '#0d6efd'
        })
    });
