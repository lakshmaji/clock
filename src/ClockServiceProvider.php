<?php 

// Define namespace
namespace Lakshmaji\Clock;

// Include namespace
use Illuminate\Support\ServiceProvider;


/**
 * ServicePrivider to support integration with 
 * Laravel framework
 *
 * @author     lakshmaji <lakshmajee88@gmail.com>
 * @package    Clock
 * @version    1.4.4
 * @since      Class available since Release 1.0.0
 */
class ClockServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     * Publishes config file 
     *
     * @package Clock
     * @return  void
     * @author  lakshmaji <lakshmajee88@gmail.com>
     * @version 1.0.0
     * @since   Method available since Release 1.0.0
     */
    public function boot()
    {
    }

    //-------------------------------------------------------------------------


    /**
     * Register the application services.
     *
     * @return  void
     * @author  lakshmaji <lakshmajee88@gmail.com>
     * @package Clock
     * @version 1.0.0
     * @since   Method available since Release 1.0.0
     */
    public function register()
    {
        if (method_exists(\Illuminate\Foundation\Application::class, 'singleton')) {
            $this->app->singleton('clock', function($app) {
                return new Clock;
            });
        } else {
            $this->app['clock'] = $this->app->share(function($app) {
                return new Clock;
            });
        }
    }

    //-------------------------------------------------------------------------

}
// end of ClockServiceProvider class
// end of file ClockServiceProvider.php 

