<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoutingsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $appURL = env('APP_URL');

        $urls = [
            '/',
            '/login',
            '/register',
            '/impressum',
            '/datenschutzerklaerung'
        ];
        echo  PHP_EOL;

        foreach ($urls as $url){

            $response = $this->get($url);

            if((int)$response->status() !== 200){
                echo  $appURL . $url . ' (FAILED) did not return a 200.';
                $this->assertTrue(false);
            } else {
                echo $appURL . $url . ' (success ?)';
                $this->assertTrue(true);
            }
            echo  PHP_EOL;
        }
    }
}
