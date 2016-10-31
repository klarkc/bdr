<?php
$options = array(
    'tag' => 'li',
    'class' => 'paginate_button',
);
?>
<div class="row">
    <div class="col-md-7">
        <?php
        echo $this->Paginator->counter(array(
            'format' => __('Página {:page} de {:pages}, mostrando {:current} registros do total de {:count}, começando no registro {:start}, terminando no registro {:end}')
        ));
        ?>
    </div>
    <div class="col-md-5 text-right">
        <ul class="pagination">
            <?php
            echo $this->Paginator->prev(__('Anterior'), $options, null, array_merge($options, array('class' => 'paginate_button disabled')));
            echo $this->Paginator->numbers(array_merge(array('separator' => '', 'currentClass' => 'active'), $options));
            echo $this->Paginator->next(__('Seguinte'), $options, null, array_merge($options, array('class' => 'paginate_button disabled')));
            ?>
        </ul>
    </div>
</div>