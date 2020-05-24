<div class="container">
	<h1>Create new post</h1>
	<?php if($_POST):?>
		<? echo \Config\Services::validation()->listError();?>
	<?php endif;?>
	<form class="" action="/blog/create" method="post">
		<div class="form-group">
			<label for="title">Title</label>
			<input type="text" name="title" class="form-control" id="title" value="">
		</div>
		<div class="form-group">
			<label for="body"><strong>Body</strong></label>
			<textarea class="form-control" name="body" id="body"></textarea> 
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Create</button>
		</div>
</div>