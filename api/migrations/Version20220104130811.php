<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220104130811 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE noticias_en (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, subtitle LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE noticias_en_noticias (noticias_en_id INT NOT NULL, noticias_id INT NOT NULL, INDEX IDX_9958EA5B56898221 (noticias_en_id), INDEX IDX_9958EA5BFA5F3F21 (noticias_id), PRIMARY KEY(noticias_en_id, noticias_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE noticias_es (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, subtitle LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE noticias_es_noticias (noticias_es_id INT NOT NULL, noticias_id INT NOT NULL, INDEX IDX_4B08E003F4FA0D63 (noticias_es_id), INDEX IDX_4B08E003FA5F3F21 (noticias_id), PRIMARY KEY(noticias_es_id, noticias_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE noticias_en_noticias ADD CONSTRAINT FK_9958EA5B56898221 FOREIGN KEY (noticias_en_id) REFERENCES noticias_en (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE noticias_en_noticias ADD CONSTRAINT FK_9958EA5BFA5F3F21 FOREIGN KEY (noticias_id) REFERENCES noticias (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE noticias_es_noticias ADD CONSTRAINT FK_4B08E003F4FA0D63 FOREIGN KEY (noticias_es_id) REFERENCES noticias_es (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE noticias_es_noticias ADD CONSTRAINT FK_4B08E003FA5F3F21 FOREIGN KEY (noticias_id) REFERENCES noticias (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE noticias DROP title, DROP subtitle');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE noticias_en_noticias DROP FOREIGN KEY FK_9958EA5B56898221');
        $this->addSql('ALTER TABLE noticias_es_noticias DROP FOREIGN KEY FK_4B08E003F4FA0D63');
        $this->addSql('DROP TABLE noticias_en');
        $this->addSql('DROP TABLE noticias_en_noticias');
        $this->addSql('DROP TABLE noticias_es');
        $this->addSql('DROP TABLE noticias_es_noticias');
        $this->addSql('ALTER TABLE noticias ADD title VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD subtitle LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
