<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script src="{{asset('/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('/js/form-validation.js')}}"></script>
<script src="{{asset('/js/inan.js')}}"></script>
<script src="{{asset('/js/active-menu-link.js')}}"></script>




<script>

    $(document).ready(function(){

        function setTheme() {
            var currentTheme = $('#pagetheme').attr('class');

            if (currentTheme == 'darkmode') {
                $(':root .darkmode').css({
                    '--main':'{{ $color['main'] }}',
                    '--first':'{{ $color['third'] }}', //third in database
                    '--second':'{{ $color['second'] }}',
                    '--third':'{{ $color['first'] }}', //first in database
                    '--forth':'{{ $color['fifth'] }}', // fifth in database
                    '--fifth':'{{ $color['forth'] }}', //forth in database
                });
            }
            else {
                $(':root .lightmode').css({
                    '--main':'{{ $color['main'] }}',
                    '--first':'{{ $color['first'] }}',
                    '--second':'{{ $color['second'] }}',
                    '--third':'{{ $color['third'] }}',
                    '--forth':'{{ $color['forth'] }}',
                    '--fifth':'{{ $color['fifth'] }}',
                });
            }
        }

        setTheme();

        //set theme
        $(document).on('click', '.toggeleTheme', function () {
            $('.toggeleTheme').toggleClass('active');
            var theme = $('#pagetheme').attr('class');

            if(theme == 'lightmode') {
                $('#pagetheme').removeClass('lightmode');
                $('#pagetheme').addClass('darkmode');
            }else {
                $('#pagetheme').removeClass('darkmode');
                $('#pagetheme').addClass('lightmode');
            }

            setTheme();

            $.ajax({
                type: "get",
                url: '/toggletheme',
                success: function(data) {}
            });
        });

    });



</script>
