<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Storage;
use App;
use Log;

class downloadFeetImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    
    protected $measurementCode;
    protected $platform;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($measurementCode,$platform)
    {
        //
        $this->measurementCode = $measurementCode;
        $this->platform = $platform;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //Call thirt party (avatar3d) to get 6 image
        $measurementCode =  $this->measurementCode;
        $FTP_FOLDER = env('FTP_ANDROID_FOLRDER');
        if($this->platform == 'iOS'){
            $FTP_FOLDER = env('FTP_IOS_FOLRDER');
        }
        if($this->platform == 'Android'){
            $FTP_FOLDER = env('FTP_ANDROID_FOLRDER');
        }
        $resPath = "https://" . env('FTP_USERNAME') . ":" .  env('FTP_PASSWORD') . "@" . env('FTP_HOST') . '/' .$FTP_FOLDER.'/'.
            $measurementCode;
        $desPath = base_path() ."/". config('constants.MEASUREMENT_FOLDER') . $measurementCode;

        Log::info("downloadFeetImage resPath=".$resPath);     
        Log::info("downloadFeetImage desPath=".$desPath);    

        $numPictures = 6;
        for ($i=0; $i<$numPictures; $i++) {
            $fileRes = $resPath . '/photo' . ($i + 1) . '.jpg';
            $fileDes = $desPath . '/photo' . ($i + 1) . '.jpg';
            if(!file_exists($fileDes)) {
                Log::info("B". $measurementCode . '/photo' . ($i + 1) . '.jpg');
               Storage::disk('public_uploads')->put( $measurementCode . '/photo' . ($i + 1) . '.jpg' , fopen($fileRes, 'r'));
            }
        }

        $resModelLeftFilePath = $resPath . '/'  . 'model_l.stl';
        $defModelLeftFilePath = $desPath . '/'  . 'model_l.stl';         
        if(!file_exists($defModelLeftFilePath)) {
            Storage::disk('public_uploads')->put( $measurementCode . '/' . 'model_l.stl' , fopen($resModelLeftFilePath, 'r'));
        }
       

        $resModelRightFilePath = $resPath . '/'  . 'model_r.stl';
        $defModelRightFilePath = $desPath . '/'  . 'model_r.stl';
        if(!file_exists($defModelRightFilePath)) {
            Storage::disk('public_uploads')->put( $measurementCode . '/' . 'model_r.stl' , fopen($resModelRightFilePath, 'r'));
        }        

        $resModelLeftCSVFilePath = $resPath . '/'  . $measurementCode.'_left_mes.csv';
        $defModelLeftCSVFilePath = $desPath . '/'  . $measurementCode.'_left_mes.csv';
        if(!file_exists($defModelLeftCSVFilePath)) {
            Storage::disk('public_uploads')->put( $measurementCode . '/' . $measurementCode.'_left_mes.csv' , fopen($resModelLeftCSVFilePath, 'r'));
        }

        $resModelRightCSVFilePath = $resPath . '/'  . $measurementCode.'_right_mes.csv';
        $defModelRightCSVFilePath = $desPath . '/'  . $measurementCode.'_right_mes.csv';
        if(!file_exists($defModelRightCSVFilePath)) {
            Storage::disk('public_uploads')->put( $measurementCode . '/' . $measurementCode.'_right_mes.csv' , fopen($resModelRightCSVFilePath, 'r'));
        }

    }
}
