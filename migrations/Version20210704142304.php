<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210704142304 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE perfil (id INT AUTO_INCREMENT NOT NULL, codigo INT NOT NULL, descricao VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE usuario (id INT AUTO_INCREMENT NOT NULL, codigo INT NOT NULL, nome VARCHAR(255) NOT NULL, login VARCHAR(255) NOT NULL, senha VARCHAR(255) NOT NULL, ativo INT NOT NULL, datacadastro DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE usuario_perfil (usuario_id INT NOT NULL, perfil_id INT NOT NULL, INDEX IDX_6C77954EDB38439E (usuario_id), INDEX IDX_6C77954E57291544 (perfil_id), PRIMARY KEY(usuario_id, perfil_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE usuario_perfil ADD CONSTRAINT FK_6C77954EDB38439E FOREIGN KEY (usuario_id) REFERENCES usuario (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE usuario_perfil ADD CONSTRAINT FK_6C77954E57291544 FOREIGN KEY (perfil_id) REFERENCES perfil (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE usuario_perfil DROP FOREIGN KEY FK_6C77954E57291544');
        $this->addSql('ALTER TABLE usuario_perfil DROP FOREIGN KEY FK_6C77954EDB38439E');
        $this->addSql('DROP TABLE perfil');
        $this->addSql('DROP TABLE usuario');
        $this->addSql('DROP TABLE usuario_perfil');
    }
}
