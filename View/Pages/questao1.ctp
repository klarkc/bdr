<?php
$path = APP . DS . 'questao1.php';
?>

<paper-material class="content-block">
    <?php highlight_file($path); ?>
</paper-material>

<paper-material class="content-block">
    <?php include($path); ?>
</paper-material>
