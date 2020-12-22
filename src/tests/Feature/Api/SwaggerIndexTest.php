<?php

namespace Tests\Feature;

use Tests\TestCase;

class ConsolesIndexTest extends TestCase
{
    /**
     * Get many object.
     *
     * @return void
     */
    public function testShow()
    {
        $response = $this->get('http://127.0.0.1:8000/swagger/consoles');

        $response->assertStatus(200);
    }
}
