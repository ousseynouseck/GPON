<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181224080934 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE autres_support');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE autres_support (autres_id INT NOT NULL, support_id INT NOT NULL, INDEX IDX_893E6C23A634AD22 (autres_id), INDEX IDX_893E6C23315B405 (support_id), PRIMARY KEY(autres_id, support_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE autres_support ADD CONSTRAINT FK_893E6C23315B405 FOREIGN KEY (support_id) REFERENCES support (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE autres_support ADD CONSTRAINT FK_893E6C23A634AD22 FOREIGN KEY (autres_id) REFERENCES autres (id) ON DELETE CASCADE');
    }
}
