<!DOCTYPE html>
<head>
    <?php include('extra/configuration.php') ?>
 
    <link rel ="stylesheet" type="text/css" href="public/css/timer_page.css">

</head>

<body>
    <div class="base_cointainer">
        <nav>
            <?php include "extra/header.php" ?>
        <!-- </nav> -->

        <main>
            <div class="left_side">

                <div class="desc">
                    <text>Długość trwania jednej sesji</text>               
                    <text>Długość trwania przerwy</text>
                    <text>Liczba sesji</text>
                </div>


                <div class="setup">
                    <input name="setup_field" type = "text" placeholder="0" >
                    <input name="setup_field" type = "text" placeholder="0" >
                    <input name="setup_field" type = "text" placeholder="0" >
                </div>

                
                
            </div>
            
            <div class="tomato_timer">
                <img height= 280px src ="public/img/tomato.svg">
            </div>

        </main>

        
        <footer>
            <div class="setup_timer">
                <button class="start">Start</button>
                <button class="stop">Stop</button>
                <button class="reset">Reset</button>

            </div>
        </footer>
        
    </div>
                

</body>