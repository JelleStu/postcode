<?php
	// Array with names
	$a = array("Anna", "Brittany", "Cinderella", "Diana", "Eva", "Fiona", "Gunda", "Hege", "Johanna", "Kitty", "Linda", "Nina", "Ophelia", "Petunia", "Amanda", "Reaquel", "Cindy", "Doris", "Eve", "Evita", "Sunniva", "Tove", "Unni", "Violet", "Liza", "Elizabeth", "Ellen", "Wenche", "Vicky", "Jelle")
	
	// get the q parameter from URL
	$q = $_GET["q"];

	$hint;

	// lookup all hints from array if $q is different from ""
	if (isset($q)) {
	    $q = strtolower($q);
	    $len=strlen($q);
	    foreach($a as $name) {
	        if (stristr($q, substr($name, 0, $len))) {
	            if (empty($hint)) {
	                $hint = $name;
	            } else {
	                $hint .= ", $name";
	            }
	        }
	    }
	}

	// Output "no suggestion" if no hint was found or output correct values
	echo empty($hint) ? "Rutjes Kutjes" : $hint
?>
