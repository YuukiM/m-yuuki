<footer class="footer">
	<?php if(is_page( array('lessons', 'mentoring', 'private-lesson', 'private-lesson-famm') )) { ?>
		<small>アイコン提供：<a href="<?php echo esc_url('https://imagemart.aflo.com/ja/@MakotoHara'); ?>" target="_blank">MakotoHara</a>/イメージマート</small><br>
	<?php } else { ?>

	<?php } ?>
  ©Miyazaki Y&ucirc;ki All Rights Reserved.
</footer>

<?php if(is_page('home')) { ?>
  <a href="<?php echo esc_url(home_url('/lessons/')); ?>" class="footer-lesson-button" target="_blank">レッスン<br>について</a>
<?php } ?>
<?php wp_footer(); ?>
</body>
</html>