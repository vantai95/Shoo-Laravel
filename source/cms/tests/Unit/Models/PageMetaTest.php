<?php

namespace Test\Unit;

use App\Models\Page;
use App\Models\PageMeta;
use App\Services\CommonService;
use database\factories\ModelFactory;
use Tests\TestCase;

class PageMetaTest extends TestCase
{
    public function testPage()
    {
        $pagesMeta = factory(PageMeta::class, 4)->create();
        $page = factory(Page::class)->create();
        foreach ($pagesMeta as $pageMeta)
            $page->meta()->save($pageMeta);
        foreach ($pagesMeta as $pageMeta)
            $this->assertDatabaseHas('pages_meta', [
                'page_id' => $page->id,
                'id' => $pageMeta->id,
            ]);
    }

    public function testStatus() {
        $pageMeta = factory(PageMeta::class)->create();
        $this->assertEquals('Available', $pageMeta->status());

        $pageMeta->available = false;
        $this->assertEquals('Unavailable', $pageMeta->status());
    }

//    public function testThumbnailUrl() {
//        ini_set('memory_limit', '256M');
//        $pageMeta = factory(PageMeta::class)->create();
//        CommonService::makeThumbnail(
//            config('constants.PAGE_FOLDER'),
//            $pageMeta->value,
//            getenv('APP_URL') . '/images/banner-17.png',
//            $pageMeta->id);
//    }

    public function testImageUrl() {
        $pageMeta = factory(PageMeta::class)->create();
        $this->assertEquals(getenv('APP_URL').'/'.config('constants.PAGE_DEFAULT_IMG'), $pageMeta->imageUrl());

        $pageMeta->value = 'test.png';
        $this->assertEquals(getenv('APP_URL').'/'.config('constants.PAGE_FOLDER')
            . '/test.png', $pageMeta->imageUrl());
    }
}