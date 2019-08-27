<?php

namespace App\Services;

use App;
use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Log;
use Illuminate\Support\Facades\Session;
use App\Models\Currency;

class CommonService
{
    public static function formatFullDate($date)
    {
        if (empty($date)) {
            return '';
        }
        return date('Y-m-d', strtotime($date));
    }

    public static function formatShortDate($date)
    {
        if (empty($date)) {
            return '';
        }
        return date('Y-m-d', strtotime($date));
    }

    public static function formatLongDate($date)
    {
        if (empty($date)) {
            return '';
        }
        return date('Y-m-d H:i:s', strtotime($date));
    }

    public static function formatFlightTime($date)
    {
        if (empty($date)) {
            return '';
        }
        return date('H:i Y-m-d', strtotime($date));
    }

    public static function formatShortFlightTime($date)
    {
        if (empty($date)) {
            return '';
        }
        return date('H:i', strtotime($date));
    }

    public static function formatSmsTime($date)
    {
        if (empty($date)) {
            return '';
        }
        return date('d-m-Y/H:i', strtotime($date));
    }

    public static function formatEmailTime($date)
    {
        if (empty($date)) {
            return '';
        }
        return date('H:i d-m-Y', strtotime($date));
    }

    public static function formatDuration($minutes)
    {
        $hours = (int)($minutes / 60);
        $minutes = $minutes % 60;
        return $hours . 'h' . $minutes . "'";
    }

    public static function formatPrice($price)
    {
        return number_format($price, 0, '.', ',');
    }


    public static function formatPriceBaseCodeExchange($price,$code,$exchangeRate=1)
    {  
        return $code." ".number_format($exchangeRate*$price, 0, '.', ',');
    }
    public static function formatPriceVND($price)
    {
        return number_format($price, 0, ',', '.') . " VND";
    }

    public static function formatInteger($number)
    {
        return number_format($number, 0, ',', '.');
    }

    public static function correctSearchKeyword($keyword)
    {
        $keyword = str_replace(' ', '%', $keyword);
        return "%$keyword%";
    }

    public static function genBookingNumber()
    {
        return strtoupper(str_random(config('constants.BOOKING_NO_LENGTH')));
    }

    public static function genNapasPaymentNo($bookingNo)
    {
        return config('constants.NAPAS.BOOKING_PREFIX') . $bookingNo;
    }

    public static function genTransactionId($bookingNo)
    {
        return $bookingNo . '-' . Carbon::now()->timestamp;
    }

    public static function genGotadiTransactionId($bookingNo, $id)
    {
        return config('api.SUPPLIER.GOTADI.TRANSACTION_PREFIX') . $bookingNo . '_' . $id;
    }

    public static function genOtpString($length)
    {
        if (config('constants.OTP_TEXT_ENABLE')) {
            return config('constants.OTP_TEST_TEXT');
        }

        return strtoupper(str_random($length));
    }

    public static function queryStringUrl($path = null, $qs = array(), $secure = null)
    {
        $url = app('url')->to($path, $secure);
        if (count($qs)) {

            foreach ($qs as $key => $value) {
                $qs[$key] = sprintf('%s=%s', $key, urlencode($value));
            }
            $url = sprintf('%s?%s', $url, implode('&', $qs));
        }
        return $url;
    }

    public static function asciiText($text)
    {
        if (empty($text)) {
            return $text;
        }
        return Str::ascii($text);
    }

    public static function internationalPhoneNumber($text, $countryCode = '84')
    {
        if (empty($text)) {
            return $text;
        }

        if (starts_with($text, '0')) {
            return $countryCode . substr($text, 1);
        }

        if (starts_with($text, '+')) {
            return substr($text, 1);
        }

        return $text;
    }

    public static function getPreviousUrl($request)
    {
        $currentPage = explode('/', explode('admin/', $request->fullUrl())[1])[0];

        if (!empty(session('mainPage'))) {

            $pageAndQueries = explode('?', explode('admin/', session('mainPage'))[1]);

            $page = $pageAndQueries[0];

            $queries = isset($pageAndQueries[1]) ? $pageAndQueries[1] : null;

            if ($page == $currentPage) {

                return url("admin/$page?$queries");
            }
        }
        return url("admin/$currentPage");
    }

