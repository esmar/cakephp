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
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')):
    throw new NotFoundException();
endif;

?>
 <!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
  

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
<title>Envio Correos 123</title>

</head>



<body>
  <header>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><?= $this->Html->link('Registrar',array('controller' => 'users', 'action' => 'add') )?></h1>
            </li>
        </ul>
        <section class="top-bar-section">
            <ul class="right">
                <li><?= $this->Html->link('Login',array('controller' => 'users', 'action' => 'login')) ?></li>
                <li><?= $this->Html->link('Logout',array('controller' => 'users', 'action' => 'logout')) ?></li>
            </ul>
        </section>
    </nav>
  </header>


</body>



</html> 