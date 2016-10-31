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
 * @package       app.View.Emails.text
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<?php
$content = explode("\n", $content);
?>
<p>
    Este email de contato foi enviado através do formulário de contato<?php if ($user): ?><span class="user"> pelo usuário <?php echo $user['Usuario']['username']; ?></span><?php endif; ?>:
</p>
<blockquote>
    <?php
    foreach ($content as $line):
        echo '<p> ' . $line . "</p>\n";
    endforeach;
    ?>
    <footer>Att. <?php echo $name; ?> (<?php echo $email; ?>)</footer>
</blockquote>
