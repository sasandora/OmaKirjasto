<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Teos;
use App\Sarja;
use App\Kirjoittaja;
use App\Kustantaja;
use App\Kuva;



class TeosTesti extends TestCase
{
    use RefreshDatabase;

    public function testaaTeosHaku()
    {
        $this->withoutMiddleware();

        $response = $this->json('GET', '/teos');
        $response->assertStatus(200);
    }
    public function testaaSarjaKirjoittaja()
    {
        $this->withoutMiddleware();

        $kirjoittaja = Kirjoittaja::create([
            'nimi' => "kirjoittaja",
            'kuvaus' => "hieno ja uusi kirjoittaja",
        ]);
        $response = $this->get('/kirjoittajat');
        $response->assertStatus(200);
        $response->assertSee($kirjoittaja->nimi);
    }
    public function testaaSarjaKustantaja()
    {
        $this->withoutMiddleware();

        $kustantaja = Kustantaja::create([
            'nimi' => "kustantaja",
            'kotipaikka' => "nokian takana",
        ]);
        $response = $this->get('/kustantajat');
        $response->assertStatus(200);
        $response->assertSee($kustantaja->nimi);
    }

    public function testaaSarjaUusi()
    {
        $this->withoutMiddleware();

        $sarja = Sarja::create([
            'nimi' => "uusi kirja sarja",
            'kuvaus' => "hieno ja uusi kirja sarja",
        ]);
        $response = $this->get('/sarjat');
        $response->assertStatus(200);
        $response->assertSee($sarja->nimi);
    }


    public function testaaTeosUusi()
    {
        $this->withoutMiddleware();

        $kuva = Kuva::create([
            'url' => "https://s3-eu-west-1.amazonaws.com/bonnier-webshop/app/uploads/2018/05/09143652/9789510433324_frontcover_final-416x596.jpg",
            'kirjaid' => "1",
        ]);
    
        $teos = Teos::create([
            'alkupenimi' => "uusi kirja",
            'suominimi' => "sama suomeksi",
            'painos' => "1",
            'kunto' => "4",
            'tyyppi' => "sidottu",
            'hinta' => "100",
            'suomentaja' => "minä",
            'sarjaid' => 1,
            'kustantajaid' => 1,
            'kirjoittajaid' => 1
        ]);
        $response = $this->get('/teos/');
        $response->assertStatus(200);
        $response->assertSee($teos->alkupenimi);
    }
    public function testaaTeosUusiYksi()
    {
        $this->withoutMiddleware();
        $response = $this->get('/teos/1/');
        $response->assertStatus(200);
    }
}
