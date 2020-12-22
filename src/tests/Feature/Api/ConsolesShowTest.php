<?php

namespace Tests\Feature\Api;

use Tests\TestCase;

class ConsolesShowTest extends TestCase
{
    /**
     * Get many object.
     *
     * @return void
     */
    public function testShow()
    {
        $response = $this->get('http://127.0.0.1:8000/api/v1/swagger/consoles/swagger');

        $response->assertStatus(200);
    }
}
