<!DOCTYPE html>
<html>

<?php
if(! isset($_COOKIE['username']))
{
Header("Location:login.php");
exit;
}
?>

<head>
	<meta charset="UTF-8">
	<title>Blog</title>
	<link rel="stylesheet" type="text/css" href="css/index.css"/>
</head>
<body>
	<header>
		<h1>Yaghijaun主页</h1>
		<ul id="index_tag">
			<li class=""><a href="#">首页</a></li>
			<li class=""><a href="#">分类</a></li>
			<li class=""><a href="#">推荐</a></li>
			<li class=""><a href="#">关于</a></li>
		</ul>
	</header>
	<article>
		<p class="data">2017-01-09</p>
		<div class="content">
			<h2>Django学习路径（1）</h2>
			<p>鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿</p>
			<p>鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿</p>
			<p>鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿</p>
		</div>
		<hr class="body-hr"/>
		<p class="data">2017-01-07</p>
		<div class="content">
			<h2>Django学习路径（2）</h2>
			<p>鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿</p>
			<p>鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿</p>
			<p>鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿</p>
		</div>
		<hr class="body-hr"/>
		<p class="data">2017-01-05</p>
		<div class="content">
			<h2>Django学习路径（3）</h2>
			<p>鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿</p>
			<p>鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿</p>
			<p>鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿</p>
		</div>
		<hr class="body-hr"/>
		<p class="data">2017-01-01</p>
		<div class="content">
			<h2>Django学习路径（4）</h2>
			<p>鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿</p>
			<p>鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿</p>
			<p>鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿鹿</p>
		</div>
		<hr class="body-hr"/>
		<div class="load">
			<p>点击加载更多...</p>
		</div>
	</article>
	<footer>
		<p>Copyright@2016&nbsp;杨慧娟</p>
		<P>www.yaghijaun.com&nbsp;yaghijaun's blog</P>
	</footer>
</body>
</html>
