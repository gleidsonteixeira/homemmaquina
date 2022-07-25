<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FizzBuzzTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_divisao()
    {
        $fizzbuzz = 0;
        for($i = 1; $i <= 100; ++$i){
            if($i % 3 == 0 && $i % 7 == 0){
                $fizzbuzz++;
            }
        }

        $this->assertTrue($fizzbuzz == 0);
        $this->assertFalse($fizzbuzz > 0);

        // if($fizzbuzz > 0){
        //     $response->assertStatus(400);
        // }else{
        //     $response->assertStatus(200);
        // }
    }
}
