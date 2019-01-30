<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180916133808 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE autres ADD blocages_id INT NOT NULL, ADD centrales_id INT NOT NULL, ADD etiquettes_id INT NOT NULL, ADD gainegalvars_id INT NOT NULL, ADD gainegrise_id INT NOT NULL, ADD gainevertes_id INT NOT NULL');
        $this->addSql('ALTER TABLE autres ADD CONSTRAINT FK_21F62672FC320018 FOREIGN KEY (blocages_id) REFERENCES blocage (id)');
        $this->addSql('ALTER TABLE autres ADD CONSTRAINT FK_21F626726A211107 FOREIGN KEY (centrales_id) REFERENCES central (id)');
        $this->addSql('ALTER TABLE autres ADD CONSTRAINT FK_21F626721205AB98 FOREIGN KEY (etiquettes_id) REFERENCES etiquette (id)');
        $this->addSql('ALTER TABLE autres ADD CONSTRAINT FK_21F62672A657D490 FOREIGN KEY (gainegalvars_id) REFERENCES gaine_galvar (id)');
        $this->addSql('ALTER TABLE autres ADD CONSTRAINT FK_21F6267298E85548 FOREIGN KEY (gainegrise_id) REFERENCES gaine_grise (id)');
        $this->addSql('ALTER TABLE autres ADD CONSTRAINT FK_21F626722AF70A5E FOREIGN KEY (gainevertes_id) REFERENCES gaine_verte (id)');
        $this->addSql('CREATE INDEX IDX_21F62672FC320018 ON autres (blocages_id)');
        $this->addSql('CREATE INDEX IDX_21F626726A211107 ON autres (centrales_id)');
        $this->addSql('CREATE INDEX IDX_21F626721205AB98 ON autres (etiquettes_id)');
        $this->addSql('CREATE INDEX IDX_21F62672A657D490 ON autres (gainegalvars_id)');
        $this->addSql('CREATE INDEX IDX_21F6267298E85548 ON autres (gainegrise_id)');
        $this->addSql('CREATE INDEX IDX_21F626722AF70A5E ON autres (gainevertes_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE autres DROP FOREIGN KEY FK_21F62672FC320018');
        $this->addSql('ALTER TABLE autres DROP FOREIGN KEY FK_21F626726A211107');
        $this->addSql('ALTER TABLE autres DROP FOREIGN KEY FK_21F626721205AB98');
        $this->addSql('ALTER TABLE autres DROP FOREIGN KEY FK_21F62672A657D490');
        $this->addSql('ALTER TABLE autres DROP FOREIGN KEY FK_21F6267298E85548');
        $this->addSql('ALTER TABLE autres DROP FOREIGN KEY FK_21F626722AF70A5E');
        $this->addSql('DROP INDEX IDX_21F62672FC320018 ON autres');
        $this->addSql('DROP INDEX IDX_21F626726A211107 ON autres');
        $this->addSql('DROP INDEX IDX_21F626721205AB98 ON autres');
        $this->addSql('DROP INDEX IDX_21F62672A657D490 ON autres');
        $this->addSql('DROP INDEX IDX_21F6267298E85548 ON autres');
        $this->addSql('DROP INDEX IDX_21F626722AF70A5E ON autres');
        $this->addSql('ALTER TABLE autres DROP blocages_id, DROP centrales_id, DROP etiquettes_id, DROP gainegalvars_id, DROP gainegrise_id, DROP gainevertes_id');
    }
}
