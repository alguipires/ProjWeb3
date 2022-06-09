CREATE DATABASE projweb3 COLLATE 'utf8_unicode_ci';

CREATE TABLE IF NOT EXISTS usuarios (
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    /*cpf INT (11) NOT NULL,*/
    email VARCHAR (255) UNIQUE NOT NULL,
    senha VARCHAR (255) NOT NULL,
    admin BOOLEAN NOT NULL DEFAULT 0,
    PRIMARY KEY (id)
)
ENGINE = InnoDB;

/* DESATIVADO TABELA ENDEREÇO POR NÃO TER A CLASSE MODELO / OPCIONAL
CREATE TABLE enderecos (
    id INT NOT NULL AUTO_INCREMENT,
    cep INT (9) NOT NULL,
    rua VARCHAR(255) NOT NULL,
    numero VARCHAR(255) NOT NULL,
    cidade VARCHAR(255) NOT NULL,
    estado VARCHAR(255) NOT NULL,
    usuario_id INT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
)
ENGINE = InnoDB;*/

CREATE TABLE receitas (
    id INT NOT NULL AUTO_INCREMENT,
    titulo VARCHAR(255) NOT NULL,
    tempoPreparo INT (3) NOT NULL,
    dataPublicacao DATE NOT NULL,
    /*curtidas INT (3) NOT NULL DEFAULT 0,*/
    fotos INT NOT NULL,
    ingrediente TEXT NOT NULL,
    comoFazer TEXT NOT NULL,
    usuario_id INT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
)
ENGINE = InnoDB;

CREATE TABLE comentarios (
    id INT NOT NULL AUTO_INCREMENT,
    titulo VARCHAR(255) NOT NULL,
    comentario TEXT NOT NULL,
    usuario_id INT NOT NULL,
    receita_id INT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
    FOREIGN KEY (receita_id) REFERENCES receitas(id)
)
ENGINE = InnoDB;

INSERT INTO usuarios (nome, email, senha, admin) 
VALUES ('admin', 'admin@admin.com', '$2y$10$/6aH1pW4RKYRFcvKC83JJ.AMSerCItzea57qRHTTLACwRZpkGfs4q', true);