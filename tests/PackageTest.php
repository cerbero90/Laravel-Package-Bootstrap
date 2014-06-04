<?php

class PackageTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();
        $this->app->make('artisan')->call('migrate', [
            '--env' => 'testing',
            '--package' => 'foxted/package'
        ]);
    }

    /** @test */
    public function it_can_do_something(){ }

}