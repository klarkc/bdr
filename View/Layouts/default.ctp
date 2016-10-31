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
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php
	echo $this->Html->charset();
	echo $this->Html->meta('viewport', '');
	echo $this->Html->meta('description', '');
	echo $this->Html->meta('author', '');
	echo $this->Html->meta('X-UA-Compatible', 'IE=edge');

	echo $this->Html->meta('icon');
	?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php echo $this->element('default_head'); ?>
</head>

<body>
    <div class="<?php echo h(str_replace(' ','_', strtolower($title_for_layout))); ?>">
        <?php
        echo $this->element('navbar');
        if (Configure::read('show_debug')) {
            echo $this->element('debug');
        }
        echo $this->Session->flash();
        echo $this->fetch('content');
        ?>
    </div>
</body>

</html>
