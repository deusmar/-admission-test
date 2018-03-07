<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected function signedIn($user = null)
    {
        $user = $user ?: new \App\Models\User(factory('App\Models\User')->raw());

        $this->actingAs($user);
    }
}
