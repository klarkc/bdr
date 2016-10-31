<!-- Start of SQL Log -->
<div class="row">
    <div class="col-lg-12">
        <?php
        $button1 = $this->Html->link($this->Html->icon('fa-toggle-down') . __('Mostrar'), '#', array('class' => 'cake-sql-log-btn-show pull-right', 'escape' => false));
        $button2 = $this->Html->link($this->Html->icon('fa-toggle-up') . __('Esconder'), '#', array('class' => 'cake-sql-log-btn-hide pull-right hidden', 'escape' => false));
        $headingHtml = $this->Html->panelHeading(nl($this->Html->icon('fa-cogs'), __('Informações de Depuração'), $button1, $button2));
        $panel = nl($headingHtml, $this->Html->panelBody($this->element('sql_dump'), array('class' => 'cake-sql-log-container hidden')));
        echo $this->Html->div('panel panel-default', $panel);
        ?>
        <script language="javascript">
            $(function () {
                $('.cake-sql-log-btn-hide').click(function (ev) {
                    ev.preventDefault();
                    $(this).hide();
                    $('.cake-sql-log-btn-show').removeClass('hidden').show();
                    $('.cake-sql-log-container').hide();
                });
                $('.cake-sql-log-btn-show').click(function (ev) {
                    ev.preventDefault();
                    $(this).hide();
                    $('.cake-sql-log-btn-hide').removeClass('hidden').show();
                    $('.cake-sql-log-container').removeClass('hidden').show();
                });

            });
        </script>
    </div>
</div>
<!-- End of SQL Log -->

<!-- Start of Request Debug -->
<div class="row">
    <div class="col-lg-12">
        <?php
        $button1 = $this->Html->link($this->Html->icon('fa-toggle-down') . __('Mostrar'), '#', array('class' => 'request-btn-show pull-right', 'escape' => false));
        $button2 = $this->Html->link($this->Html->icon('fa-toggle-up') . __('Esconder'), '#', array('class' => 'request-btn-hide pull-right hidden', 'escape' => false));
        $headingHtml = $this->Html->panelHeading(nl($this->Html->icon('fa-cogs'), __('Informações de Request'), $button1, $button2));
        ob_start();
        Debugger::dump($this->request->data);
        $dump = ob_get_clean();
        $panel = nl($headingHtml, $this->Html->panelBody($dump, array('class' => 'request-container hidden')));
        echo $this->Html->div('panel panel-default', $panel);
        ?>
        <script language="javascript">
            $(function () {
                $('.request-btn-hide').click(function (ev) {
                    ev.preventDefault();
                    $(this).hide();
                    $('.request-btn-show').removeClass('hidden').show();
                    $('.request-container').hide();
                });
                $('.request-btn-show').click(function (ev) {
                    ev.preventDefault();
                    $(this).hide();
                    $('.request-btn-hide').removeClass('hidden').show();
                    $('.request-container').removeClass('hidden').show();
                });

            });
        </script>
    </div>
</div>
<!-- End of Request Debug -->
