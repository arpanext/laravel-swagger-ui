<?php

namespace Tests\Feature\Api;

use Tests\TestCase;

class ConsolesIndexTest extends TestCase
{
    /**
     * Get many object.
     *
     * @return void
     */
    public function testIndex()
    {
        $response = $this->get('http://127.0.0.1:8000/api/v1/swagger/consoles');

        $response->assertStatus(200);
    }
}
