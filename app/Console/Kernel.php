<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        // Commands\Inspire::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void.
     *Add the following cron entry to the server cron
     *https://laravel.com/docs/master/scheduling
     * * * * * php /path/to/artisan schedule:run >> /dev/null 2>&1
     */

    // protected function scheduledBackup(Schedule $schedule)
    // {
    //   $schedule->command('backup:run')
    //            ->->dailyAt('21:38');
    //            ->emailOutputTo('amalyareachlk@gmail.com');
    // }

}
