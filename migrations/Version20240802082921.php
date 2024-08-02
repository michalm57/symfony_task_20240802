<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240802082921 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create books table';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('
            CREATE TABLE books (
                id SERIAL PRIMARY KEY,
                title VARCHAR(255) NOT NULL,
                author VARCHAR(255) NOT NULL,
                description TEXT,
                publication_year INT NOT NULL,
                isbn VARCHAR(13) NOT NULL,
                image_path VARCHAR(255)
            );
        ');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE IF EXISTS books');
    }
}
