<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180916134425 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE autres ADD nchads_id INT NOT NULL, ADD pochages_id INT NOT NULL, ADD statuts_id INT NOT NULL, ADD typeboites_id INT NOT NULL, ADD typecables_id INT NOT NULL, ADD typetirages_id INT NOT NULL');
        $this->addSql('ALTER TABLE autres ADD CONSTRAINT FK_21F62672DB05F560 FOREIGN KEY (nchads_id) REFERENCES nchd (id)');
        $this->addSql('ALTER TABLE autres ADD CONSTRAINT FK_21F626725AC12953 FOREIGN KEY (pochages_id) REFERENCES pochage (id)');
        $this->addSql('ALTER TABLE autres ADD CONSTRAINT FK_21F62672E0EA5904 FOREIGN KEY (statuts_id) REFERENCES statut (id)');
        $this->addSql('ALTER TABLE autres ADD CONSTRAINT FK_21F6267241ADC08B FOREIGN KEY (typeboites_id) REFERENCES type_boite (id)');
        $this->addSql('ALTER TABLE autres ADD CONSTRAINT FK_21F62672AEDE12F6 FOREIGN KEY (typecables_id) REFERENCES type_cable (id)');
        $this->addSql('ALTER TABLE autres ADD CONSTRAINT FK_21F6267272AF9F55 FOREIGN KEY (typetirages_id) REFERENCES type_tirage (id)');
        $this->addSql('CREATE INDEX IDX_21F62672DB05F560 ON autres (nchads_id)');
        $this->addSql('CREATE INDEX IDX_21F626725AC12953 ON autres (pochages_id)');
        $this->addSql('CREATE INDEX IDX_21F62672E0EA5904 ON autres (statuts_id)');
        $this->addSql('CREATE INDEX IDX_21F6267241ADC08B ON autres (typeboites_id)');
        $this->addSql('CREATE INDEX IDX_21F62672AEDE12F6 ON autres (typecables_id)');
        $this->addSql('CREATE INDEX IDX_21F6267272AF9F55 ON autres (typetirages_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE autres DROP FOREIGN KEY FK_21F62672DB05F560');
        $this->addSql('ALTER TABLE autres DROP FOREIGN KEY FK_21F626725AC12953');
        $this->addSql('ALTER TABLE autres DROP FOREIGN KEY FK_21F62672E0EA5904');
        $this->addSql('ALTER TABLE autres DROP FOREIGN KEY FK_21F6267241ADC08B');
        $this->addSql('ALTER TABLE autres DROP FOREIGN KEY FK_21F62672AEDE12F6');
        $this->addSql('ALTER TABLE autres DROP FOREIGN KEY FK_21F6267272AF9F55');
        $this->addSql('DROP INDEX IDX_21F62672DB05F560 ON autres');
        $this->addSql('DROP INDEX IDX_21F626725AC12953 ON autres');
        $this->addSql('DROP INDEX IDX_21F62672E0EA5904 ON autres');
        $this->addSql('DROP INDEX IDX_21F6267241ADC08B ON autres');
        $this->addSql('DROP INDEX IDX_21F62672AEDE12F6 ON autres');
        $this->addSql('DROP INDEX IDX_21F6267272AF9F55 ON autres');
        $this->addSql('ALTER TABLE autres DROP nchads_id, DROP pochages_id, DROP statuts_id, DROP typeboites_id, DROP typecables_id, DROP typetirages_id');
    }
}
