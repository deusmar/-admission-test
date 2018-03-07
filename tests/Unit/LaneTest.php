<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class LaneTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * @test
     *
     * User Story 7
     * Acceptance Criteria 1 and 2
     */
    function a_lane_requires_a_name()
    {
        $this->signedIn();

        $this->json('post', route('lanes.store', ['name' => null]))
            ->assertJsonValidationErrors('name');

        $lane = factory('App\Models\Lane')->create();

        $this->json('put', route('lanes.update', ['id' => $lane->id, 'name' => null]))
            ->assertJsonValidationErrors('name');
    }
}
