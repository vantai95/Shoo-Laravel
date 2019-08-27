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
        'App\Console\Commands\DailyBookingReportCdr',
        'App\Console\Commands\ImportNews',
        'App\Console\Commands\ResetAirlineLogoPath',
        'App\Console\Commands\GenerateSitemap'
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('task:daily_booking_report_cdr')->dailyAt('3:00');

        $schedule->command('task:import_news')->dailyAt('4:00');

        $schedule->command('sitemap:generate')->dailyAt('5:00');
    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
