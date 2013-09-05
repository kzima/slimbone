<?php
/* functions used through out the app */

/* i18n Twig extension */
function loadTwigi18n (){
	$loader = new Twig_Loader_Filesystem();
	$twig   = new Twig_Environment($loader, array(
	        // 'cache' => 'cache',
	        ));

	//$twig->clearCacheFiles();

	\Slim\Extras\Views\Twig::$twigOptions = array(
	    'debug' => true
	);
	$twig->addExtension(new Twig_Extensions_Extension_I18n());

	\Slim\Extras\Views\Twig::$twigExtensions = array(
	    'Twig_Extension_Debug',
	    'Twig_Extensions_Extension_I18n'
	);
}

/* */
function setLocality($locality){

	if (defined('LC_MESSAGES'))
	{
	    /**
	     * Set the specific locale information we want to change. We could also
	     * use LC_MESSAGES, but because we may want to use other locale information
	     * for things like number separators, currency signs, we'll say all locale
	     * information should be updated.
	     */
	    setlocale(LC_MESSAGES, $locality); // Linux
	}
	else
	{
	    putenv("LC_ALL={$locality}"); // windows
	}

	/**
	 * Because the .po file is named messages.po, the text domain must be named
	 * that as well. The second parameter is the base directory to start
	 * searching in.
	 */
	bindtextdomain('messages', '../app/locale');

	/**
	 * Tell the application to use this text domain, or messages.mo.
	 */
	textdomain('messages');
}
