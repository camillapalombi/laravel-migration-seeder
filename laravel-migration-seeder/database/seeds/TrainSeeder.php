<?php
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 1; $i < 650; $i++) { 
            $trainData = [
                'company' => $faker->company(),
                'departureStation' => $faker->city(),
                'arrivalStation' => $faker->city(),
                'departureTime' => $faker->time(),
                'arrivalTime' => $faker->time(),
                'trainCode' => $faker->numerify('AF ######'),
                'carriagesNumber' => $faker->numberBetween($min = 8, $max = 35),
                'onTime' => $faker->boolean(),
                'cancelled' => $faker->boolean(),
                'date' => $faker->date()
            ];
            $train = new Train();
            $train->fill($trainData);
            $train->save();
        }
    }
}
