<!doctype html>
<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Webデザイン講師の宮崎祐樹です。Webデザインのレッスンならお任せください。わかりやすい指導に定評があります。">
    <meta property="og:url" content="https://m-yuuki.com/">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Webデザイン講師の宮崎祐樹です。Webデザインのレッスンならお任せください。わかりやすい指導に定評があります。">
    <meta property="og:site_name" content="宮崎祐樹・Webデザイン講師｜初心者からのわかりやすいレッスン">
    <meta property="og:image" content="https://m-yuuki.com/ogp.png">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@myuuki_design">
    <meta name="theme-color" content="#117dbf">
    <link rel="icon" href="<?php echo get_theme_file_uri('/favicon.ico'); ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Sofia&display=swap" rel="stylesheet">

    <script>
        (function(d) {
            var config = {
							kitId: 'rdv5had',
							scriptTimeout: 3000,
							async: true
						},
						h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
        })(document);
    </script>
    <title>宮崎祐樹・Webデザイン講師｜初心者からのわかりやすいレッスン</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php if (is_home()): ?>
	<header class="header">
		<ul class="gnav">
			<li class="gnav__item">
				<a href="#">top</a>
			</li>
			<li class="gnav__item">
				<a href="#Biography">経歴</a>
			</li>
			<li class="gnav__item">
				<a href="#Skills">スキル</a>
			</li>
			<li class="gnav__item">
				<a href="#Service">サービスと料金</a>
			</li>
		</ul>
	</header>
<?php elseif(is_page("private-lesson-famm")): ?>
	<!--nothing-->
<?php elseif(is_page()): ?>
<header class="page-header">
	<h1 class="small-h1">宮崎祐樹のWeb制作レッスン</h1>
	<ul class="gnav">
		<li class="gnav__item">
			<a href="/">メイントップ</a>
		</li>
		<li class="gnav__item">
			<a href="/#Biography">経歴</a>
		</li>
		<li class="gnav__item">
			<a href="/#Skills">スキル</a>
		</li>
		<li class="gnav__item">
			<a href="/#Service">サービスと料金</a>
		</li>
	</ul>
	<ul class="gnav gnav--bottom">
		<li class="gnav__item">
			<a href="#">プライベートレッスン</a>
		</li>
		<li class="gnav__item">
			<a href="#content">内容</a>
		</li>
		<li class="gnav__item">
			<a href="#price">料金</a>
		</li>
		<li class="gnav__item">
			<a href="#inquiry">ご相談</a>
		</li>
	</ul>
</header>

<?php endif; ?>