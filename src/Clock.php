<?php

/*
|--------------------------------------------------------------------------
| Clock class for implementing Clock features with laravel 
|--------------------------------------------------------------------------
|
*/

namespace Lakshmaji\Clock;


use Exception;
use Spatie\OpeningHours\OpeningHours;

/**
 * Clock - A Clock package for Clock store timings 
 *
 * @author     lakshmaji <lakshmajee88@gmail.com>
 * @package    Clock
 * @version    1.0.0
 * @since      Class available since Release 1.0.0
 */
class Clock
{

    public static function init($data)
    {
        // Sample input
        // [
        //     'monday' => ['09:00-12:00', '13:00-18:00'],
        //     'tuesday' => ['09:00-12:00', '13:00-18:00'],
        //     'wednesday' => ['09:00-12:00'],
        //     'thursday' => ['09:00-12:00', '13:00-18:00'],
        //     'friday' => ['09:00-12:00', '13:00-20:00'],
        //     'saturday' => ['09:00-12:00', '13:00-16:00'],
        //     'sunday' => [],
        //     'exceptions' => [
        //         '2016-11-11' => ['09:00-12:00'],
        //         '2016-12-25' => [],
        //         '01-01' => [], // Recurring on each 1st of january
        //         '12-25' => ['09:00-12:00'], // Recurring on each 25th of december
        //     ],
        // ]

        return OpeningHours::create($data);

    }

    //-------------------------------------------------------------------------


}
// end of Clock class
// end of file Clock.php
