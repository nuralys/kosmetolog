<?php 
// echo 'aaaa';
echo $this->Form->create('', array('controller' => 'app',	'action' => 'sendmailtop'));
echo $this->Form->input('fio', array('label' => '', 'class' => 'modal_f', 'placeholder' => 'Имя...'));
echo $this->Form->input('phone', array('label' => '', 'class' => 'modal_f', 'placeholder' => 'Телефон...', 'required' => 'required'));
echo $this->Form->end('Заказать');
?>