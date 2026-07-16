<?php 
// no direct access
defined('_JEXEC') or die;

$moduleclass_sfx	= $params->get('moduleclass_sfx');
	
$names = array('ext_html');
$max = 100;
foreach($names as $name) {
	${$name} = array();
	for($i = 1; $i <= $max; ++$i) {
		${$name}[] = $params->get($name . $i);
	}
}

$ext_quotes= array();	
for($n=0;$n < count($ext_html);$n++) {	
	if( $ext_html[$n] != '') {
		$ext_quotes[] = $ext_html[$n];
	}
}
	
srand ((double) microtime() * 1000000);
$ext_random_number = rand(0,count($ext_quotes)-1);

require JModuleHelper::getLayoutPath('mod_random_html', $params->get('layout', 'default'));
?>