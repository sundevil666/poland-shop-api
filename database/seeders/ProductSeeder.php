<?php

namespace Database\Seeders;

use Faker\Generator;
use Illuminate\Container\Container;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * The current Faker instance.
     *
     * @var Generator
     */
    protected $faker;

    /**
     * Create a new seeder instance.
     *
     * @return void
     * @throws BindingResolutionException
     */
    public function __construct()
    {
        $this->faker = $this->withFaker();
    }

    /**
     * Get a new Faker instance.
     *
     * @return Generator
     * @throws BindingResolutionException
     */
    protected function withFaker(): Generator
    {
        return Container::getInstance()->make(Generator::class);
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => $this->faker->word(),
                'labelMark' => $this->faker->text('5'),
                'description' => $this->faker->text('100'),
                'discount' => $this->faker->numberBetween(1, 99),
                'price' => $this->faker->randomFloat(2, 0, 10000),
                'code' => Str::random(10),
                'preview' => $this->faker->imageUrl(),
                'category_id' => $this->faker->numberBetween(1, 7),
                'promoCod' => null,
                'status' => 0,
                'box_id' => 1,
                'size' => 7,
                'quantity' => $this->faker->numberBetween(1, 99),
                'unit_of_measure' => $this->faker->numberBetween(1, 99),
                'images' => json_encode([
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                ]),
                'weight' => $this->faker->numberBetween(0, 5),
                'type' => 'box',
            ],
            [
                'name' =>  Str::random(10),
                'labelMark' => $this->faker->text('5'),
                'description' => $this->faker->text('100'),
                'discount' => $this->faker->numberBetween(1, 99),
                'price' => $this->faker->randomFloat(2, 0, 10000),
                'code' => Str::random(10),
                'preview' => $this->faker->imageUrl(),
                'category_id' => $this->faker->numberBetween(1, 7),
                'promoCod' => null,
                'status' => 0,
                'box_id' => 1,
                'size' => 7,
                'quantity' => $this->faker->numberBetween(1, 99),
                'unit_of_measure' => $this->faker->numberBetween(1, 99),
                'images' => json_encode([
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                ]),
                'weight' => $this->faker->numberBetween(0, 5),
                'type' => 'box',
            ],
            [
                'name' =>  Str::random(10),
                'labelMark' => $this->faker->text('5'),
                'description' => $this->faker->text('100'),
                'discount' => $this->faker->numberBetween(1, 99),
                'price' => $this->faker->randomFloat(2, 0, 10000),
                'code' => Str::random(10),
                'preview' => $this->faker->imageUrl(),
                'category_id' => $this->faker->numberBetween(1, 7),
                'promoCod' => null,
                'status' => 0,
                'box_id' => 2,
                'size' => 107,
                'quantity' => $this->faker->numberBetween(1, 99),
                'unit_of_measure' => $this->faker->numberBetween(1, 99),
                'images' => json_encode([
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                ]),
                'weight' => $this->faker->numberBetween(0, 5),
                'type' => 'box',
            ],
            [
                'name' =>  Str::random(10),
                'labelMark' => $this->faker->text('5'),
                'description' => $this->faker->text('100'),
                'discount' => $this->faker->numberBetween(1, 99),
                'price' => $this->faker->randomFloat(2, 0, 10000),
                'code' => Str::random(10),
                'preview' => $this->faker->imageUrl(),
                'category_id' => $this->faker->numberBetween(1, 7),
                'promoCod' => null,
                'status' => 0,
                'box_id' => 2,
                'size' => 107,
                'quantity' => $this->faker->numberBetween(1, 99),
                'unit_of_measure' => $this->faker->numberBetween(1, 99),
                'images' => json_encode([
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                ]),
                'weight' => $this->faker->numberBetween(0, 5),
                'type' => 'box',
            ],
            [
                'name' =>  Str::random(10),
                'labelMark' => $this->faker->text('5'),
                'description' => $this->faker->text('100'),
                'discount' => $this->faker->numberBetween(1, 99),
                'price' => $this->faker->randomFloat(2, 0, 10000),
                'code' => Str::random(10),
                'preview' => $this->faker->imageUrl(),
                'category_id' => $this->faker->numberBetween(1, 7),
                'promoCod' => null,
                'status' => 0,
                'box_id' => 3,
                'size' => 1007,
                'quantity' => $this->faker->numberBetween(1, 99),
                'unit_of_measure' => $this->faker->numberBetween(1, 99),
                'images' => json_encode([
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                ]),
                'weight' => $this->faker->numberBetween(0, 5),
                'type' => 'box',
            ],
            [
                'name' =>  Str::random(10),
                'labelMark' => $this->faker->text('5'),
                'description' => $this->faker->text('100'),
                'discount' => $this->faker->numberBetween(1, 99),
                'price' => $this->faker->randomFloat(2, 0, 10000),
                'code' => Str::random(10),
                'preview' => $this->faker->imageUrl(),
                'category_id' => $this->faker->numberBetween(1, 7),
                'promoCod' => null,
                'status' => 0,
                'box_id' => 3,
                'size' => 1007,
                'quantity' => $this->faker->numberBetween(1, 99),
                'unit_of_measure' => $this->faker->numberBetween(1, 99),
                'images' => json_encode([
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                ]),
                'weight' => $this->faker->numberBetween(0, 5),
                'type' => 'box',
            ],
            [
                'name' =>  Str::random(10),
                'labelMark' => $this->faker->text('5'),
                'description' => $this->faker->text('100'),
                'discount' => $this->faker->numberBetween(1, 99),
                'price' => $this->faker->randomFloat(2, 0, 10000),
                'code' => Str::random(10),
                'preview' => $this->faker->imageUrl(),
                'category_id' => $this->faker->numberBetween(1, 7),
                'promoCod' => null,
                'status' => 0,
                'box_id' => 3,
                'size' => 1007,
                'quantity' => $this->faker->numberBetween(1, 99),
                'unit_of_measure' => $this->faker->numberBetween(1, 99),
                'images' => json_encode([
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                ]),
                'weight' => $this->faker->numberBetween(0, 5),
                'type' => 'box',
            ],
            [
                'name' =>  Str::random(10),
                'labelMark' => $this->faker->text('5'),
                'description' => $this->faker->text('100'),
                'discount' => $this->faker->numberBetween(1, 99),
                'price' => $this->faker->randomFloat(2, 0, 10000),
                'code' => Str::random(10),
                'preview' => $this->faker->imageUrl(),
                'category_id' => $this->faker->numberBetween(1, 7),
                'promoCod' => null,
                'status' => 0,
                'box_id' => 1,
                'size' => 5,
                'quantity' => $this->faker->numberBetween(1, 99),
                'unit_of_measure' => $this->faker->numberBetween(1, 99),
                'images' => json_encode([
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                ]),
                'weight' => $this->faker->numberBetween(0, 5),
                'type' => 'box',
            ],
            [
                'name' =>  Str::random(10),
                'labelMark' => $this->faker->text('5'),
                'description' => $this->faker->text('100'),
                'discount' => $this->faker->numberBetween(1, 99),
                'price' => $this->faker->randomFloat(2, 0, 10000),
                'code' => Str::random(10),
                'preview' => $this->faker->imageUrl(),
                'category_id' => $this->faker->numberBetween(1, 7),
                'promoCod' => null,
                'status' => 0,
                'box_id' => 1,
                'size' => 5,
                'quantity' => $this->faker->numberBetween(1, 99),
                'unit_of_measure' => $this->faker->numberBetween(1, 99),
                'images' => json_encode([
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                ]),
                'weight' => $this->faker->numberBetween(0, 5),
                'type' => 'box',
            ],
            [
                'name' =>  Str::random(10),
                'labelMark' => $this->faker->text('5'),
                'description' => $this->faker->text('100'),
                'discount' => $this->faker->numberBetween(1, 99),
                'price' => $this->faker->randomFloat(2, 0, 10000),
                'code' => Str::random(10),
                'preview' => $this->faker->imageUrl(),
                'category_id' => $this->faker->numberBetween(1, 7),
                'promoCod' => null,
                'status' => 0,
                'box_id' => 3,
                'size' => 70,
                'quantity' => $this->faker->numberBetween(1, 99),
                'unit_of_measure' => $this->faker->numberBetween(1, 99),
                'images' => json_encode([
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                ]),
                'weight' => $this->faker->numberBetween(0, 5),
                'type' => 'box',
            ],
            [
                'name' =>  Str::random(10),
                'labelMark' => $this->faker->text('5'),
                'description' => $this->faker->text('100'),
                'discount' => $this->faker->numberBetween(1, 99),
                'price' => $this->faker->randomFloat(2, 0, 10000),
                'code' => Str::random(10),
                'preview' => $this->faker->imageUrl(),
                'category_id' => $this->faker->numberBetween(1, 7),
                'promoCod' => null,
                'status' => 0,
                'box_id' => 2,
                'size' => 70,
                'quantity' => $this->faker->numberBetween(1, 99),
                'unit_of_measure' => $this->faker->numberBetween(1, 99),
                'images' => json_encode([
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                ]),
                'weight' => $this->faker->numberBetween(0, 5),
                'type' => 'box',
            ],
            [
                'name' =>  Str::random(10),
                'labelMark' => $this->faker->text('5'),
                'description' => $this->faker->text('100'),
                'discount' => $this->faker->numberBetween(1, 99),
                'price' => $this->faker->randomFloat(2, 0, 10000),
                'code' => Str::random(10),
                'preview' => $this->faker->imageUrl(),
                'category_id' => $this->faker->numberBetween(1, 7),
                'promoCod' => null,
                'status' => 0,
                'box_id' => 1,
                'size' => 74,
                'quantity' => $this->faker->numberBetween(1, 99),
                'unit_of_measure' => $this->faker->numberBetween(1, 99),
                'images' => json_encode([
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                ]),
                'weight' => $this->faker->numberBetween(0, 5),
                'type' => 'box',
            ],
            [
                'name' =>  Str::random(10),
                'labelMark' => $this->faker->text('5'),
                'description' => $this->faker->text('100'),
                'discount' => $this->faker->numberBetween(1, 99),
                'price' => $this->faker->randomFloat(2, 0, 10000),
                'code' => Str::random(10),
                'preview' => $this->faker->imageUrl(),
                'category_id' => $this->faker->numberBetween(1, 7),
                'promoCod' => null,
                'status' => 0,
                'box_id' => 3,
                'size' => 710,
                'quantity' => $this->faker->numberBetween(1, 99),
                'unit_of_measure' => $this->faker->numberBetween(1, 99),
                'images' => json_encode([
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                ]),
                'weight' => $this->faker->numberBetween(0, 5),
                'type' => 'box',
            ],
            [
                'name' =>  Str::random(10),
                'labelMark' => $this->faker->text('5'),
                'description' => $this->faker->text('100'),
                'discount' => $this->faker->numberBetween(1, 99),
                'price' => $this->faker->randomFloat(2, 0, 10000),
                'code' => Str::random(10),
                'preview' => $this->faker->imageUrl(),
                'category_id' => $this->faker->numberBetween(1, 7),
                'promoCod' => null,
                'status' => 0,
                'box_id' => 3,
                'size' => 700,
                'quantity' => $this->faker->numberBetween(1, 99),
                'unit_of_measure' => $this->faker->numberBetween(1, 99),
                'images' => json_encode([
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                ]),
                'weight' => $this->faker->numberBetween(0, 5),
                'type' => 'box',
            ],
            [
                'name' =>  Str::random(10),
                'labelMark' => $this->faker->text('5'),
                'description' => $this->faker->text('100'),
                'discount' => $this->faker->numberBetween(1, 99),
                'price' => $this->faker->randomFloat(2, 0, 10000),
                'code' => Str::random(10),
                'preview' => $this->faker->imageUrl(),
                'category_id' => $this->faker->numberBetween(1, 7),
                'promoCod' => null,
                'status' => 0,
                'box_id' => 3,
                'size' => 897,
                'quantity' => $this->faker->numberBetween(1, 99),
                'unit_of_measure' => $this->faker->numberBetween(1, 99),
                'images' => json_encode([
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                ]),
                'weight' => $this->faker->numberBetween(0, 5),
                'type' => 'box',
            ],
            [
                'name' =>  Str::random(10),
                'labelMark' => $this->faker->text('5'),
                'description' => $this->faker->text('100'),
                'discount' => $this->faker->numberBetween(1, 99),
                'price' => $this->faker->randomFloat(2, 0, 10000),
                'code' => Str::random(10),
                'preview' => $this->faker->imageUrl(),
                'category_id' => $this->faker->numberBetween(1, 7),
                'promoCod' => null,
                'status' => 0,
                'box_id' => 2,
                'size' => 27,
                'quantity' => $this->faker->numberBetween(1, 99),
                'unit_of_measure' => $this->faker->numberBetween(1, 99),
                'images' => json_encode([
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                ]),
                'weight' => $this->faker->numberBetween(0, 5),
                'type' => 'box',
            ],
            [
                'name' =>  Str::random(10),
                'labelMark' => $this->faker->text('5'),
                'description' => $this->faker->text('100'),
                'discount' => $this->faker->numberBetween(1, 99),
                'price' => $this->faker->randomFloat(2, 0, 10000),
                'code' => Str::random(10),
                'preview' => $this->faker->imageUrl(),
                'category_id' => $this->faker->numberBetween(1, 7),
                'promoCod' => null,
                'status' => 0,
                'box_id' => 2,
                'size' => 57,
                'quantity' => $this->faker->numberBetween(1, 99),
                'unit_of_measure' => $this->faker->numberBetween(1, 99),
                'images' => json_encode([
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                ]),
                'weight' => $this->faker->numberBetween(0, 5),
                'type' => 'box',
            ],
            [
                'name' =>  Str::random(10),
                'labelMark' => $this->faker->text('5'),
                'description' => $this->faker->text('100'),
                'discount' => $this->faker->numberBetween(1, 99),
                'price' => $this->faker->randomFloat(2, 0, 10000),
                'code' => Str::random(10),
                'preview' => $this->faker->imageUrl(),
                'category_id' => $this->faker->numberBetween(1, 7),
                'promoCod' => null,
                'status' => 0,
                'box_id' => 2,
                'size' => 73,
                'quantity' => $this->faker->numberBetween(1, 99),
                'unit_of_measure' => $this->faker->numberBetween(1, 99),
                'images' => json_encode([
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                ]),
                'weight' => $this->faker->numberBetween(0, 5),
                'type' => 'box',
            ],
            [
                'name' =>  Str::random(10),
                'labelMark' => $this->faker->text('5'),
                'description' => $this->faker->text('100'),
                'discount' => $this->faker->numberBetween(1, 99),
                'price' => $this->faker->randomFloat(2, 0, 10000),
                'code' => Str::random(10),
                'preview' => $this->faker->imageUrl(),
                'category_id' => $this->faker->numberBetween(1, 7),
                'promoCod' => null,
                'status' => 0,
                'box_id' => 2,
                'size' => 72,
                'quantity' => $this->faker->numberBetween(1, 99),
                'unit_of_measure' => $this->faker->numberBetween(1, 99),
                'images' => json_encode([
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                ]),
                'weight' => $this->faker->numberBetween(0, 5),
                'type' => 'box',
            ],
            [
                'name' =>  Str::random(10),
                'labelMark' => $this->faker->text('5'),
                'description' => $this->faker->text('100'),
                'discount' => $this->faker->numberBetween(1, 99),
                'price' => $this->faker->randomFloat(2, 0, 10000),
                'code' => Str::random(10),
                'preview' => $this->faker->imageUrl(),
                'category_id' => $this->faker->numberBetween(1, 7),
                'promoCod' => null,
                'status' => 0,
                'box_id' => 3,
                'size' => 7345,
                'quantity' => $this->faker->numberBetween(1, 99),
                'unit_of_measure' => $this->faker->numberBetween(1, 99),
                'images' => json_encode([
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                ]),
                'weight' => $this->faker->numberBetween(0, 5),
                'type' => 'box',
            ],
            [
                'name' =>  Str::random(10),
                'labelMark' => $this->faker->text('5'),
                'description' => $this->faker->text('100'),
                'discount' => $this->faker->numberBetween(1, 99),
                'price' => $this->faker->randomFloat(2, 0, 10000),
                'code' => Str::random(10),
                'preview' => $this->faker->imageUrl(),
                'category_id' => $this->faker->numberBetween(1, 7),
                'promoCod' => null,
                'status' => 0,
                'box_id' => 3,
                'size' => 743,
                'quantity' => $this->faker->numberBetween(1, 99),
                'unit_of_measure' => $this->faker->numberBetween(1, 99),
                'images' => json_encode([
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                ]),
                'weight' => $this->faker->numberBetween(0, 5),
                'type' => 'box',
            ],
            [
                'name' =>  Str::random(10),
                'labelMark' => $this->faker->text('5'),
                'description' => $this->faker->text('100'),
                'discount' => $this->faker->numberBetween(1, 99),
                'price' => $this->faker->randomFloat(2, 0, 10000),
                'code' => Str::random(10),
                'preview' => $this->faker->imageUrl(),
                'category_id' => $this->faker->numberBetween(1, 7),
                'promoCod' => null,
                'status' => 0,
                'box_id' => 2,
                'size' => 712,
                'quantity' => $this->faker->numberBetween(1, 99),
                'unit_of_measure' => $this->faker->numberBetween(1, 99),
                'images' => json_encode([
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                ]),
                'weight' => $this->faker->numberBetween(0, 5),
                'type' => 'box',
            ],
            [
                'name' =>  Str::random(10),
                'labelMark' => $this->faker->text('5'),
                'description' => $this->faker->text('100'),
                'discount' => $this->faker->numberBetween(1, 99),
                'price' => $this->faker->randomFloat(2, 0, 10000),
                'code' => Str::random(10),
                'preview' => $this->faker->imageUrl(),
                'category_id' => $this->faker->numberBetween(1, 7),
                'promoCod' => null,
                'status' => 0,
                'box_id' => 3,
                'size' => 56,
                'quantity' => $this->faker->numberBetween(1, 99),
                'unit_of_measure' => $this->faker->numberBetween(1, 99),
                'images' => json_encode([
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                ]),
                'weight' => $this->faker->numberBetween(0, 5),
                'type' => 'box',
            ],
            [
                'name' =>  Str::random(10),
                'labelMark' => $this->faker->text('5'),
                'description' => $this->faker->text('100'),
                'discount' => $this->faker->numberBetween(1, 99),
                'price' => $this->faker->randomFloat(2, 0, 10000),
                'code' => Str::random(10),
                'preview' => $this->faker->imageUrl(),
                'category_id' => $this->faker->numberBetween(1, 7),
                'promoCod' => null,
                'status' => 0,
                'box_id' => 2,
                'size' => 712,
                'quantity' => $this->faker->numberBetween(1, 99),
                'unit_of_measure' => $this->faker->numberBetween(1, 99),
                'images' => json_encode([
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                ]),
                'weight' => $this->faker->numberBetween(0, 5),
                'type' => 'box',
            ],
            [
                'name' =>  Str::random(10),
                'labelMark' => $this->faker->text('5'),
                'description' => $this->faker->text('100'),
                'discount' => $this->faker->numberBetween(1, 99),
                'price' => $this->faker->randomFloat(2, 0, 10000),
                'code' => Str::random(10),
                'preview' => $this->faker->imageUrl(),
                'category_id' => $this->faker->numberBetween(1, 7),
                'promoCod' => null,
                'status' => 0,
                'box_id' => 2,
                'size' => 7,
                'quantity' => $this->faker->numberBetween(1, 99),
                'unit_of_measure' => $this->faker->numberBetween(1, 99),
                'images' => json_encode([
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                ]),
                'weight' => $this->faker->numberBetween(0, 5),
                'type' => 'box',
            ],
            [
                'name' =>  Str::random(10),
                'labelMark' => $this->faker->text('5'),
                'description' => $this->faker->text('100'),
                'discount' => $this->faker->numberBetween(1, 99),
                'price' => $this->faker->randomFloat(2, 0, 10000),
                'code' => Str::random(10),
                'preview' => $this->faker->imageUrl(),
                'category_id' => $this->faker->numberBetween(1, 7),
                'promoCod' => null,
                'status' => 0,
                'box_id' => 3,
                'size' => 7,
                'quantity' => $this->faker->numberBetween(1, 99),
                'unit_of_measure' => $this->faker->numberBetween(1, 99),
                'images' => json_encode([
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                ]),
                'weight' => $this->faker->numberBetween(0, 5),
                'type' => 'box',
            ],
            [
                'name' =>  Str::random(10),
                'labelMark' => $this->faker->text('5'),
                'description' => $this->faker->text('100'),
                'discount' => $this->faker->numberBetween(1, 99),
                'price' => $this->faker->randomFloat(2, 0, 10000),
                'code' => Str::random(10),
                'preview' => $this->faker->imageUrl(),
                'category_id' => $this->faker->numberBetween(1, 7),
                'promoCod' => null,
                'status' => 0,
                'box_id' => 2,
                'size' => 73,
                'quantity' => $this->faker->numberBetween(1, 99),
                'unit_of_measure' => $this->faker->numberBetween(1, 99),
                'images' => json_encode([
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                ]),
                'weight' => $this->faker->numberBetween(0, 5),
                'type' => 'box',
            ],
            [
                'name' =>  Str::random(10),
                'labelMark' => $this->faker->text('5'),
                'description' => $this->faker->text('100'),
                'discount' => $this->faker->numberBetween(1, 99),
                'price' => $this->faker->randomFloat(2, 0, 10000),
                'code' => Str::random(10),
                'preview' => $this->faker->imageUrl(),
                'category_id' => $this->faker->numberBetween(1, 7),
                'promoCod' => null,
                'status' => 0,
                'box_id' => 1,
                'size' => 7,
                'quantity' => $this->faker->numberBetween(1, 99),
                'unit_of_measure' => $this->faker->numberBetween(1, 99),
                'images' => json_encode([
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                    $this->faker->imageUrl(),
                ]),
                'weight' => $this->faker->numberBetween(0, 5),
                'type' => 'box',
            ],
        ]);
    }
}