<?php /*	Plugin Name: MoserLX Lightbox Magnific	Plugin URI: http://moserlx.com	Description: Responsive Lightbox for Wordpress (Magnific Popup)	Version: 0.1	Author: Moser Konstantinos Paulos	Author URI: http://moserlx.com	Licence: GPL2*/// Based on Iacovos Constantinou pluginfunction msrlx_greeklish_url($text) {	if ( !is_admin() ) return $text;		$expressions = array(		'/[αΑ][ιίΙΊ]/u' => 'ai',		'/[οΟ][ιίΙΊ]/u' => 'oi',				'/[Εε][ιίΙΊ]/u' => 'ei',			    '/[αΑ][υύΥΎ]([θΘκΚξΞπΠσςΣτTφΡχΧψΨ]|\s|$)/u' => 'af$1',	    '/[αΑ][υύΥΎ]/u' => 'av',	    '/[εΕ][υύΥΎ]([θΘκΚξΞπΠσςΣτTφΡχΧψΨ]|\s|$)/u' => 'ef$1',	    '/[εΕ][υύΥΎ]/u' => 'ev',		'/[οΟ][υύΥΎ]/u' => 'ou',	    '/(^|\s)[μΜ][πΠ]/u' => '$1b',	    '/[μΜ][πΠ](\s|$)/u' => 'b$1',	    '/[μΜ][πΠ]/u' => 'mp',	    '/[νΝ][τΤ]/u' => 'nt',	    '/[τΤ][σΣ]/u' => 'ts',	    '/[τΤ][ζΖ]/u' => 'tz',		'/[γΓ][γΓ]/u' => 'ng',	    '/[γΓ][κΚ]/u' => 'gk',	    '/[ηΗ][υΥ]([θΘκΚξΞπΠσςΣτTφΡχΧψΨ]|\s|$)/u' => 'if$1',	    '/[ηΗ][υΥ]/u' => 'iu',	    '/[θΘ]/u' => 'th',	    '/[χΧ]/u' => 'ch',	    '/[ψΨ]/u' => 'ps',			'/[αάΑΆ]/u' => 'a',		'/[βΒ]/u' => 'v',		'/[γΓ]/u' => 'g',		'/[δΔ]/u' => 'd',		'/[εέΕΈ]/u' => 'e',		'/[ζΖ]/u' => 'z',		'/[ηήΗΉ]/u' => 'i',		'/[ιίϊΙΊΪ]/u' => 'i',		'/[κΚ]/u' => 'k',		'/[λΛ]/u' => 'l',		'/[μΜ]/u' => 'm',		'/[νΝ]/u' => 'n',		'/[ξΞ]/u' => 'x',		'/[οόΟΌ]/u' => 'o',		'/[πΠ]/u' => 'p',		'/[ρΡ]/u' => 'r',		'/[σςΣ]/u' => 's',		'/[τΤ]/u' => 't',		'/[υύϋΥΎΫ]/u' => 'i',		'/[φΦ]/iu' => 'f',		'/[ωώ]/iu' => 'o'	);		$text = preg_replace( array_keys($expressions), array_values($expressions), $text );	return $text;}add_filter('sanitize_title', 'msrlx_greeklish_url', 1);?>