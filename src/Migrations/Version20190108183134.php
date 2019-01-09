<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190108183134 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE organizacao ADD parent_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE organizacao ADD CONSTRAINT FK_51A4988B727ACA70 FOREIGN KEY (parent_id) REFERENCES organizacao (id)');
        $this->addSql('CREATE INDEX IDX_51A4988B727ACA70 ON organizacao (parent_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE organizacao DROP FOREIGN KEY FK_51A4988B727ACA70');
        $this->addSql('DROP INDEX IDX_51A4988B727ACA70 ON organizacao');
        $this->addSql('ALTER TABLE organizacao DROP parent_id');
    }
}
