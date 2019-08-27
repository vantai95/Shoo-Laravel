<?php

namespace App\Console\Commands;

use App\Models\Airline;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Exception;
use Illuminate\Support\Facades\Log;

class ResetAirlineLogoPath extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'task:reset_airline_logo_path';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reset airline logo path to {code}.png';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        try {
            $airlines = Airline::all();
            foreach ($airlines as $airline) {
                $oldFilePath = public_path(config('constants.AIRLINE_LOGO_FOLDER')) . '/' . $airline->code . '.png';
                if (File::exists($oldFilePath)) {
                    $airline->update([
                        'logo_url' => $airline->code . '.png'
                    ]);
                } else {
                    $airline->update([
                        'logo_url' => null
                    ]);
                }
            }
            $this->info('Airline logo is updated at' . Carbon::now());
            Log::info('Airline logo is updated at' . Carbon::now());
        } catch (Exception $e) {
            $this->error('Update airline logo failed: ' . $e->getMessage());
            Log::error('Update airline logod failed: ' . $e->getMessage());
        }
    }
}
