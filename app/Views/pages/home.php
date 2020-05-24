<section>
	<?php
	$session=\Config\Services::session();
	?>
	<?php if(isset($session->success)):?>
		<div class="alert alert-success text-center alert-dismissible fade show mb-0" role="0">
			<?php echo $session->success ?>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		</div>
	<?php endif;?>
	<div class="jumbotron">
		<div class="container">
  <h1 class="display-4">CI Blog</h1>
  <p class="lead">CodeIgniter is a awesome framework for creating awesome web application.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>
</div>
</section>
<section class="blog-section">
	<div class="container">
<?php
if($news){
	//print_r($news);
	foreach ($news as $new) {
		# code...
		$new1=$new['title'];
		?>
		<br>
		<h3><a href="/blog/<?= $new['slug']?>"><?php echo $new1;?></a></h3>
	<?php }

}
else{?>
<p class="text-center"><?php echo "No data availabe";?></p>
<?php } ?>

</div>

</section>