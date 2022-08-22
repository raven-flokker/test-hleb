<?php


	namespace App\Controllers\JsonRpc\src;



	use App\Controllers\JsonRpc\src\Library\Date;
	use Datto\JsonRpc\Evaluator;
	use Datto\JsonRpc\Exceptions\ArgumentException;
	use Datto\JsonRpc\Exceptions\MethodException;

	class Api implements Evaluator
	{
		public function evaluate($method, $arguments)
		{
			if ($method === 'dateTime') {
				return self::dateTime($arguments);
			}
			if ($method === 'MDateTime') {
				return self::MDateTime($arguments);
			}
			if ($method === 'milliseconds') {
				return self::milliseconds($arguments);
			}

			throw new MethodException();
		}


		private static function dateTime($parameters)
		{
			@list($a, $b) = $parameters;
			//var_dump(list($a, $b) = $parameters);
			return Date::dateTime($a, $b);
//			return microtime(true);
//			return date('Y-m-d H:i:s');
		}

		private static function MDateTime($parameters)
		{
			@list($a, $b) = $parameters;
//			var_dump($parameters);
			return Date::MDate($a, $b);
//			return microtime(true);
//			return date('Y-m-d H:i:s');
		}

		private static function milliseconds($parameters)
		{
			@list($a, $b) = $parameters;
			return Date::milliseconds($a, $b);
		}


	}