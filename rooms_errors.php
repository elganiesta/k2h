<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p class="err"><?php echo  $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>
<style>
	.error{
        position:absolute;
		padding : 10px;
        width:85%;
        margin:auto;
	}
	.err{
        color:black;
		font-size: 15px;
		font-weight : 500;
        text-align:center;
	}	
		
</style>