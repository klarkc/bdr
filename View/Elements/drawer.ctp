<app-drawer-layout>
    <app-drawer opened>
        <paper-menu selected="4" id="menu">
            <paper-item>Questão 1</paper-item>
            <paper-item>Questão 2</paper-item>
            <paper-item>Questão 3</paper-item>
            <paper-item>Tarefas (Questão 4)</paper-item>
        </paper-menu>
    </app-drawer>

    <?php echo $this->element('toolbar'); ?>
</app-drawer-layout>
