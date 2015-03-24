<?php
namespace Grav\Plugin;

use Grav\Common\Page\Collection;
use Grav\Common\Plugin;
use Grav\Common\Grav;
use Grav\Common\Page\Page;
use Grav\Common\Page\Pages;
use Grav\Common\Page\Types;


class TemplatePlugin extends Plugin
{
	public static function getSubscribedEvents() {
    return [
        'onPluginsInitialized' => ['onPluginsInitialized', 0],
    ];
	}

	public function onPluginsInitialized(){
		require_once __DIR__.'/Mobile_Detect.php';
		$detect = new Mobile_Detect;

		//$array = \Grav\Common\File\CompiledYamlFile::instance("/home/sarahgarcin/Sites/usg-2015/user/themes/usg/usg.yaml". YAML_EXT);
		//print( __DIR__);
		//print_r($array);

		//$current_theme_string = "Current theme: " . $this->grav['config']->get('system.pages.theme');
		// $this->grav['config']->get('system.pages.theme');

		// $theme = $this->grav['config']->get('system.pages.theme');
		// $mobiletheme = str_replace($theme, $theme, 'mobile');
		//print_r( $this->grav['themes']->all());

		//if($detect->isMobile()) {
		//}

	
	}


}
?>