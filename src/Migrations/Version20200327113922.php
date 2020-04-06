<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200327113922 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE News (Id INT AUTO_INCREMENT NOT NULL, Title VARCHAR(255) NOT NULL, Description LONGTEXT NOT NULL, Date DATE NOT NULL, Image VARCHAR(255) DEFAULT NULL, PRIMARY KEY(Id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Event (Id INT AUTO_INCREMENT NOT NULL, Name VARCHAR(255) NOT NULL, Description LONGTEXT NOT NULL, Date DATE NOT NULL, Lat DOUBLE PRECISION NOT NULL, Lng DOUBLE PRECISION NOT NULL, PRIMARY KEY(Id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Roles (Id INT AUTO_INCREMENT NOT NULL, Role VARCHAR(255) NOT NULL, PRIMARY KEY(Id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Address (Id INT AUTO_INCREMENT NOT NULL, Number VARCHAR(255) NOT NULL, StreetName VARCHAR(255) NOT NULL, Suburb VARCHAR(255) NOT NULL, Postcode INT NOT NULL, State VARCHAR(255) NOT NULL, UserId INT DEFAULT NULL, AddressTypeId INT DEFAULT NULL, INDEX IDX_C2F3561D631A48FA (UserId), INDEX IDX_C2F3561D92BB41EF (AddressTypeId), PRIMARY KEY(Id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Organisation (Id INT AUTO_INCREMENT NOT NULL, Name VARCHAR(255) NOT NULL, Url VARCHAR(255) NOT NULL, Description LONGTEXT NOT NULL, TradingTime VARCHAR(255) NOT NULL, UserId INT DEFAULT NULL, UNIQUE INDEX UNIQ_FED0E94C631A48FA (UserId), PRIMARY KEY(Id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE User (Id INT AUTO_INCREMENT NOT NULL, Email VARCHAR(255) NOT NULL, FirstName VARCHAR(255) NOT NULL, LastName VARCHAR(255) NOT NULL, PhoneNumber VARCHAR(255) NOT NULL, Password VARCHAR(255) NOT NULL, RoleId INT DEFAULT NULL, INDEX IDX_2DA17977BF6EF8BE (RoleId), PRIMARY KEY(Id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE AddressType (Id INT AUTO_INCREMENT NOT NULL, Type VARCHAR(255) NOT NULL, PRIMARY KEY(Id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Child (Id INT AUTO_INCREMENT NOT NULL, FirstName VARCHAR(255) NOT NULL, LastName VARCHAR(255) NOT NULL, DOB VARCHAR(255) NOT NULL, UserId INT DEFAULT NULL, INDEX IDX_E3727B2D631A48FA (UserId), PRIMARY KEY(Id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE Address ADD CONSTRAINT FK_C2F3561D631A48FA FOREIGN KEY (UserId) REFERENCES User (Id)');
        $this->addSql('ALTER TABLE Address ADD CONSTRAINT FK_C2F3561D92BB41EF FOREIGN KEY (AddressTypeId) REFERENCES AddressType (Id)');
        $this->addSql('ALTER TABLE Organisation ADD CONSTRAINT FK_FED0E94C631A48FA FOREIGN KEY (UserId) REFERENCES User (Id)');
        $this->addSql('ALTER TABLE User ADD CONSTRAINT FK_2DA17977BF6EF8BE FOREIGN KEY (RoleId) REFERENCES Roles (Id)');
        $this->addSql('ALTER TABLE Child ADD CONSTRAINT FK_E3727B2D631A48FA FOREIGN KEY (UserId) REFERENCES User (Id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE User DROP FOREIGN KEY FK_2DA17977BF6EF8BE');
        $this->addSql('ALTER TABLE Address DROP FOREIGN KEY FK_C2F3561D631A48FA');
        $this->addSql('ALTER TABLE Organisation DROP FOREIGN KEY FK_FED0E94C631A48FA');
        $this->addSql('ALTER TABLE Child DROP FOREIGN KEY FK_E3727B2D631A48FA');
        $this->addSql('ALTER TABLE Address DROP FOREIGN KEY FK_C2F3561D92BB41EF');
        $this->addSql('DROP TABLE News');
        $this->addSql('DROP TABLE Event');
        $this->addSql('DROP TABLE Roles');
        $this->addSql('DROP TABLE Address');
        $this->addSql('DROP TABLE Organisation');
        $this->addSql('DROP TABLE User');
        $this->addSql('DROP TABLE AddressType');
        $this->addSql('DROP TABLE Child');
    }
}
