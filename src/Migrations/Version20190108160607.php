<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190108160607 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE time (id INT AUTO_INCREMENT NOT NULL, brasao VARCHAR(255) NOT NULL, ativo TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE campeonato (id INT AUTO_INCREMENT NOT NULL, organizacao_id INT DEFAULT NULL, nome VARCHAR(255) NOT NULL, INDEX IDX_722DB8CAE30256E3 (organizacao_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE partida (id INT AUTO_INCREMENT NOT NULL, descricao LONGTEXT NOT NULL, placar_visitante VARCHAR(255) NOT NULL, placar_casa VARCHAR(255) NOT NULL, data_partida DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE organizacao (id INT AUTO_INCREMENT NOT NULL, nome VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE campeonato ADD CONSTRAINT FK_722DB8CAE30256E3 FOREIGN KEY (organizacao_id) REFERENCES organizacao (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE campeonato DROP FOREIGN KEY FK_722DB8CAE30256E3');
        $this->addSql('DROP TABLE time');
        $this->addSql('DROP TABLE campeonato');
        $this->addSql('DROP TABLE partida');
        $this->addSql('DROP TABLE organizacao');
    }
}
