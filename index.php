<?php
if( isset( $_REQUEST['ip']) ) {
	$target = $_REQUEST[ 'ip' ];
	$cmd = shell_exec( 'ping  -c 4 ' . $target );
	echo  "<pre>{$cmd}</pre>";
}
show_source(__FILE__);

?>
