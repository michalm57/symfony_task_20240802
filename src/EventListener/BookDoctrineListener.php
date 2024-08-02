<?php

namespace App\EventListener;

use App\Entity\Book;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Psr\Log\LoggerInterface;

class BookDoctrineListener
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function postPersist(Book $book, LifecycleEventArgs $args)
    {
        if ($book instanceof Book) {
            $message = sprintf(
                "New book added: ID=%d, Title='%s', Author='%s'",
                $book->getId(),
                $book->getTitle(),
                $book->getAuthor()
            );

            $this->logger->info($message);
        }
    }
}