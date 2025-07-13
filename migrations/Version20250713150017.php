<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250713150017 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE game ADD COLUMN platform VARCHAR(100) DEFAULT NULL');
        $this->addSql('ALTER TABLE game ADD COLUMN genre VARCHAR(100) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__game AS SELECT id, title, description, price, image FROM game');
        $this->addSql('DROP TABLE game');
        $this->addSql('CREATE TABLE game (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, title VARCHAR(255) NOT NULL, description CLOB DEFAULT NULL, price DOUBLE PRECISION NOT NULL, image VARCHAR(500) DEFAULT NULL)');
        $this->addSql('INSERT INTO game (id, title, description, price, image) SELECT id, title, description, price, image FROM __temp__game');
        $this->addSql('DROP TABLE __temp__game');
    }
}
