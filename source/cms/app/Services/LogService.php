<?php

namespace App\Services;

use App\Models\ActivityHistory;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LogService
{
    public static function Log($content, $category)
    {
        if (empty($content) || empty($category)) {
            return;
        }

        try {
            ActivityHistory::create([
                'user_id' => Auth::id(),
                'content' => $content,
                'activity_type' => $category
            ]);
        } catch (Exception $ex) {
            Log::error($ex->getMessage());
        }
    }

    public static function SystemLog($content, $category)
    {
        if (empty($content) || empty($category)) {
            return;
        }

        try {
            ActivityHistory::create([
                'content' => $content,
                'activity_type' => $category
            ]);
        } catch (Exception $ex) {
            Log::error($ex->getMessage());
        }
    }
}