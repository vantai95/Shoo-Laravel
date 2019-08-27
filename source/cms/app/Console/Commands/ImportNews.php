<?php

namespace App\Console\Commands;

use App\Models\ActivityHistory;
use App\Models\News;
use App\Services\LogService;
use App\Services\RSSService;
use Illuminate\Console\Command;

class ImportNews extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'task:import_news';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import news from RSS feed';

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
            $urls = News::RSS_SOURCES;
            $allFeeds = [];

            foreach ($urls as $key => $url) {
                LogService::Log('Lấy tin từ RSS của ' . $key, ActivityHistory::CATEGORIES['NEWS']);
                $news = RSSService::GetNewsFeeds($key, $url);
                $allFeeds = array_merge($allFeeds, $news);
            }

            RSSService::saveFeeds($allFeeds);
        } catch (\Exception $ex) {
            $this->error($ex->getMessage());
            LogService::Log("Lấy tin từ RSS bị lỗi: " . $ex->getMessage(), ActivityHistory::CATEGORIES['NEWS']);
        }
    }
}
