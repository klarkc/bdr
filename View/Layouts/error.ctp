<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
    <!DOCTYPE html>
    <html>

    <head>
        <?php
        echo $this->Html->charset();
        echo $this->Html->meta('viewport', 'width=device-width, initial-scale=1');
        echo $this->Html->meta('description', '');
        echo $this->Html->meta('author', '');
        echo $this->Html->meta('X-UA-Compatible', 'IE=edge');

        echo $this->Html->meta('icon');
        ?>
            <title>ASO-Online -
                <?php echo __('Versão %s', Configure::read('versao')); ?> -
                    <?php echo $title_for_layout; ?>
            </title>
            <?php
        // CakePHP Generic CSS
        echo $this->Html->css('debugging');
        echo $this->element('default_head');
        ?>

                <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
                <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
                <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.js"></script>
        <![endif]-->
    </head>

    <body>
        <div id="error">
            <?php echo $this->fetch('content'); ?>
                <?php echo $this->element('sql_dump'); ?>
        </div>

    </body>

    </html>
