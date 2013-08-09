<?php 
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/head.php'); ?>

<body id="pagetop" class="blog">
<?php 
$this->inc('elements/header.php'); ?>

<article id="area_main">
<header class="mod_pageheader ex_clearfix">
<h1><span>blog</span><strong>ブログ</strong></h1>
<!--mod_pageheader_end--></header>

<div class="mod_breadcrumbs">
			<?php 
			$a = new GlobalArea('Breadcrumbs');
			$a->display($c);
			?>
<!-- mod_breadcrumbs_end --></div>

<section class="mod_pagecontents">
<h1 class="pagetitle">blog</h1>
<div id="area_primary">
			<?php 
			$a = new Area('Main');
			$a->display($c);
			?>
<!--area_primary_end--></div>

<div id="area_secondary">
<aside class="mod_blogrelation">
			<?php 
			$a = new GlobalArea('Side');
			$a->display($c);
			?>
<!--mod_blogrelation_inner_end--></div>
<!--mod_blogrelation_end--></aside>

<!--area_secondary_end--></div>

<!--mod_contents_end--></section>


<footer class="mod_mainfooter">
		<?php 
		$a = new GlobalArea('Footer lead');
		$a->display();
		?>
</footer>
<!--area_main_end--></article>


<?php $this->inc('elements/footer.php'); ?>