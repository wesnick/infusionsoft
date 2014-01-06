<?php

namespace Wesnick\Infusionsoft\Util;
use Faker\Generator;
use Wesnick\Infusionsoft\Proxy\Contact;


/**
 * Class FakerFactory
 * 
 * @author Wesley O. Nichols <wesley.o.nichols@gmail.com>
 */
class FakerFactory
{

    /**
     * @var Generator
     */
    private $faker;

    /**
     * @var int
     */
    private $seed;

    function __construct(Generator $faker, $seed = null)
    {
        $this->faker = $faker;
        $this->seed = $seed;

        if ($this->seed) {
            $this->faker->seed($this->seed);
        }
    }


    public function createContact()
    {

        $contact = new Contact();
        $contact->FirstName = $this->faker->firstName;
        $contact->LastName = $this->faker->lastName;
        $contact->Company = $this->faker->company;

        $contact->StreetAddress1 = $this->faker->streetAddress;
        $contact->StreetAddress2 = $this->faker->streetSuffix;
        $contact->City = $this->faker->city;
        $contact->State = $this->faker->state;
        $contact->PostalCode = $this->faker->postcode;
        $contact->Country = $this->faker->country;

        return $contact;
    }

} 
