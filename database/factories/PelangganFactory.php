<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PelangganFactory extends Factory
{
    public function definition(): array
    {
        return [
            'kode_pelanggan' => fake()->unique()->bothify('PLG-####'),
            'nama' => fake()->name(),
            'kategori' => fake()->randomElement(['Retail', 'Grosir', 'Distributor']),
            'email' => fake()->unique()->safeEmail(),
            'tanggal_daftar' => fake()->date(),
            'alamat' => fake()->address(),
            'keterangan' => fake()->optional()->sentence(),
        ];
    }
}