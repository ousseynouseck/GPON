<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181224091455 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE autres ADD items_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE autres ADD CONSTRAINT FK_21F626726BB0AE84 FOREIGN KEY (items_id) REFERENCES nomsr (id)');
        $this->addSql('CREATE INDEX IDX_21F626726BB0AE84 ON autres (items_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE autres DROP FOREIGN KEY FK_21F626726BB0AE84');
        $this->addSql('DROP INDEX IDX_21F626726BB0AE84 ON autres');
        $this->addSql('ALTER TABLE autres DROP items_id');
    }
}
