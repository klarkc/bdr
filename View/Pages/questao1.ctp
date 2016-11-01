<?php
App::uses('File', 'Utility');

$this->start('output');
include APP . DS . 'questao1.php';
$this->end();
?>

<paper-material class="content-block">
    <?php echo $this->fetch('output'); ?>
</paper-material>
