<?php

namespace com\cminds\mapsroutesmanager\controller;

use com\cminds\mapsroutesmanager\App;

class FreeController extends Controller {
	
	protected static $actions = array(
		array('name' => 'admin_menu', 'priority' => 56),
		array('name' => 'get_template_part_cmmrm', 'args' => 2, 'priority' => 100),
	);
	
	
	static function bootstrap() {
		if (!App::isPro())
			parent::bootstrap();
	}
	
	
	static function admin_menu() {
// 		add_submenu_page(App::PREFIX, 'About ' . App::getPluginName(), 'About', 'manage_options', self::getMenuSlug('about'), array(get_called_class(), 'about'));
// 		add_submenu_page(App::PREFIX, App::getPluginName() . ' User Guide', 'User Guide', 'manage_options', self::getMenuSlug('user-guide'),
// 			array(get_called_class(), 'userGuide'));
// 		add_submenu_page(App::PREFIX, 'Upgrade to '. App::getPluginName() .' Pro', 'Upgrade to Pro', 'manage_options', self::getMenuSlug('upgrade'),
// 			array(get_called_class(), 'upgradeToPro'));
	}
	
	
	static function getMenuSlug($slug) {
		return App::PREFIX . '-' . $slug;
	}
	
	static function about() {}
	
	static function userGuide() {}
	
	
	static function upgradeToPro() {
		wp_enqueue_style('cmmrm-backend');
		echo self::loadView('backend/template', array(
			'title' => 'Upgrade to Pro',
			'nav' => self::getBackendNav(),
			'content' => self::loadBackendView('upgrade') . SettingsController::getSectionExperts(),
		));
	}
	
	
	static function processRequest() {
		$fileName = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
		if (is_admin() AND $fileName == 'admin.php' AND !empty($_GET['page'])) switch ($_GET['page']) {
			case self::getMenuSlug('about'):
				wp_redirect(SettingsController::PAGE_ABOUT_URL);
				exit;
			case self::getMenuSlug('user-guide'):
				wp_redirect(SettingsController::PAGE_USER_GUIDE_URL);
				exit;
		}
	}
	
	
	static function get_template_part_cmmrm($slug, $name) {
		if ('pagination' == $name) {
			printf('<div class="cmmrm-referral">%s</div>', do_shortcode('[cminds_free_author]'));
		}
	}
	
}
