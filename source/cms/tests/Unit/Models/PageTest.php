<?php

namespace Test\Unit;

use App\Models\Page;
use App\Models\PageMeta;
use database\factories\ModelFactory;
use Tests\TestCase;

class PageTest extends TestCase
{
    public function testMeta()
    {
        $page = factory(Page::class)->create();
        $pagesMeta = factory(PageMeta::class, 4)->create();
        foreach ($pagesMeta as $pageMeta)
            $page->meta()->save($pageMeta);
        foreach ($pagesMeta as $pageMeta)
            $this->assertDatabaseHas('pages_meta', [
                'page_id' => $page->id,
                'id' => $pageMeta->id,
            ]);
    }
}