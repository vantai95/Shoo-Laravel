<?php

namespace App\Console\Commands;

use App\Models\Order;
use Carbon\Carbon;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class DailyBookingReportCdr extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'task:daily_booking_report_cdr';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create daily booking report as cdr file.';

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
            $date = Carbon::today()->addDays(-1);
            $stringDate = str_replace('-', '', substr($date, 0, 10));
            $fileName = 'BOOKING_' . $stringDate . '.cdr';
            $startDay = (new Carbon($date))->startOfDay();
            $endDay = (new Carbon($date))->endOfDay();
            $Orders = Order::where('created_at', '>=', $startDay)
                ->where('updated_at', '<=', $endDay)
                ->whereIn('status', [
                    Order::STATUS['PAID'],
                    Order::STATUS['BOOKED'],
                    Order::STATUS['BOOK_ERROR']
                ]);
            $numOfOrders = $Orders->count();
            $totalOfOrders = $Orders->sum('total_price');
            $content = "GOTADI#0#DIGITAL#BOOKING#$numOfOrders#$totalOfOrders#$numOfOrders#$totalOfOrders#$stringDate";
            Storage::put(config('constants.CDR') . "/$fileName", $content);

            $this->info('A booking cdr file is created at ' . Carbon::now());
            Log::info('A booking cdr file is created at ' . Carbon::now());
        } catch (Exception $e) {
            $this->error('Create booking cdr file failed: ' . $e->getMessage());
            Log::error('Create booking cdr file failed: ' . $e->getMessage());
        }
    }
}
