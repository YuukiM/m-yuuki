<!doctype html>
<html <?php language_attributes(); ?>>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>宮崎祐樹・Webデザイン講師｜「わかった！」につなげるWebデザイン講師</title>
    <meta name="twitter:site" content="@myuuki_design">
    <meta name="theme-color" content="#117dbf">
    <link rel="icon" href="<?php echo get_theme_file_uri('/favicon.ico'); ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
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

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php if (is_page("home")): ?>
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
<?php elseif(is_page('private-lesson-famm') || is_page('profile')): ?>
	<!--nothing-->
<?php elseif(is_page('lessons') || is_page('private-lesson') || is_page('mentoring') ): ?>
<header class="lesson-header">
	<h1 class="lesson-header__inner">
		<a href="/lessons" class="lesson-header__heading">
			Yûki's Web Design Lessons
		</a>
		<span class="lesson-header__sub-heading">宮崎祐樹のWeb制作レッスン</span>
	</h1>
	<div class="lesson-gnav">
		<?php
		wp_nav_menu( array(
			'theme_location' => 'lesson-page-menu'
		) );
		?>
	</div>
	<input type="checkbox" class="drawer" id="drawer">
	<label for="drawer" class="drawer-open">
		<span></span>
	</label>
	<label for="drawer" class="drawer-close"></label>
	<div class="lesson-nav-sp">
		<?php
		wp_nav_menu( array(
			'theme_location' => 'lesson-page-sp'
		) );
		?>
	</div>
</header>

<?php endif; ?>