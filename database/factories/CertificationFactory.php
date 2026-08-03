<?php

namespace Database\Factories;

use App\Models\Certification;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Certification>
 */
class CertificationFactory extends Factory
{
    protected $model = Certification::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->words(3, true) . ' Certification',
            'issuer' => $this->faker->company(),
            'issuer_logo' => null,
            'issued_at' => $this->faker->date(),
            'expires_at' => null,
            'credential_url' => $this->faker->url(),
            'certificate_image' => null,
            'verified' => true,
            'sort_order' => 0,
        ];
    }
}
