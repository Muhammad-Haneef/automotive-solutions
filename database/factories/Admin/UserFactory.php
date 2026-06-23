<?php

namespace Database\Factories\Admin;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_group_id' => 1,
            'vendor_id' => null,
            'type' => $this->faker->randomElement([1, 2]), // 1 = Regular User, 2 = Vendor
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'contact' => $this->faker->phoneNumber,
            'password' => Hash::make('password'),
            'dob' => $this->faker->date(),
            'gender' => $this->faker->randomElement([1, 2]),
            'profile_picture' => null,
            'email_verified_at' => Carbon::now(),
            'phone_verified_at' => Carbon::now(),
            'two_factor_enabled' => $this->faker->boolean,
            'account_status' => 1,
            'last_login_at' => Carbon::now(),
            'last_login_ip' => $this->faker->ipv4,
            'login_device_info' => $this->faker->userAgent,
            'newsletter_subscription' => $this->faker->boolean,
            'referral_code' => strtoupper($this->faker->lexify('???###')),
            'referred_by' => null,
            'customer_notes' => $this->faker->sentence,
            'sort_by' => 0,
            'is_active' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
