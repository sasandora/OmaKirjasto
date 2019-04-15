<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Teos;


class TeosTesti extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testaaTeosUusi()
    {
        $this->withoutMiddleware();
        $data = [
            'alkupenimi'=>"uusi kirja",
            'suominimi' =>"sama suomeksi",
            'painos' => "1",
            'kunto' => "4",
            'tyyppi' => "sidottu",
            'hinta' => "100",
            'suomentaja' => "minä"

        ];
        $response = $this->json('POST', '/teos',$data);
       // dump($response->getContent());
        $response->assertStatus(302);
    }
  
    public function testaaTeosHaku()
    {
        $this->withoutMiddleware();
        
        $response = $this->json('GET', '/teos');
        $response->assertStatus(200);
    }
    public function testaaTeosPoisto()
    {
        $this->withoutMiddleware();
        $delete = $this->json('DELETE ','/teos/13');
        $delete->assertStatus(302);
    }

}
