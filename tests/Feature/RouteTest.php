<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class RouteTest extends TestCase
{
    public function testRoutes()
    {
      $this->withoutMiddleware();
      $user = User::find(1);
      $appURL = env('http://localhost:8000');

      $urls = [
        '/',
        '/upload',
        '/friends',
        '/myvideos',
        '/account',
        '/notifications',
        '/account/settings'
      ];

      echo "\n Testing Routes: \n";
      $response = $this->actingAs($user)->post('/search', ['search' => 'hi']);
      if((int)$response->status()!==200)
      {
        echo $appURL . '/search' . '(FAILED) did not return a 200.';
        $this->assertTrue(false);
      }
      else
      {

          echo $appURL . "/search: SUCCESS \n";
          $this->assertTrue(true);
      }


      foreach($urls as $url)
      {
        if($url == "/" || $url=='/login')
        {
          $response = $this->get($url);
          if((int)$response->status()!==200)
          {
            echo $appURL . $url . ' (FAILED) did not return a 200.';
            $this->assertTrue(false);
          }
          else
          {

              echo $appURL . $url . ": SUCCESS \n";
              $this->assertTrue(true);

          }
        }
        else
        {
          $response = $this->actingAs($user)->get($url);
          if((int)$response->status()!==200)
          {
            echo $appURL . $url . ' (FAILED) did not return a 200.';
            $this->assertTrue(false);
          }
          else
            {
              echo $appURL . $url . ": SUCCESS \n";
              $this->assertTrue(true);
            }
        }
      }
    }
  }
