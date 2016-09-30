<?php

use Laravel\Lumen\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->post('/user',['id' => '1'])
        ->seeJsonEquals([
                'created' => true,
             ]);

        $this->assertEquals(
            $this->app->version(), $this->response->getContent()
        );
    }
}
