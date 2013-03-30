
<div class="row">
	<?php 
	echo $this->Form->input('Date',array('label'=>"Date", 'id' =>'datepicker'));
	?>
</div>




<script>
$(function() {
	$( "#datepicker" ).datepicker();
});
</script>