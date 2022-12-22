/**
* Clear Smarty cache and compile folders.
*/
public static function clearSmartyCache()
{
	$smarty = Context::getContext()->smarty;
	Tools::clearCache($smarty);
	Tools::clearCompile($smarty);
}

/**
* Clear XML cache folder.
*/
public static function clearXMLCache()
{
	foreach (scandir(_PS_ROOT_DIR_ . '/config/xml', SCANDIR_SORT_NONE) as $file) {
		$path_info = pathinfo($file, PATHINFO_EXTENSION);
		if (($path_info == 'xml') && ($file != 'default.xml')) {
			self::deleteFile(_PS_ROOT_DIR_ . '/config/xml/' . $file);
		}
	}
}

/**
* Clear theme cache.
*/
public static function clearCache()
{
	$files = array_merge(
		glob(_PS_THEME_DIR_ . 'assets/cache/*', GLOB_NOSORT),
		glob(_PS_THEME_DIR_ . 'cache/*', GLOB_NOSORT)
	);

	foreach ($files as $file) {
		if ('index.php' !== basename($file)) {
			Tools::deleteFile($file);
		}
	}

	$version = (int) Configuration::get('PS_CCCJS_VERSION');
	Configuration::updateValue('PS_CCCJS_VERSION', ++$version);
	$version = (int) Configuration::get('PS_CCCCSS_VERSION');
	Configuration::updateValue('PS_CCCCSS_VERSION', ++$version);
}