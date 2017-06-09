<a href="/admin/gallery/add">Добавить изображение</a><br>
<table>
<th>Изображение</th><th>Название</th><th>Редактировать</th><th>Удаление</th>
	<?php foreach ($data as $item) : ?>
	<tr>
		<td><img src="/img/galleries/thumbs/<?php  echo $item['Gallery']['img']?>" width="70"></td> 
		<td><?php  echo $item['Gallery']['title']?></td> 
		<td><a href="/admin/gallery/edit/<?=$item['Gallery']['id']?>?lang=ru">Редактировать</a>
		</td>
		<td><?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Gallery']['id']), array('confirm' => 'Подтвердите удаление')); ?></td>
	</tr>
	<?php endforeach; ?>
</table>