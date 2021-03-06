 

<!DOCTYPE html>

<html>

    <head>       
        <title>Tela Principal</title>

  

    <ul id="nav">

        <li><a href="#">Cadastro</a>
            <ul>
                <li><a href="http://localhost/ProjetoFinalWebII/estacionamento/index.php/controlador/">Cliente</a></li>
                <li><a href="#">Carro</a></li>
            </ul>
        </li>
        <li><a href="#">Monitoramento</a>
            <ul>
                <li><a href="#">Camera</a></li>
            </ul>
        </li> 

        <li><a href="#">Vagas</a></li>
        <li><a href="#">Sobre</a></li>

    </ul>


    <style>
        #nav,#nav ul {
            list-style: none outside none;
            margin: 0;
            padding: 0;
        }
        #nav {
            font-family: "Lucida Sans Unicode",Verdana,Arial,sans-serif;
            font-size: 13px;
            height: 36px;
            list-style: none outside none;
            margin: 40px auto;
            text-shadow: 0 -1px 3px #202020;
            width: 800px;
            /* border radius */
            -moz-border-radius: 4px;
            -webkit-border-radius: 4px;
            border-radius: 4px;
            /* box shadow */
            -moz-box-shadow: 0px 3px 3px #cecece;
            -webkit-box-shadow: 0px 3px 3px #cecece;
            box-shadow: 0 3px 4px #8b8b8b;
            /* gradient */
            background-image: -webkit-gradient(linear, left bottom, left top, color-stop(0, #787878), color-stop(0.5, #5E5E5E), color-stop(0.51, #707070), color-stop(1, #838383));
            background-image: -moz-linear-gradient(center bottom, #787878 0%, #5E5E5E 50%, #707070 51%, #838383 100%);
            background-color: #5f5f5f;
        }
        #nav li {
            border-bottom: 1px solid #575757;
            border-left: 1px solid #929292;
            border-right: 1px solid #5d5d5d;
            border-top: 1px solid #797979;
            display: block;
            float: left;
            height: 34px;
            position: relative;
            width: 105px;
        }
        #nav > li:first-child {
            border-left: 0 none;
            margin-left: 5px;

        }
        #nav ul {
            left: -9999px;
            position: absolute;
            top: -9999px;
            z-index: 2;
        }

        #nav ul li {
            background: none repeat scroll 0 0 #838383;
            box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.5);
            width: 100%;
        }
        #nav li a {

            color: #FFFFFF;
            display: block;
            line-height: 34px;
            outline: medium none;
            text-align: center;
            text-decoration: none;
            /* gradient */
            background-image: -webkit-gradient(linear, left bottom, left top, color-stop(0, #787878), color-stop(0.5, #5E5E5E), color-stop(0.51, #707070), color-stop(1, #838383));
            background-image: -moz-linear-gradient(center bottom, #787878 0%, #5E5E5E 50%, #707070 51%, #838383 100%);
            background-color: #5f5f5f;
        }
        /* keyframes #animation */
        @-webkit-keyframes animation {
            0% {
                -webkit-transform: scale(1);
            }
            30% {

                -webkit-transform: scale(1.2);
            }

            100% {

                -webkit-transform: scale(1.1);

            }

        }

        @-moz-keyframes animation {

            0% {
                -moz-transform: scale(1);

            }

            30% {

                -moz-transform: scale(1.2);
            }

            100% {
                -moz-transform: scale(1.1);
            }
        }

        #nav li > a:hover {

            /* CSS3 animation */

            -webkit-animation-name: animation;

            -webkit-animation-duration: 0.3s;
            -webkit-animation-timing-function: linear;
            -webkit-animation-iteration-count: 1;
            -webkit-animation-direction: normal;
            -webkit-animation-delay: 0;
            -webkit-animation-play-state: running;

            -webkit-animation-fill-mode: forwards;
            -moz-animation-name: animation;
            -moz-animation-duration: 0.3s;
            -moz-animation-timing-function: linear;
            -moz-animation-iteration-count: 1;
            -moz-animation-direction: normal;
            -moz-animation-delay: 0;
            -moz-animation-play-state: running;
            -moz-animation-fill-mode: forwards;
        }
        #nav li:hover ul {
            left: 0;
            top: 34px;
            width: 150px;

        }
    </style>
    <script>
        // variables

        var aLoops = []; // sound loops
        // initialization
        addEvent(window, 'load', function (event) {
            // load music files
            aLoops[0] = new Audio('media/background.ogg');
            aLoops[0].volume = 0.3;
            aLoops[1] = new Audio('media/button.ogg');
            aLoops[1].volume = 1.0;
            aLoops[2] = new Audio('media/button_click.ogg');
            aLoops[2].volume = 1.0;
            aLoops[0].addEventListener('ended', function () { // loop background sound
                this.currentTime = 0;
                this.play();
            }, false);
            aLoops[0].play();
        });


        // all the buttons
        var aBtns = document.querySelectorAll('#nav li');
        // onmouseover event handler
        addEvent(aBtns, 'mouseover', function (event) {
            aLoops[1].currentTime = 0;
            aLoops[1].play(); // play click sound
        });
        // onmouseout event handler
        addEvent(aBtns, 'mouseout', function (event) {
            aLoops[1].currentTime = 0;
            aLoops[1].pause(); // play click sound
        });
        // onclick event handler
        addEvent(aBtns, 'click', function (event) {
            aLoops[2].currentTime = 0;
            aLoops[2].play(); // play click sound
        });
    </script>



    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body background="http://localhost/ProjetoFinalWebII/estacionamento/esta.jpg">



    <style>
        #tabela {
            position:absolute;
            left: 35%;
            top:50%;
            margin-left: -180px;
            margin-top: -100px;
            border: 1px solid #000;
            width: 800px;
            height: 200px;
            text-align:center;
        }
    </style>
    <style type="text/css"> 
        .opp{ 
            width:150px; 
            height:150px; 
            margin:0 auto; 
            background-color:#9ACD32; 
            padding-left:20px; 
            padding-top:20px; 
        } 
        .pat{ 
            font-family:Arial, Helvetica, sans-serif; 
            font-size:18px; 
            font-weight:bold; 
            color:#F0E68C; 
            opacity:0.7; 
        } 
    </style>

    <div  leftmargin="0" topmargin="0"><div align="center">
            <TABLE id="tabela" BORDER=2 CELLPADDING=2 align='center'  width=800px bgcolor="#556B2F" class="pat" class="opp" > 
                <TR>
                    <TD ROWSPAN=2><h1><?php echo $titulo; ?></h1></TD>
                    <TD><div><p><?php echo $texto; ?></p></TD></TR><TR> <TD><ul>
                            <?php foreach ($menu as $item): ?>
                                <li><?php echo $item; ?></li>
                            <?php endforeach; ?>

                        </ul></TD>
                </TR>
            </TABLE>
        </div>




</body>
</html>
