<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180918103413 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE autres ADD capacitecables_id INT NOT NULL');
        $this->addSql('ALTER TABLE autres ADD CONSTRAINT FK_21F62672BD283F5A FOREIGN KEY (capacitecables_id) REFERENCES capacite_cable (id)');
        $this->addSql('CREATE INDEX IDX_21F62672BD283F5A ON autres (capacitecables_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE autres DROP FOREIGN KEY FK_21F62672BD283F5A');
        $this->addSql('DROP INDEX IDX_21F62672BD283F5A ON autres');
        $this->addSql('ALTER TABLE autres DROP capacitecables_id');
    }
}
