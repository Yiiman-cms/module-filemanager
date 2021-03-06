<?php
	namespace system\modules\filemanager\controllers;
	use system\lib\Controller;
	
	/**
	 * Created by tokapps TM.
	 * Programmer: gholamreza beheshtian
	 * Mobile:09353466620
	 * Company Phone:05138846411
	 * Site:http://tokapps.ir
	 * Date: 12/29/2018
	 * Time: 2:49 PM
	 */
	
	class DefaultController extends Controller
	{
		public function actionIframe(){
			$this->layout='@system/modules/filemanager/views/layouts/main.php';
			return $this->render( 'iframe');
		}
		
		public function actionIndex(){
			return $this->render( 'index');
		}
		
		public function actionWidgetIframe(){
			$this->layout='@system/modules/filemanager/views/layouts/main.php';
			return $this->render( 'widget-iframe');
		}
		
	}
