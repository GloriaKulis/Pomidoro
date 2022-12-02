<!DOCTYPE html>
<head> 
    
    <link rel ="stylesheet" type = "text/css" href="public/css/to_do_list_page.css">
    <?php include "extra/configuration.php" ?>

</head>

<body>
    <div class="base_cointainer">
        <nav>
            <?php include "extra/header.php" ?>
        <!-- </nav> -->

        <main>
            
            <div class="check">
                <img class="round" src ="public/img/to_do_list_page/round.svg">
                <img class="round" src ="public/img/to_do_list_page/round.svg">
                <img class="round" src ="public/img/to_do_list_page/round.svg">
                <img class="round" src ="public/img/to_do_list_page/round.svg">

            </div>

            <div class="task_group">
                <input name="task" type = "text" placeholder="wprowadź zadanie" >
                <input name="task" type = "text" placeholder="wprowadź zadanie" >
                <input name="task" type = "text" placeholder="wprowadź zadanie" >
                <input name="task" type = "text" placeholder="wprowadź zadanie" >
            </div>
               
            
        </main>

        <?php include "extra/footer.php" ?>
        
    </div>
                

</body>

