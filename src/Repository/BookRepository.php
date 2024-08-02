<?php

namespace App\Repository;

use App\Entity\Book;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Book>
 */
class BookRepository extends ServiceEntityRepository
{
    private $entityManager;
    public function __construct(ManagerRegistry $registry, EntityManagerInterface $entityManager)
    {
        parent::__construct($registry, Book::class);
        $this->entityManager = $entityManager;
    }

    /**
     * @return Book[] Returns an array of Book objects
     */
    public function findAllBooks(): array
    {
        return $this->findBy([], ['id' => 'ASC']);
    }

    /**
     * @return Book[] Returns an array of Book objects
     */
    public function findBooksByAuthor(string $author): array
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.author = :author')
            ->setParameter('author', $author)
            ->orderBy('b.title', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * @return Book[] Returns an array of Book objects
     */
    public function findBooksPublishedAfter(int $year): array
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.publicationYear > :year')
            ->setParameter('year', $year)
            ->orderBy('b.publicationYear', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * @return Book|null Returns a single Book object
     */
    public function findOneByIsbn(string $isbn): ?Book
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.isbn = :isbn')
            ->setParameter('isbn', $isbn)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function remove(Book $book, bool $flush = true): void
    {
        $this->entityManager->remove($book);

        if ($flush) {
            $this->entityManager->flush();
        }
    }
}

