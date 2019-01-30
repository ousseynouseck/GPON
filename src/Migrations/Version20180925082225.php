<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180925082225 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE nomsr ADD items_id INT NOT NULL');
        $this->addSql('ALTER TABLE nomsr ADD CONSTRAINT FK_7973BB326BB0AE84 FOREIGN KEY (items_id) REFERENCES central (id)');
        $this->addSql('CREATE INDEX IDX_7973BB326BB0AE84 ON nomsr (items_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE nomsr DROP FOREIGN KEY FK_7973BB326BB0AE84');
        $this->addSql('DROP INDEX IDX_7973BB326BB0AE84 ON nomsr');
        $this->addSql('ALTER TABLE nomsr DROP items_id');
    }
}
