<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class FrontScriptTest extends TestCase
{
    public function test_front_script_does_not_reload_the_page_on_resize(): void
    {
        $path = dirname(__DIR__, 2) . '/public/front/js/script.js';

        $this->assertFileExists($path);

        $contents = file_get_contents($path);

        $this->assertStringNotContainsString('location.reload();', $contents);
    }
}
