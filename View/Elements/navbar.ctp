<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Prova Técnica BDR</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li >
            <?php
            echo $this->Html->link(
                __('Questão 1'),
                array(
                    'controller' => 'pages',
                    'action' => 'display',
                    'questao3'
                ),
                array(
                    'target' => '_blank'
                )
            );
            ?>
        </li>
        <li>
            <?php
            echo $this->Html->link(
                __('Questão 2'),
                array(
                    'controller' => 'pages',
                    'action' => 'display',
                    'questao3'
                ),
                array(
                    'target' => '_blank'
                )
            );
            ?>
        </li>
        <li>
            <?php
            echo $this->Html->link(
                __('Questão 3'),
                array(
                    'controller' => 'pages',
                    'action' => 'display',
                    'questao3'
                ),
                array(
                    'target' => '_blank'
                )
            );
            ?>
        </li>
        <li class="active">
            <?php
            echo $this->Html->link(
                __('Questão 4 - Tarefas'),
                array('controller' => 'pages', 'action' => 'display', 'index')
            );
            ?>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