    public static function checkPermission($permissionKey, $isValue = false)
    {
        $permissions = session('permissions');
        if (empty($permissions)) {
            $permissions = Auth::user()->allPermissions();
            session(['permissions' => $permissions]);
        }

        if ($isValue) {
            $permission = $permissionKey;
        } else {
            $permission = Role::PERMISSIONS[$permissionKey];
        }

        return isset($permissions[$permission]) && $permissions[$permission];
    }

    public static function makeThumbnail($imageFolder, $image, $defaultImage, $customId)
    {
        $thumbFolder = config('constants.THUMBNAIL.FOLDER');
        $thumbWidth = config('constants.THUMBNAIL.WIDTH');
        $thumbHeight = config('constants.THUMBNAIL.HEIGHT');
        if ( !empty($image) && File::exists(public_path("$imageFolder/$image")) ) {
            $imageDetails = getimagesize("$imageFolder/$image");
            $originalWidth = $imageDetails[0];
            $originalHeight = $imageDetails[1];
            if ($originalWidth > $originalHeight) {
                $newWidth = $thumbWidth;
                $newHeight = intval($originalHeight * $newWidth / $originalWidth);
            } else {
                $newHeight = $thumbHeight;
                $newWidth = intval($originalWidth * $newHeight / $originalHeight);
            }
            $dest_x = intval(($thumbWidth - $newWidth) / 2);
            $dest_y = intval(($thumbHeight - $newHeight) / 2);
            if ($imageDetails[2] == IMAGETYPE_GIF) {
                $imgt = "ImageGIF";
                $imgcreatefrom = "ImageCreateFromGIF";
            }
            if ($imageDetails[2] == IMAGETYPE_JPEG) {
                $imgt = "ImageJPEG";
                $imgcreatefrom = "ImageCreateFromJPEG";
            }
            if ($imageDetails[2] == IMAGETYPE_PNG) {
                $imgt = "ImagePNG";
                $imgcreatefrom = "ImageCreateFromPNG";
            }
            if ($imgt) {
                $old_image = $imgcreatefrom("$imageFolder/$image");
                $new_image = imagecreatetruecolor($thumbWidth, $thumbHeight);
                imagecopyresized($new_image, $old_image, $dest_x, $dest_y, 0, 0, $newWidth, $newHeight, $originalWidth, $originalHeight);
                $thumbFileName = $customId . "_thumb_" . time() . image_type_to_extension(IMAGETYPE_PNG);
                $imgt($new_image, "$thumbFolder/$thumbFileName");
                //Log::info("$thumbFileName - $defaultImage");
                return $thumbFolder . "/" . $thumbFileName;
            }
        }
        return CommonService::makeThumbnail('images', $defaultImage, null, $customId);
    }


    function limitStrlen($input, $length, $ellipses = true, $strip_html = true, $skip_html)
    {
        // strip tags, if desired
        if ($strip_html || !$skip_html)
        {
            $input = strip_tags($input);

            // no need to trim, already shorter than trim length
            if (strlen($input) <= $length)
            {
                return $input;
            }

            //find last space within length
            $last_space = strrpos(substr($input, 0, $length), ' ');
            if($last_space !== false)
            {
                $trimmed_text = substr($input, 0, $last_space);
            }
            else
            {
                $trimmed_text = substr($input, 0, $length);
            }
        }
        else
        {
            if (strlen(strip_tags($input)) <= $length)
            {
                return $input;
            }

            $trimmed_text = $input;

            $last_space = $length + 1;

            while(true)
            {
                $last_space = strrpos($trimmed_text, ' ');

                if($last_space !== false)
                {
                    $trimmed_text = substr($trimmed_text, 0, $last_space);

                    if (strlen(strip_tags($trimmed_text)) <= $length)
                    {
                        break;
                    }
                }
                else
                {
                    $trimmed_text = substr($trimmed_text, 0, $length);
                    break;
                }
            }

            // close unclosed tags.
            $doc = new \DOMDocument();
            $doc->loadHTML($trimmed_text);
            $trimmed_text = $doc->saveHTML();
        }

        // add ellipses (...)
        if ($ellipses)
        {
            $trimmed_text .= '...';
        }

        return $trimmed_text;
    }
    
    static function getCurrencyCodeByLanguage($lang){
        $code = 'USD';
        if($lang=='vi'){
            $code = 'VNĐ';
        }
        return $code;
    }

    static function getExchangeRate($code)
    {
        $exchangeRate = 1;
        $currency = Currency::where('code','=',$code)->select('exchange_rate')->first();
        if(!empty($currency)){
            $exchangeRate = $currency->exchange_rate;
        }
        return $exchangeRate;
    }
}