<?php
ini_set('display_errors', true);
	require_once __DIR__ . '/include.php';
	$delete=new deletebook();
	$delete->delete();
?>