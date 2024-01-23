<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240122213423 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE medecins ADD serv_id INT NOT NULL');
        $this->addSql('ALTER TABLE medecins ADD CONSTRAINT FK_691272DD4C93DBEC FOREIGN KEY (serv_id) REFERENCES services (id)');
        $this->addSql('CREATE INDEX IDX_691272DD4C93DBEC ON medecins (serv_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE medecins DROP FOREIGN KEY FK_691272DD4C93DBEC');
        $this->addSql('DROP INDEX IDX_691272DD4C93DBEC ON medecins');
        $this->addSql('ALTER TABLE medecins DROP serv_id');
    }
}
