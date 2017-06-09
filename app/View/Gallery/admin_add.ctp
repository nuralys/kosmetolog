<div class="admin_add">
	<div class="ad_up">
		<h2>Добавление изображения</h2>
	</div>
<?php 

echo $this->Form->create('Gallery', array('type' => 'file'));
?>
<div class="input select">
<label for="GalleryServiceId">Услуги:</label>
	<select required name="data[Gallery][service_id]" id="GalleryServiceId">
		<option value="">Выберите услугу</option>
		<?php foreach($services as $key => $value): ?>
			<option value="<?=$key?>"><?=$value?></option>
		<?php endforeach ?>
	</select>
</div>
<?
echo $this->Form->input('title', array('label' => 'Название:'));
echo $this->Form->input('img', array('label' => 'Изображение:', 'type' => 'file'));
echo $this->Form->end('Создать');
?>
<script type="text/javascript">
	 CKEDITOR.replace( 'editor' );
</script>
</div>