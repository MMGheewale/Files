
<!doctype html>
<html>
    <head>
        <meta charset='utf-8' />
        <title>Quiz countdown</title>
        <script>
            <?php
            $a=date('Y-m-d H:i:s');
                $start=date('Y-m-d H:i:s');
                $showtime=abs($dminutes-10);
                $end=date('Y-m-d H:i:s', strtotime( $a .' +'.$dminutes.' minutes' ) );

            ?>

            document.addEventListener('DOMContentLoaded', function(){
                (function(time){
                    var now=new Date().getTime();

                    var difference = time_quiz_end - now;

                    var days = Math.floor(difference / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((difference % (1000 * 60)) / 1000);



                    t=setTimeout( arguments.callee, time );

                    if( difference <= 0 ){
                        clearTimeout( t );
                        
                        /* redirect user, display message, stand on one leg or whatever you need to do - quiz has finished */
                        return false;
                    }
                    document.getElementById("starttime").innerHTML=date_quiz_start;
                    document.getElementById("endtime").innerHTML=date_quiz_end;
                    document.getElementById("showtime").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
                    $actime = abs($dminutes-10);
                    $secondsleft = actime * 60;
                })(1000);
            },false );
        </script>
    </head>
    <body>
        <div id='starttime'></div>
        <br />
        <div id='endtime'></div>
        <br />
        <div id='showtime'></div>
    </body>
</html>