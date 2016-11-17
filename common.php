<?php

require_once 'vendor/autoload.php';

$lock=pui::glyphicon('lock');

$menu=array(
	pui::link('/about.php', 'About'),
	pui::link('/contact.php', 'Contact Us'),
	pui::link('/guitars/', 'Guitars'),
	pui::link('/inventory/', 'Inventory'),
	pui::link('/lessons.php', 'Lessons'),
	pui::link('/kits.php', 'Kits & Classes')
);

$brand = pui::brand('/')->add(
	pui::image('/mmm.png')->style(array(
			'max-height'=>'26px',
			'height'=>'auto',
			'width'=>'auto')),
	'Magic Music Mill'
);

$page = pui::page('Magic Music Mill', array('lang' => 'en'))->add(
	pui::meta(array('name'=>'description', 'content'=>'Magic Music Mill')),
	pui::Bootstrap('flatly'),
	pui::favicon('//magicmusicmill.com/favicon.ico?v=2'),
	pui::GoogleAnalytics('UA-79023355-1'),
	pui::FitImages(),
	pui::navbar($brand)->addContent($menu)
);
