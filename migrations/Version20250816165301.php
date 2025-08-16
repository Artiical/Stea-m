<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250816165301 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE game ADD COLUMN long_description CLOB DEFAULT NULL');
        $this->addSql('ALTER TABLE game ADD COLUMN screenshots CLOB DEFAULT NULL');
        $this->addSql('ALTER TABLE game ADD COLUMN trailer_url VARCHAR(500) DEFAULT NULL');
        $this->addSql('ALTER TABLE game ADD COLUMN developer VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE game ADD COLUMN publisher VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE game ADD COLUMN release_date DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE game ADD COLUMN system_requirements CLOB DEFAULT NULL');
        $this->addSql('ALTER TABLE game ADD COLUMN average_rating DOUBLE PRECISION DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__game AS SELECT id, title, description, price, image, platform, genre FROM game');
        $this->addSql('DROP TABLE game');
        $this->addSql('CREATE TABLE game (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, title VARCHAR(255) NOT NULL, description CLOB DEFAULT NULL, price DOUBLE PRECISION NOT NULL, image VARCHAR(500) DEFAULT NULL, platform VARCHAR(100) DEFAULT NULL, genre VARCHAR(100) DEFAULT NULL)');
        $this->addSql('INSERT INTO game (id, title, description, price, image, platform, genre) SELECT id, title, description, price, image, platform, genre FROM __temp__game');
        $this->addSql('DROP TABLE __temp__game');
    }
}
