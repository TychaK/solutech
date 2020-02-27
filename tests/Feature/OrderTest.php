<?php

namespace Tests\Feature;

use App\User;
use Faker\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Laravel\Passport\Passport;
use Tests\TestCase;

class OrderTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }


    public function testPostOrder()
    {
        $token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYjhkZDM0YzZiYWM1M2JhZjhjMzU5OWU0MzA1MmU5YjY5NzRkMTIzMzAyZGI4Zjc1M2JlYjYxNWRlNWFiYWI2NmVhMGU3ZjBiOTk3N2E0MTUiLCJpYXQiOjE1ODI4MjAyMTYsIm5iZiI6MTU4MjgyMDIxNiwiZXhwIjoxNjE0NDQyNjE2LCJzdWIiOiI0Iiwic2NvcGVzIjpbXX0.IySBkvDdfld3H3gY08iHlFGWpsYbCagHBauHKdbW90mNT8d6I3C9e_mBFRE8rKkeCpqwFdGrV7ahYSHHtheYGnxac-doEenQHpM-qruP88XAoYdnqPP4qUzerRrQrBegVI91BaqqRI3cVR9ESxC39UMkESBAXcmsQ0SxguOw-kYZNcErAM5HkEEDmwyeddODUf2jvOF2kEHWp_cM0LtO4dAonZsNWiLn38zLU1zjo7YPZg7ufUZPEjnwkG0eh51-hR-04p4bXfW451fvpMlRn6InFHOP7ILtaHG3HGp3P1u9b5AWbtWmHBI7908ebf6h-fnVWu0SWTadyhgKE8wTBbZWUHpJs-j73DEcSmswC43EMsHhFzL__BHcRrm_16JK-M6ioK3NnbG1nXiF6uR1KaAI6FNxmLHvbSsaUxlQgSbc_HeSZFlDZk8JV5g_59V5sPU3WO-pnw9JfMULxBZXUpzNsk3ua82_mWbP3z1D3mLMTCJAqTNJEaQgmBWu2rxNdF64IEu8I4Xo0t8lR0bFAt_Hl45RGlW7Und5kBLcd4WulYzrvBEHIyoz_EnO83-PfGZ3BAES0Du-8A5eugstCmaRCbwachTHnSY2T-8q_ZeB9ZEFtGqTm4yKwUlQVHIYe6GlSAKR5ONWLbIYCrTmpiKspiI9lB5PJ-RrwnG448k';
        $faker = Factory::create();
        $data = [
            'order_number' => $faker->randomNumber(5)
        ];
        $headers = [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . $token,
        ];

        $this->withHeaders($headers)->json('POST', 'api/orders', $data)->assertStatus(201);
    }
}
