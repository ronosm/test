<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190605094652 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql("INSERT INTO user (username, roles, password) VALUES ('Admin','[\"ROLE_ADMIN\"]','\$argon2i\$v=19\$m=1024,t=2,p=2\$VEE4b3Y3MldXeGp5Q2cwWg\$sgW30OphIIiGvHWAiHcGfumGsunVDujJVjYj/6BSYP4')");
        $this->addSql("INSERT INTO user (username, roles, password) VALUES ('User1','[\"ROLE_PAGE_1\"]	','\$argon2i\$v=19\$m=1024,t=2,p=2\$NlRndTFwSDNXRjRseGJsZQ\$ioiLb3oHIJLr7OW/Smro9A0DjJErLtbYo48cD3XV68Y')");
        $this->addSql("INSERT INTO user (username, roles, password) VALUES ('User2','[\"ROLE_PAGE_2\"]	','\$argon2i\$v=19\$m=1024,t=2,p=2\$N290MVk5Vi56TlpWaVNPdA\$KNXaYdj5lQbnEs1rhSOZ7aptnzXN8B4RlC2e7E7QSzw')");
        $this->addSql("INSERT INTO user (username, roles, password) VALUES ('User3','[\"ROLE_PAGE_3\"]	','\$argon2i\$v=19\$m=1024,t=2,p=2\$MjBIMzFjUzV2MkJpTXFqSg\$rTT1mpcEFhDbDBKxdlCAX8LqJiqWujnpxAh8fxySPTw')");
        $this->addSql("INSERT INTO user (username, roles, password) VALUES ('admin','[\"ROLE_ADMIN\"]	','\$argon2i\$v=19\$m=1024,t=2,p=2\$cjN5cjhOVTVGdVVvZFRJVA\$DTzEQie31SnNxlTtperQuUDW7t/dDSPJMVcx0dtfOvs')");

    }

    public function down(Schema $schema): void
    {
        $this->addSql('TRUNCATE TABLE user');
    }
}
