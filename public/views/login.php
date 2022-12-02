<!DOCTYPE html>
<head>
    <link rel ="stylesheet" type = "text/css" href="public/css/login_page.css">
    <?php include "extra/configuration.php" ?>
    
</head>
<body>
    <div class="cointainer">
       <div class = "left-side">

            <div class="title">Pomidoro</div>

            <div class="logo-container">
                <div class="tomato">
                    <img src ="public/img/tomato.svg">
                </div>

                <div class="watch">
                    <img src="public/img/login_page/watch.svg">
                </div>

            </div>


       </div> 

        <div class="login-container">
            <form class =" login" action="login" method="post">
                <div class="messages">
                    <?php
                    if(isset($messages)){
                        foreach($messages as $message) {
                            echo $message;
                        }
                    }
                    ?>
                </div>

                <input name="email" type="text" placeholder="email@email.com">
                <input name="password" type="password" placeholder="password">
                <button type="submit" title="zaloguj">zaloguj</button>

                
            </form>

        </div>

    </div>

</body>