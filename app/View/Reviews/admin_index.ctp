<a href="/admin/reviews/add">Добавить отзыва</a><br>
<table>
<th>Название</th><th>Редактировать</th><th>Удаление</th>
	<?php foreach ($data as $item) : ?>
	<tr>
		<td><?php  echo $item['Review']['title']?></td> 
		<td><a href="/admin/reviews/edit/<?=$item['Review']['id']?>?lang=ru">Редактировать</a>
		</td>
		<td><?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Review']['id']), array('confirm' => 'Подтвердите удаление')); ?></td>
	</tr>
	<?php endforeach; ?>
</table>