<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starship
 */

?>

</div><!-- /.row -->

</div><!-- /.container -->

<footer class="blog-footer">
<div class="col-sm-12 blog-main">
<a href="/contact" rel="nofollow">Обратная связь</a> | <a href="/sitemap">Карта сайта</a> | <a href="/o-proekte">О проекте</a> | <!--noindex--><a href="#">Поиск</a> | <a rel="nofollow" href="https://twitter.com/zachatieinforu" title="Twitter" target="_blank">Twitter</a><!--/noindex-->
</div>
				<p style = "font-size:12px;"><!--noindex-->&copy; 2015 - <?php echo date('Y'); ?> Zachatieinfo.ru - Зачатие ребенка от А до Я. Перепечатка материалов без письменного разрешения запрещена.
<br><strong>Внимание! Перед использованием информации проконсультируйтесь с врачом!</strong><!--/noindex-->
</p>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<?php wp_footer(); ?>

<script type="text/javascript" src="http://zachatieinfo.ru/sbox/simplebox_util.js"></script>
<script type="text/javascript">
(function(){
var boxes=[],els,i,l;
if(document.querySelectorAll){
els=document.querySelectorAll('a[rel=simplebox]');
Box.getStyles('simplebox_css','http://zachatieinfo.ru/sbox/simplebox.css');
Box.getScripts('simplebox_js','http://zachatieinfo.ru/sbox/simplebox.js',function(){
simplebox.init();
for(i=0,l=els.length;i<l;++i)
simplebox.start(els[i]);
simplebox.start('a[rel=simplebox_group]');
});
}
})();</script>
</body>
</html>
