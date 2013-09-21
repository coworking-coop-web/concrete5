<?php  defined('C5_EXECUTE') or die("Access Denied.");
?>

<?php  if (!empty($field_1_textarea_text)): ?>
	<h1 class="sectitle"><?php  echo nl2br(htmlentities($field_1_textarea_text, ENT_QUOTES, APP_CHARSET)); ?></h1>
<?php  endif; ?>

<div class="mod_pagecontents_sec_box">

<?php  if (!empty($field_3_wysiwyg_content)): ?>
	<div class="mod_pagecontents_sec_box_l">
	<?php  echo $field_3_wysiwyg_content; ?>
	<!--mod_pagecontents_sec_box_l_end--></div>
<?php  endif; ?>

<?php  if (!empty($field_4_wysiwyg_content)): ?>
	<div class="mod_pagecontents_sec_box_r">
	<?php  echo $field_4_wysiwyg_content; ?>
	<!--mod_pagecontents_sec_box_r_end--></div>
<?php  endif; ?>

<!--mod_pagecontents_sec_box_end--></div>


