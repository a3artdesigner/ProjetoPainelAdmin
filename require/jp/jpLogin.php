<?php

	require_once"../class/ConDB.class.php";

	$lgn=new Login;

	print $lgn->setLogin($_GET['email'],$_GET['senha']);