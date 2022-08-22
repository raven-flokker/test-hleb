<?php


	namespace App\Controllers\JsonRpc\src\Library;


	class Date
	{
		public static function dateTime($a, $b)
		{
			$milliseconds = round(microtime($b) * 1000);
			return date($a) . ' ' . $milliseconds;
		}

		public static function MDate($a, $b)
		{
			return date($a);

		}

		public static function milliseconds($a, $b)
		{
			return round(microtime($b) * 1000);
		}
		//return microtime(true);
		//	return date('Y-m-d H:i:s');
	}