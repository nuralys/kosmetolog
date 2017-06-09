<div class="admin_add">
	<div class="ad_up">
		<h2>Редактирование</h2>
	</div>
<?php 
// debug($service);
// debug($s_list);
echo $this->Form->create('Question');
echo $this->Form->input('title', array('label' => 'Название:'));
echo $this->Form->input('body', array('label' => 'Текст:', 'id' => 'editor'));
echo $this->Form->end('Сохранить');
?>
<script type="text/javascript">
	 CKEDITOR.replace( 'editor' );
</script>
</div>