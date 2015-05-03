<?php
// Fotorama 4.6.3: http://fotorama.io/license/
?>
<link rel="stylesheet" href="<?php echo plugins_url().'/gallery-theme/themes/gallery-theme-fotorama/'; ?>fotorama.css">
<script src="<?php echo plugins_url().'/gallery-theme/themes/gallery-theme-fotorama/'; ?>fotorama.js"></script>
<div class="fotorama" data-width="700" data-ratio="700/467" data-max-width="100%" data-nav="thumbs">
	<?php foreach($images as $id): $image = gt_image($id); ?>
	<a href="<?php echo $image['full']; ?>"><img src="<?php echo $image['thumb']; ?>"></a>
	<?php endforeach; ?>
</div>