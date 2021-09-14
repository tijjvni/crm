<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Ticket;
use App\Models\TicketType;
use App\Models\User;

class TicketFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ticket::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'open' => $this->faker->boolean,
            'ticket_type_id' => TicketType::factory(),
            'subject' => $this->faker->regexify('[A-Za-z0-9]{200}'),
            'escalated' => User::factory(),
            'opened_by' => User::factory(),
            'opened_for' => User::factory(),
        ];
    }
}
