<?php  defined('C5_EXECUTE') or die("Access Denied.");
Loader::element('editor_config');
?>

<style type="text/css" media="screen">
	.ccm-block-field-group h2 { margin-bottom: 5px; }
	.ccm-block-field-group td { vertical-align: middle; }
</style>

<div class="ccm-block-field-group">
	<h2>Title</h2>
	<textarea id="field_1_textarea_text" name="field_1_textarea_text" rows="5" style="width: 95%;"><?php  echo $field_1_textarea_text; ?></textarea>
</div>

<div class="ccm-block-field-group">
	<h2>左コンテンツ</h2>
	<?php  Loader::element('editor_controls'); ?>
	<textarea id="field_3_wysiwyg_content" name="field_3_wysiwyg_content" class="ccm-advanced-editor"><?php  echo $field_3_wysiwyg_content; ?></textarea>
</div>

<div class="ccm-block-field-group">
	<h2>右コンテンツ</h2>
	<?php  Loader::element('editor_controls'); ?>
	<textarea id="field_4_wysiwyg_content" name="field_4_wysiwyg_content" class="ccm-advanced-editor"><?php  echo $field_4_wysiwyg_content; ?></textarea>
</div>


