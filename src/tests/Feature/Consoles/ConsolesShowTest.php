<?php

namespace Tests\Feature\Consoles;

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
        $response = $this->get('http://127.0.0.1:8000/swagger/consoles/swagger');

        $response->assertStatus(200);
    }
}
