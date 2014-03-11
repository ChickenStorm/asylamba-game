<?php
if (CTR::getPage() == 'inscription' && (CTR::$get->get('step') == 1 || !CTR::$get->exist('step'))) {
	$color = 'color0';
} elseif (CTR::getPage() == 'inscription') {
	$color = 'color' . CTR::$data->get('inscription')->get('ally');
} else {
	$color = 'color' . CTR::$data->get('playerInfo')->get('color');
}

echo '<!DOCTYPE html>';
echo '<html lang="fr">';

echo '<head>';
	if (CTR::getPage() == 'inscription') {
		echo '<title>' . CTR::getTitle() . ' — ' . APP_SUBNAME . ' — Expansion</title>';
	} else {
		echo '<title>' . CTR::getTitle() . ' — ' . CTR::$data->get('playerInfo')->get('name') . ' — ' . APP_SUBNAME . ' — Expansion</title>';
	}

	echo '<meta charset="utf-8" />';
	echo '<meta name="description" content="' . APP_DESCRIPTION . '" />';

	echo '<link rel="stylesheet" media="screen" type="text/css" href="' . CSS . 'main.css" />';
	echo '<link rel="stylesheet" media="screen" type="text/css" href="' . CSS . 'module.css" />';
	echo '<link rel="stylesheet" media="screen" type="text/css" href="' . CSS . 'main.desktop.php?color=' . CTR::$data->get('playerInfo')->get('color') . '" />';
	if (CTR::getPage() == 'inscription') {
		echo '<link rel="stylesheet" media="screen" type="text/css" href="' . CSS . 'inscription.desktop.css" />';
	}
	echo '<link rel="icon" type="image/png" href="' . MEDIA . '/favicon/' . $color . '.png" />';
echo '</head>';
?>

<!-- <script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-42636532-2', 'expansion-lejeu.ch');
	ga('send', 'pageview');
</script> -->

<?php
echo '<body ';
	echo 'class="';
		echo $color;
		echo ' no-scrolling';
		echo (CTR::getPage() == 'inscription') ? ' inscription' : '';
	echo '" ';
	if (CTR::$data->exist('sftr')) {
		echo 'data-init-sftr="' . CTR::$data->get('sftr') . '"';
		CTR::$data->remove('sftr');
	} elseif (CTR::$get->exist('sftr')) {
		echo 'data-init-sftr="' . CTR::$get->get('sftr') . '"';
	} else {
		echo 'data-init-sftr="1"';
	}

echo '>';
?>