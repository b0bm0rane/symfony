<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240201132749 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pokemon ADD id INT AUTO_INCREMENT NOT NULL, CHANGE numero numero INT NOT NULL, CHANGE espece espece VARCHAR(255) NOT NULL, CHANGE niveau niveau INT NOT NULL, CHANGE type_1 type_1 VARCHAR(255) NOT NULL, CHANGE type_2 type_2 VARCHAR(255) DEFAULT NULL, ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pokemon MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON pokemon');
        $this->addSql('ALTER TABLE pokemon DROP id, CHANGE numero numero INT DEFAULT NULL, CHANGE espece espece VARCHAR(50) DEFAULT NULL, CHANGE niveau niveau INT DEFAULT NULL, CHANGE type_1 type_1 VARCHAR(50) DEFAULT NULL, CHANGE type_2 type_2 VARCHAR(50) DEFAULT NULL');
    }
}
