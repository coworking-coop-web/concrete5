<?php 
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/head.php'); ?>

<body id="pagetop" class="top">
<?php 
$this->inc('elements/header.php'); ?>

<div id="area_slide">
<div class="flexslider">
			<?php 
			$a = new Area('Slide');
			$a->display($c);
			?>
</div>
<!--area_slide_end--></div>


<article id="area_main">

<div class="mod_topcontents">
<div class="mod_indexmenu ex_clearfix ex_opaity">
<section class="mod_indexmenu_block">
			<?php 
			$a = new Area('Top Menu01');
			$a->display($c);
			?>
<!--mod_indexmenu_block_end--></section>
<section class="mod_indexmenu_block">
			<?php 
			$a = new Area('Top Menu02');
			$a->display($c);
			?>
<!--mod_indexmenu_block_end--></section>
<section class="mod_indexmenu_block">
			<?php 
			$a = new Area('Top Menu03');
			$a->display($c);
			?>
<!--mod_indexmenu_block_end--></section>
<section class="mod_indexmenu_block">
			<?php 
			$a = new Area('Top Menu04');
			$a->display($c);
			?>
<!--mod_indexmenu_block_end--></section>
<section class="mod_indexmenu_block">
			<?php 
			$a = new Area('Top Menu05');
			$a->display($c);
			?>
<!--mod_indexmenu_block_end--></section>
<section class="mod_indexmenu_block">
			<?php 
			$a = new Area('Top Menu06');
			$a->display($c);
			?>
<!--mod_indexmenu_block_end--></section>
<!--mod_indexmenu_end--></div>
<!--mod_topcontents_end--></div>

<footer class="mod_mainfooter">
		<?php 
		$a = new GlobalArea('Footer lead');
		$a->display();
		?>
</footer>
<!--area_main_end--></article>


<?php $this->inc('elements/footer.php'); ?>