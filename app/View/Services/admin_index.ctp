<a href="/admin/services/add">Добавить услугу</a><br>
<table>
<th>Название</th><th>Редактировать</th><th>Удаление</th>
	<?php foreach ($data as $item) : ?>
	<tr>
		<td><?php  echo $item['Service']['title']?></td> 
		<td><a href="/admin/services/edit/<?=$item['Service']['id']?>?lang=ru">Редактировать</a>
		</td>
		<td><?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Service']['id']), array('confirm' => 'Подтвердите удаление')); ?></td>
	</tr>
	<?php endforeach; ?>
</table>