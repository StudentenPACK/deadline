<?php
// https://github.com/facebook/php-sdk/
require_once 'facebook-php-sdk/facebook.php';
// http://www.kigkonsult.se/iCalcreator/
require_once 'iCalcreator/iCalcreator.class.php';

$config = array(
	'appId' => 'xxxx',//change to your fb app id
	'secret' => 'yyyy',//change to your fb app secret
	'pageId' => $_GET['fbpage'],//change to target fb page id
	'timezone' => 'Europe/Berlin',
	'timezoneDif' => 9*60*60,
);

date_default_timezone_set('Europe/Berlin');  

$facebook = new Facebook(array('appId'=>$config['appId'], 'secret'=>$config['secret']));

$page = $facebook->api('/'.$config['pageId']);

$v = new vcalendar(array('unique_id'=>$config['pageId']));
$v->setProperty('method', 'PUBLISH' );
$v->setProperty('x-wr-calname', $page['name']);
$v->setProperty('X-WR-CALDESC', $page['name']);
$v->setProperty('X-WR-TIMEZONE', $config['timezone']);

try {
	$cons = $facebook->api('/'.$config['pageId'].'/events');
	print_r($cons);
	$event_ids = array();
	foreach ($cons['data'] as $con) $event_ids[] = $con['id'];
	$events = $facebook->api('?date_format=U&ids='.implode(',', $event_ids));

	foreach ($events as $event){
		echo "<span style=\"color: #ccc;\">"; print_r($event); echo "</span></br>";
		echo "<b>name</b> ".$event['name']."<br/>";
		echo "<b>id</b> ".$event['id']."<br/>";
		echo "<b>owner</b> "; print_r($event['owner']); echo "<br/>";
		// $e = & $v->newComponent('vevent');
		// $e->setProperty('dtzid',$config['timezone']);
		// $d = explode(',', date('Y,m,d,H,i,s', $event['start_time']-$config['timezoneDif']));
		echo "<b>start_time</b> ".date('Y/m/d H:i:s',$event['start_time'])."<br/>";
		echo "<b>start_time adjusted</b> ".date('Y/m/d H:i:s',$event['start_time']-$config['timezoneDif'])."<br/>";
		// $e->setProperty('dtstart', $d[0], $d[1], $d[2], $d[3], $d[4], $d[5]);
		// $d = explode(',', date('Y,m,d,H,i,s', $event['end_time']-$config['timezoneDif']));
		echo "<b>end_time</b> ".date('Y/m/d H:i:s',$event['end_time'])."</br/>";
		echo "<b>end_time adjusted</b>".date('Y/m/d H:i:s',$event['end_time']-$config['timezoneDif'])."</br/>";
		// $e->setProperty('dtend', $d[0], $d[1], $d[2], $d[3], $d[4], $d[5]);
		echo "<b>location</b> ".$event['location']."<br/>";
		// $e->setProperty('location', $event['location']);
		// $e->setProperty('summary', $event['name']);
		echo "<b>description</b> ".$event['description']."<br/>";
		// $e->setProperty('description', $event['description']);
		// $e->setProperty('url', 'http://www.facebook.com/event.php?eid='.$event['id']);
		echo "<b>venue</b> "; print_r($event['venue']); echo "<br/>";
		echo "<b>privacy</b> ".$event['privacy']."<br/>";
	}
} catch (Exception $e) {
	//ignore Exeptions (e.g. if there are no events)
}
// $v->returnCalendar();