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

		if($detect->isMobile() && !$detect->isTablet()) {
			$this->grav['config']->set('system.pages.theme', 'usg-mobile');
		}
		else{
			$this->grav['config']->set('system.pages.theme', 'usg');
		}
	
	}


}
?>