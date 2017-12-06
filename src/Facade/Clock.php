<?php 

namespace Lakshmaji\Clock\Facade;

// Inlcude namespace 
use Illuminate\Support\Facades\Facade;
 
/**
 * Clock - Facade to support integration with Laravel framework 
 *
 * @author     lakshmaji <lakshmajee88@gmail.com>
 * @package    Clock
 * @version    1.0.0
 * @since      Class available since Release 1.0.0
 */ 
class Clock extends Facade {
 
    protected static function getFacadeAccessor() { 
    	return 'clock'; 
    }
 
}
// end of class Clock
// end of file Clock.php