<?php  if ( ! defined('FRAMEWORK')) exit('No direct script access allowed');
 /*************************************************
  * 	@name Main Config File For EMP Framework for php
  *	@package		EMP
  * 	@file				Config.php
 * 	@author		We Excel Team
 **************************************************/
/*************************************************
 * 	SITE URL
 **************************************************/
$conf['site_url']	= (isset($_SERVER['HTTPS']) &&  $_SERVER['HTTPS'] == 'on' )? 'https://'.$_SERVER['SERVER_NAME']."/":'http://'.$_SERVER['SERVER_NAME']."/";
/*************************************************
 * 	DEFAULT CHAR SET
 **************************************************/
$conf['charset'] = 'UTF-8';
/*************************************************
 * 	LOGGING DIRECTORY
 **************************************************/
 $conf['log_dir']='';
 /*************************************************
 * 	LOG DATE FORMAT
 **************************************************/
$conf['log_date_format']='Y-m-d H:i:s';
/*************************************************
 * 	AUTOLOAD
 **************************************************/
$conf['autoload']='';
/*************************************************
 * 	EMAIL SETTINGS
 **************************************************/
$conf['email']=array();
 /*************************************************
 * 	EMAIL ATTACH PATH
 **************************************************/
 $conf['attach_path']='';
 /*************************************************
 * 	SMS SETTINGS
 **************************************************/
 $conf['sms']=array('url'=>'https://messaging.ecommunicate.co.za/smsbatch/sms?', 'user'=>'izwedev', 'pass'=>'usaubyasd25', 'client_ref'=>'izwe','email'=>'eitanp@weexcel.co.za');
 /*************************************************
 * 	WEB SERVICE
 **************************************************/
 $conf['webservice']=array('user' => 'webservice', 'pass' => 'p4ssw0rd', 'uid'=>'4913839504face881d5fe93099044851');
 
 
 
 
 