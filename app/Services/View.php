<?php

namespace App\Services;

class View
{
	static public function load($fileName, $params = array())
	{
		$file = __DIR__ . '/../../views/' . $fileName . '.php';
		if (file_exists($file)) {
			include(__DIR__ . '/../../views/parts/header.php');
			extract($params);
			include($file);
			include(__DIR__ . '/../../views/parts/footer.php');
		} else {
			throw new \Error('Cannot locate template');
		}
	}
}
