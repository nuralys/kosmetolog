<a href="/admin/questions/add">Добавить вопрос</a><br>
<table>
<th>Название</th><th>Редактировать</th><th>Удаление</th>
	<?php foreach ($data as $item) : ?>
	<tr>
		<td><?php  echo $item['Question']['title']?></td> 
		<td><a href="/admin/questions/edit/<?=$item['Question']['id']?>?lang=ru">Редактировать</a>
		</td>
		<td><?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Question']['id']), array('confirm' => 'Подтвердите удаление')); ?></td>
	</tr>
	<?php endforeach; ?>
</table>