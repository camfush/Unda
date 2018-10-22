<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class RegisterTest extends TestCase
{

  public function testRegister()
  {
    $this->withoutMiddleware();
    $response = $this->call('POST', '/register', [
    'name' => 'Specks',
    'email' => 'goodone@specks.com',
    'password' => '123123',
    ]);
    if($response->assertRedirect('/'))
    {
      echo "Test Register: SUCCESS \n";
    }
  }
}
