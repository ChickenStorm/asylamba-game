<?php
abstract class CTC {
	private static $running = FALSE;
	private static $events  = array();

	public static function createContext() {
		self::$create++;

		if (!self::$running) {
			self::$running = TRUE;
			self::$context++;
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public static function applyContext($token) {
		self::$apply++;

		if ($token AND count(self::$events) > 0) {
			usort(self::$events, function($a, $b) {
				return $a['timest'] < $b['timest'] ? -1 : 1;
			});

			$path = 'public/log/ctc/' . date('Y') . '-' . date('m') . '-' . date('d') . '.log';
			$logt = '> ' . date('H:i:s') . ', start to apply context' . "\n";
			
			foreach (self::$events as $k => $event) {
				call_user_func_array(array($event['object'], $event['method']), $event['args']);

				$logt .= '> [' . $event['date'] . '] ' . get_class($event['object']) . '(' . $event['object']->getId() . ')::' . $event['method'] . "\n";
			}

			$logt .= '> ' . date('H:i:s') . ', end of apply context' . "\n";
			$logt .= "\n";
			Bug::writeLog($path, $logt);

			self::$running = FALSE;
			self::$events  = array();
		}
	}

	public static function add($date, $object, $method, $args = array()) {
		if (!self::$running) {
			throw new Exception('CTC isn\'t running actually', 1);
		} else {
			self::$add++;

			$event = array(
				'timest' => strtotime($date), 
				'date' 	 => $date,
				'object' => $object,
				'method' => $method,
				'args'   => $args
			);

			self::$events[] = $event;
		}	
	}

	public static function size() {
		return count(self::$events);
	}

	private static $add     = 0;
	private static $create  = 0;
	private static $apply   = 0;
	private static $context = 0;

	public static function get() {
		return self::$events;
	}
}
?>