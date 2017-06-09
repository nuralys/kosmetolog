<div class="admin_add">
	<div class="ad_up">
		<h2>Редактирование</h2>
	</div>
<?php 
echo $this->Form->create('Review');
echo $this->Form->input('title', array('label' => 'ФИО:'));
echo $this->Form->input('body', array('id' => 'editor', 'label' => 'Текст:'));
echo $this->Form->end('Сохранить');
?>
<script type="text/javascript">
	 CKEDITOR.replace( 'editor' );
</script>
</div>