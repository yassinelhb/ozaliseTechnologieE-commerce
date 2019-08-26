<?php
	try {
    		$DB_con = new PDO('mysql:host=localhost;dbname=shoubikloubik;charset=utf8', 'root', '');
	} catch (Exception $e) {
        		die('Erreur : ' . $e->getMessage());
	}

?>
