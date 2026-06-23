<?php

namespace Database\Factories\Admin;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Admin\SmsCategory;
use App\Models\Admin\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sms>
 */
class SmsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::pluck('id')->random(),
            'sms_category_id' => SmsCategory::pluck('id')->random(),
            'recipient_number' => $this->faker->numerify('+971#########'), // Fake UAE number
            'message' => $this->faker->sentence(10), // Random SMS text
            'status' => $this->faker->randomElement(['pending', 'sent', 'failed']), // Random status
            'response' => $this->faker->optional()->sentence(5), // Fake API response or null
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
