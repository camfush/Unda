<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class GuestRedirectTest extends TestCase
{

  public function testGuestRedirect()
  {
    $response = $this->get('/myvideos');
    if($response->assertRedirect('/login'))
    {
      echo "Test Guest Redirect: SUCCESS \n";
    }
  }
}
