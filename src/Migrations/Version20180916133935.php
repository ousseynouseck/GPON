<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180916133935 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE autres ADD nchas_id INT NOT NULL');
        $this->addSql('ALTER TABLE autres ADD CONSTRAINT FK_21F62672BA62FB02 FOREIGN KEY (nchas_id) REFERENCES ncha (id)');
        $this->addSql('CREATE INDEX IDX_21F62672BA62FB02 ON autres (nchas_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE autres DROP FOREIGN KEY FK_21F62672BA62FB02');
        $this->addSql('DROP INDEX IDX_21F62672BA62FB02 ON autres');
        $this->addSql('ALTER TABLE autres DROP nchas_id');
    }
}
