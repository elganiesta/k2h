<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p class="err"><?php echo  $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>
<style>
	.error{
		margin-top : -20px;
		padding : 10px;
	}
	.err{
		color: white;
		font-size: 10px;
		font-weight : 500;
		text-shadow: 0 2px 1px black;
	}	
		
</style>