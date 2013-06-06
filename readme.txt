=== Gallery Theme ===
Contributors: massoud-mx
Tags: gallery, theme, template, style, templating, styling, photo, external
Requires at least: 3.5
Tested up to: 3.5.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

You will be able to deeply style wordpress galleries using this plugin.

== Description ==

You will be able to deeply style wordpress galleries using this plugin.
You can design your own gallery theme file and place it in your main template folder (only in the root) or plugin's 'themes' folder (wp-content\plugins\gallery-theme\themes).

There is a simple theme file 'gallery-theme-default.php' in the plugin's 'themes' folder. You can use it as an example and try to design your own theme files.
Remember when you install this plugin all of your wordpress galleries will use this simple theme instead of the wordpress's internal gallery theme.

You can also have multiply theme files and edit your galleries to use one of those themes.
For example:

*** If you choose your gallery theme file name like this: 'gallery-theme-default.php' and place it in your main template folder (in the root) or plugin's 'themes' folder, wordpress galleries will use this theme as default theme instead of wordpress's internal gallery theme.
*** If you choose your gallery theme file name like this: 'gallery-theme-slider.php' and place it in your main template folder (in the root) or plugin's 'themes' folder, only these kind of galleries will use this theme: [gallery ids="729,732,731,720" theme="slider"].

Please remember: It's better to place all your needed css and javascript files out of your gallery theme file. It's better to place them in your main template's header file.

These are the codes you can use in your gallery theme file (inside the loop):

<?php echo $image['thumb']; ?>  --> getting thumbnail url of the image
<?php echo $image['medium']; ?>  --> getting medium-size url of the image
<?php echo $image['large']; ?>  --> getting large-size url of the image
<?php echo $image['full']; ?>  --> getting full-size url of the image
<?php echo $image['width']; ?>  --> getting full-size image width
<?php echo $image['height']; ?>  --> getting full-size image height
<?php echo $image['link']; ?>  --> getting image page link
<?php echo $image['title']; ?>  --> getting image title
<?php echo $image['caption']; ?>  --> getting image caption
<?php echo $image['alt']; ?>  --> getting image alternative text
<?php echo $image['description']; ?>  --> getting image description
<?php echo $settings['link']; ?>  --> getting link value from gallery settings
<?php echo $settings['columns']; ?>  --> getting columns value from gallery settings
<?php echo $settings['orderby']; ?>  --> getting sorting type from gallery settings

== Installation ==

You can download and install gallery-theme using the built in wordpress plugin installer. If you download gallery-theme manually, make sure it is uploaded to "/wp-content/plugins/gallery-theme/".
Activate gallery-theme in the "Plugins" admin panel using the "Activate" link.
That's it. There are no settings or wizard.

== Changelog ==

= 1.1 =
* One fixed issue.