<?php 
namespace App\DataFixtures;

use App\Entity\Book;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class BookFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();

        for ($i = 0; $i < 1000001; $i++) {
            $book = new Book();
            $book->setTitle($faker->sentence);
            $book->setAuthor($faker->name);
            $book->setDescription($faker->paragraph);
            $book->setPublicationYear($faker->year);
            $book->setIsbn($faker->isbn13);
            $book->setImagePath($faker->imageUrl(800, 600, 'books', true, 'Faker'));

            $manager->persist($book);
        }

        $manager->flush();
    }
}
