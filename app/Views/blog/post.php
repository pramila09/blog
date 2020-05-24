<section>
	<div class="container">
	<article class="blog-post">
		<h1>
			<?php echo $post['title']?>
		</h1>
		<div class="details">Posted on:<?= date('M d Y',strtotime($post['created_at']))?> by <a href="https://www.pammu.com">Pammu</a></div>
		<p><?php echo $post['body']?>
	</p>
	</article>
</div>
</section>