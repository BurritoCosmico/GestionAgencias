<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Agencia>
 */
class AgenciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre_agencia' => fake()->name(),
            'tipo_agencia' => fake()->name(),
            'ciudad' => fake()->name(),
            'estado' => fake()->name(),
            'pais' => fake()->name(),
            'nombre_cliente' => fake()->name(),
            'mail' => fake()->name(),
            'telefono' => fake()->name(),
            'agency' => fake()->name(),
            'fecha_compra' => fake()->date(),
            'modalidad' => fake()->name(),
            'monto_pago' => fake()->name(),
            'tipo_pago' => fake()->name(),
            'vendedor' => fake()->name(),
            'porcentaje' => fake()->name(),
        ];
    }
}
