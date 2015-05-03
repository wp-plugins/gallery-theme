<?php
/*
<?php echo $image['thumb']; ?> --- getting thumbnail url of the image
<?php echo $image['medium']; ?> --- getting medium-size url of the image
<?php echo $image['large']; ?> --- getting large-size url of the image
<?php echo $image['full']; ?> --- getting full-size url of the image
<?php echo $image['width']; ?> --- getting full-size image width
<?php echo $image['height']; ?> --- getting full-size image height
<?php echo $image['link']; ?> --- getting image page link
<?php echo $image['title']; ?> --- getting image title
<?php echo $image['caption']; ?> --- getting image caption
<?php echo $image['alt']; ?> --- getting image alternative text
<?php echo $image['description']; ?> --- getting image description

<?php echo $settings['link']; ?> --- getting link value from gallery settings
<?php echo $settings['columns']; ?> --- getting columns value from gallery settings
<?php echo $settings['orderby']; ?> --- getting sorting type from gallery settings
*/
?>
<div class="gallery-theme">
	<?php foreach($images as $id): $image = gt_image($id); ?>
	<a href="<?php echo $image['full']; ?>">
		<img src="<?php echo $image['thumb']; ?>" alt="<?php echo $image['alt']; ?>" />
	</a>
	<?php endforeach; ?>
</div>