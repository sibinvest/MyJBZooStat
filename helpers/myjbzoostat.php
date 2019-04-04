<?php

defined( '_JEXEC' ) or die;

	
class MyjbzoostatHelper
{

//	public static function getActions()

	 	public static function open_http($url, $method = 'curl')
	 	{
	 		if($method == 'curl' && function_exists('curl_init'))
	 		{
			   
			    $component = JComponentHelper::getComponent('com_myjbzoostat');
			    $params = json_decode($component->params);
			    $app_token =  $params->app_token;
			    
			    $headr = array();
			    $headr[] = 'Authorization: OAuth '. $app_token . '';
	 			$ch = curl_init();
	 			curl_setopt($ch, CURLOPT_URL, $url);
	 			curl_setopt($ch, CURLOPT_POST, false);
	 			curl_setopt($ch, CURLOPT_HTTPHEADER, $headr);
	 			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	 			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	 			$result = curl_exec($ch);
	 			curl_close($ch);
	 		}
	 		else
	 		{
	 			$result = file_get_contents($url);
	 		}

	 		return $result;
	 	}

	 	public static function open_httppost($url, $method = 'curl')
	 	{
	 		if($method == 'curl' && function_exists('curl_init'))
	 		{
			   
			    $component = JComponentHelper::getComponent('com_myjbzoostat');
			    $params = json_decode($component->params);
			    $app_token =  $params->app_token;
			   
			    $headr = array();
			    $headr[] = 'Authorization: OAuth '. $app_token . '';
	 			$ch = curl_init();
	 			curl_setopt($ch, CURLOPT_URL, $url);
	 			curl_setopt($ch, CURLOPT_POST, true);
			    curl_setopt($ch, CURLOPT_HTTPHEADER, $headr);
	 			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	 			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	 			$result = curl_exec($ch);
	 			curl_close($ch);
	 		}
	 		else
	 		{
	 			$result = file_get_contents($url);
	 		}

	 		return $result;
	 	}

}

class MetrikaHelper
{
	public static function open_http($url, $method = 'curl')
	{
		if($method == 'curl' && function_exists('curl_init'))
		{
			
			$component = JComponentHelper::getComponent('com_myjbzoostat');
			$params = json_decode($component->params);
			$app_token =  $params->app_token;
			
			$headr = array();
			$headr[] = 'Authorization: OAuth '. $app_token . '';
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_POST, false);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headr);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
			$result = curl_exec($ch);
			curl_close($ch);
		}
		else
		{
			$result = file_get_contents($url);
		}

		return $result;
	}
}
