<div class="admin">
	<div class="ad_up">
		<h2>Статьи</h2>
		<a class="add_b" href="articles/add">+ Добавить статью</a>
	</div>
<table>
<th>Название</th><th>Редактировать</th><th>Удаление</th>
	<?php foreach ($data as $item) : ?>
	<tr>
		<td><?php  echo $item['Article']['title']?></td> 
		<td><a href="/admin/articles/edit/<?=$item['Article']['id']?>?lang=ru">Редактировать</a>
		</td>
		<td><?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Article']['id']), array('confirm' => 'Подтвердите удаление')); ?></td>
	</tr>
	<?php endforeach; ?>
</table>
</div>