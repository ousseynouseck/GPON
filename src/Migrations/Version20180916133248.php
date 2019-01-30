<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180916133248 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE nchd (id INT AUTO_INCREMENT NOT NULL, nomchd VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pochage (id INT AUTO_INCREMENT NOT NULL, nompochage VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_cable (id INT AUTO_INCREMENT NOT NULL, nomtypec VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE nomsr (id INT AUTO_INCREMENT NOT NULL, noms VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE central (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE support (id INT AUTO_INCREMENT NOT NULL, nomsupport VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE gaine_verte (id INT AUTO_INCREMENT NOT NULL, nomgv VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_boite (id INT AUTO_INCREMENT NOT NULL, nomtypeb VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE statut (id INT AUTO_INCREMENT NOT NULL, nomstatut VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ncha (id INT AUTO_INCREMENT NOT NULL, nomcha VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE gaine_galvar (id INT AUTO_INCREMENT NOT NULL, nomggv VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE blocage (id INT AUTO_INCREMENT NOT NULL, nomblocage VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_tirage (id INT AUTO_INCREMENT NOT NULL, nomtypt VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE gaine_grise (id INT AUTO_INCREMENT NOT NULL, nomgg VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE capacite_cable (id INT AUTO_INCREMENT NOT NULL, nomcapacite VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE autres (id INT AUTO_INCREMENT NOT NULL, bmd INT NOT NULL, bma INT NOT NULL, longueurtirage INT NOT NULL, eql VARCHAR(255) DEFAULT NULL, zoneblocage VARCHAR(255) NOT NULL, actions VARCHAR(255) DEFAULT NULL, numerocoupleur VARCHAR(255) DEFAULT NULL, commentaires LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE etiquette (id INT AUTO_INCREMENT NOT NULL, nometq VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE nchd');
        $this->addSql('DROP TABLE pochage');
        $this->addSql('DROP TABLE type_cable');
        $this->addSql('DROP TABLE nomsr');
        $this->addSql('DROP TABLE central');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE support');
        $this->addSql('DROP TABLE gaine_verte');
        $this->addSql('DROP TABLE type_boite');
        $this->addSql('DROP TABLE statut');
        $this->addSql('DROP TABLE ncha');
        $this->addSql('DROP TABLE gaine_galvar');
        $this->addSql('DROP TABLE blocage');
        $this->addSql('DROP TABLE type_tirage');
        $this->addSql('DROP TABLE gaine_grise');
        $this->addSql('DROP TABLE capacite_cable');
        $this->addSql('DROP TABLE autres');
        $this->addSql('DROP TABLE etiquette');
    }
}
