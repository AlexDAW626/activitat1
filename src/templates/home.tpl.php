<?php

        include 'partials/header.tpl.php';?>
<body>

    <header>
    <h1> <?= $title;?> </h1>
    <?php include 'partials/nav.tpl.php'?>
    </header>
  
    <main>
</main>

    <?php 

        foreach($alumnes as $alumne):?>
            <p> <?= $alumne; ?> </p> <br>

        

      <?php endforeach;?>

</body>
</html>