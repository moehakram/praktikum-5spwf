<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class TestController extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testHome(): void
    {
        $response = $this->get('/');

        $response->assertSeeText('login');
    }

    public function testPrint(): void
    {
        ob_start();
        echo 'akram';

        $this->assertEquals('akram', ob_get_clean());
    }

    public function test_collect()
    {
        // Data untuk request
        $data = [
            'name' => 'Laptop',
            'kondisi' => 'Baik',
            'keterangan' => 'Laptop baru',
            'stok' => 10,
            'jenis' => 'Elektronik',
            'ruang' => 'Lab Komputer'
        ];

        $collection = collect($data);

        $this->assertEqualsCanonicalizing([10, 'Baik', 'Elektronik', 'Lab Komputer', 'Laptop', 'Laptop baru'], $collection->all());

   }

   function testTambah(){
    $hasil = 300*5;

    $this->assertEquals(1500, $hasil);
   }
}
