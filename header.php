<?php
    function genererHeader($titre, $menu)
    {
        ?>
        <header>
            <h1>S'Wing</h1>
            <h2><?php echo($titre); ?></h2>
            <?php include($menu); ?>
        </header>
        <?php
    }
?>