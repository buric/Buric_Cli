<?php

	require_once '../app/Mage.php';
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	Mage::app();

	Mage::helper('cli')->putSuccess("Test success message");
	Mage::helper('cli')->putError("Test error message");
	Mage::helper('cli')->putWarning("Test warning message");
	Mage::helper('cli')->putNotice("Test notification message");
	
	Mage::helper('cli')->puts("Custom styled message", array('underline', 'bg_light_magenta', 'bold'));
