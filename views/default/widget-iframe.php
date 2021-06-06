<?php
	/**
	 * Created by tokapps TM.
	 * Programmer: gholamreza beheshtian
	 * Mobile:09353466620
	 * Company Phone:05138846411
	 * Site:http://tokapps.ir
	 * Date: 12/29/2018
	 * Time: 3:19 PM
	 */
	
	/**
	 * @var $this \yii\web\View
	 */
	
	use system\lib\View;
	use system\modules\filemanager\assets\FileManagerAsset;
	
	FileManagerAsset::register( $this );
	$path=str_replace( '\\' , '/', Yii::$app->Options->UploadDir);
	
	
	$this->registerJs( $this->render( 'app-widget.js' ,['path'=>$path]) , View::POS_HEAD );
	

?>
<style>
	angular-filemanager .container{
		padding: 0;
		height: 100%;
	}
	angular-filemanager .item-list.clearfix {
		height: 361px;
	}
</style>
<div class="container" data-ng-app="FileManagerApp">
	<angular-filemanager></angular-filemanager>
</div>
