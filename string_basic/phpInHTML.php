<?php
$colori = ['red', 'green', 'blue'];
?>


<ul>
    <?php foreach ($colors as $color) { ?>
        <li><?php echo $color?></li>
    <?php } ?>
</ul>

<ul>
    <?php foreach ($colors as $color) {
        echo ("<li>$color</li>");
    } ?>
</ul>

