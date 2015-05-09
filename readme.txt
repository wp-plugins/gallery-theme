=== Gallery Theme ===

Contributors: massoud-mx
Tags: gallery, theme, template, style, templating, styling, photo, external
Requires at least: 3.5
Tested up to: 4.2.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

You will be able to deeply style wordpress galleries using this plugin.

== Description ==

You will be able to deeply style wordpress galleries using this plugin.<br>
You can design your own gallery theme file and place it in your main template folder (in the root) or plugin's 'themes' folder (wp-content\plugins\gallery-theme\themes).

There is a simple theme file 'gallery-theme-default.php' in the plugin's 'themes' folder. You can use it as an example and try to design your own theme files.<br>
Remember when you activate this plugin all of your wordpress galleries will use this simple theme instead of the wordpress's internal gallery theme.

You can also have multiply theme files and edit your galleries to use one of those themes.<br>
For example:

- If you choose your gallery theme file name like this: 'gallery-theme-default.php' and place it in the root of your main template folder, wordpress galleries will use this theme as default theme instead of wordpress's internal gallery theme.<br>
- If you choose your gallery theme file name like this: 'gallery-theme-example.php' and place it in the root of your main template folder, you should edit your gallery shortcodes like this to use this theme: [gallery ids="729,732,731,720" theme="example"].

Note: It's better to place all your needed css and javascript files out of your gallery theme file. It's better to place them in your main template's header file.

Note: Beside the simple default theme, there is another theme 'Fotorama' already integrated and ready to use with this plugin. You can use this plugin just by adding theme="fotorama" into your gallery shortcodes.

These are the codes you can use in your gallery theme files (inside the loop):<br>
$image['thumb']  --> getting thumbnail url of the image<br>
$image['medium']  --> getting medium-size url of the image<br>
$image['large']  --> getting large-size url of the image<br>
$image['full']  --> getting full-size url of the image<br>
$image['width']  --> getting full-size image width<br>
$image['height']  --> getting full-size image height<br>
$image['link']  --> getting image page link<br>
$image['title']  --> getting image title<br>
$image['caption']  --> getting image caption<br>
$image['alt']  --> getting image alternative text<br>
$image['description']  --> getting image description<br>
$settings['link']  --> getting link value from gallery settings<br>
$settings['columns']  --> getting columns value from gallery settings<br>
$settings['orderby']  --> getting sorting type from gallery settings<br>

<a href="http://mmx.name/" target="_blank">Website Link</a>

== Installation ==

You can download and install gallery-theme using the built in wordpress plugin installer. If you download gallery-theme manually, make sure it is uploaded to "/wp-content/plugins/gallery-theme/".<br />
Activate gallery-theme in the "Plugins" admin panel using the "Activate" link.<br />
That's it. There are no settings or wizard.

<a href="http://mmx.name/" target="_blank">Website Link</a>

== Screenshots ==

1. An example of plugin in action (Fotorama Theme)
2. Editing gallery shortcode to use Fotorama Theme

== Changelog ==

= 1.4.1 =
* Fixed an issue related to plain [gallery] shortcode.

= 1.4 =
* Fixed plain [gallery] shortcode to show all attached images.

= 1.3 =
* Added Fotorama Theme.
* Two fixed issues.