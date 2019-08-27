<?php

namespace App\Http\Controllers\Admin;

use App\Models\Measurement;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class MeasurementsController extends Controller
{
    public function getByOrderId() {
        $measurement = Measurement::join('orders', 'orders.measurement_id', 'measurements.id')
            ->where('orders.id', $_GET['id'])->first();

        $url = url(config('constants.MEASUREMENT_FOLDER'));
        return view('admin.measurement.show', compact('measurement', 'url'));
    }

    public function getById()
    {
        $measurement = Measurement::where('id', $_GET['id'])->first();

        $url = url(config('constants.MEASUREMENT_FOLDER'));
        return view('admin.measurement.show', compact('measurement', 'url'));
    }

    public function downloadToZip($code) {
        Log::debug("downloadToZip===========");
        $zipName = 'measurement.zip';
        if(file_exists($zipName)) File::delete($zipName);

        $measurement = Measurement::where('code', $code)->first();
        $measurementCode = $measurement->code;
        $resPath = public_path().'/'. 'images/measurements' .'/'.$measurementCode ;
        $zip = new \ZipArchive();
        Log::error(public_path($zipName));
        Log::error($resPath);
        if($zip->open(public_path($zipName), \ZipArchive::CREATE)) {
            $numPictures = 6;
            for ($i=0; $i<$numPictures; $i++) {
                $zip->addFile($resPath . '/photo' . ($i + 1) . '.jpg', 'photo' . ($i + 1) . '.jpg');
            }
            $zip->addFile($resPath . '/model_l.stl', 'model_l.stl');
            $zip->addFile($resPath . '/model_r.stl', 'model_r.stl');
            $zip->addFile($resPath . '/'. $measurementCode.'_left_mes.csv', $measurementCode.'_left_mes.csv');
            $zip->addFile($resPath . '/'. $measurementCode.'_right_mes.csv', $measurementCode.'_right_mes.csv');
            $zip->close();
            $zipContent = file_get_contents($zipName);
            $headers = [
                'Content-type'=>'application/octet-stream',
                'Content-Disposition' => sprintf('attachment; filename="%s"', $zipName)
            ];
            return response()->make($zipContent,200, $headers);
        }
        else {
            throw new Exception("zip file could not be created: " . $archive->getStatusString());
        }
        Log::debug("downloadToZip=============");

    }
}
