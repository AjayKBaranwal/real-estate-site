<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Repositories\TypeRepositoryInterface;

class TypeSeeder extends Seeder
{
    private $typeRepository;

    public function __construct(TypeRepositoryInterface $typeRepository)
    {
        $this->typeRepository = $typeRepository;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
          [
            "en"  => ["name" => "Villa"],
            "hi"  => ["name" => "विला"],
            "hrv" => ["name" => "Villa"]
          ],
          [
            "en"  => ["name" => "House"],
            "hi"  => ["name" => "घर"],
            "hrv" => ["name" => "Kuća"]
          ],
          [
            "en"  => ["name" => "Apartment"],
            "hi"  => ["name" => "अपार्टमेंट"],
            "hrv" => ["name" => "Apartman"]
          ]
        ];

        foreach ($types as $type) {
            $this->typeRepository->create($type);
        }
    }
}
