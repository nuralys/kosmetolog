<div class="admin_add">
	<div class="ad_up">
		<h2>Добавление вопрос</h2>
	</div>
<?php 

echo $this->Form->create('Question', array('type' => 'file'));
echo $this->Form->input('title', array('label' => 'Название:'));
echo $this->Form->input('body', array('label' => 'Текст:', 'id' => 'editor'));
echo $this->Form->end('Создать');
?>
<script type="text/javascript">
	 CKEDITOR.replace( 'editor' );
</script>
</div>