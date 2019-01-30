<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181224081113 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE autres ADD port_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE autres ADD CONSTRAINT FK_21F6267276E92A9C FOREIGN KEY (port_id) REFERENCES support (id)');
        $this->addSql('CREATE INDEX IDX_21F6267276E92A9C ON autres (port_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE autres DROP FOREIGN KEY FK_21F6267276E92A9C');
        $this->addSql('DROP INDEX IDX_21F6267276E92A9C ON autres');
        $this->addSql('ALTER TABLE autres DROP port_id');
    }
}
