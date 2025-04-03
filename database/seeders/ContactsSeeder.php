<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Repositories\ContactRepositoryInterface;

class ContactsSeeder extends Seeder
{
    private $contactRepository;

    public function __construct(ContactRepositoryInterface $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contactInfo = [
          "email"        => "RanchiRealEstate@email.com",
          "phone"        => "0120-2013011",
          "city"         => "Ranchi",
          "street_name"  => "Gali No. 5",
          "house_number" => "10036"
        ];

        $this->contactRepository->create($contactInfo);
    }
}
