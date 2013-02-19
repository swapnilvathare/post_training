<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('bootstrap', 'custom'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
            <div class="navbar navbar-fixed-top">
                <div class="navbar-inner">
                    <div class="container">
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <a class="brand" href="../">WeboniseLab</a>
                        <div class="nav-collapse collapse" id="main-menu">
                            <ul class="nav" id="main-menu-left">
                                <li><?php echo $this->Html->link(
                                    'Home',
                                    array('controller' => 'pages', 'action' => 'home')
                                ); ?></li>
                                <li><?php echo $this->Html->link(
                                    'Posts',
                                    array('controller' => 'posts', 'action' => 'index')
                                ); ?></li>
                                <li><?php echo $this->Html->link(
                                    'Add Post',
                                    array('controller' => 'posts', 'action' => 'add')
                                ); ?></li>
                            </ul>
                            <form class="navbar-form pull-right">
                                <input type="text" class="span2">
                                <button type="submit" class="btn">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
		</div>
		<div id="content" class="container">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>

            <hr>

            <footer id="footer">
                &copy; 2013 Webonise, Inc
            </footer>
		</div>
	</div>
	<?php /*echo $this->element('sql_dump'); */?>
</body>
</html>
