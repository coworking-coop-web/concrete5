<?php 
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>

<article id="area_main">
<header class="mod_pageheader ex_clearfix">
<h1><span>About</span><strong>コワーキング協同組合について</strong></h1>
<!--mod_pageheader_end--></header>

<div class="mod_breadcrumbs">
			<?php 
			$a = new GlobalArea('Breadcrumbs');
			$a->display($c);
			?>
<!-- mod_breadcrumbs_end --></div>

<section class="mod_pagecontents">
<?php	 print $innerContent; ?>
<!--mod_contents_end--></section>


<footer class="mod_mainfooter">
<p class="lead">コワーキング協同組合は、新しい働き方で社会、暮らしを豊かなものにかえていきます。</p>
<p class="pagetop"><a class="smoothScroll" href="#pagetop"><img src="<?php echo $this->getThemePath(); ?>/common/img/pagetop.gif" width="100" height="48" alt="ページの上部へ戻る"></a></p>
</footer>
<!--area_main_end--></article>


<?php $this->inc('elements/footer.php'); ?>