CREATE DATABASE projweb3 COLLATE 'utf8_unicode_ci';


CREATE TABLE IF NOT EXISTS usuarios (
    id INT NOT NULL AUTO_INCREMENT,
    nomeCompleto VARCHAR(255) NOT NULL,
    genero CHAR(1) NOT NULL,
    dataNascimento TIMESTAMP NOT NULL,
    cpf INT (11) NOT NULL,
    telefone INT (11) NOT NULL,
    email VARCHAR (255) UNIQUE NOT NULL,
    senha VARCHAR (255) NOT NULL,
    admin BOOLEAN NOT NULL DEFAULT 0,
    PRIMARY KEY (id)
)
ENGINE = InnoDB;

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
ENGINE = InnoDB;

CREATE TABLE comentarios (
    id INT NOT NULL AUTO_INCREMENT,
    titulo VARCHAR(255) NOT NULL,
    comentario TEXT NOT NULL,
    usuario_id INT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
)
ENGINE = InnoDB;

CREATE TABLE receitas (
    id INT NOT NULL AUTO_INCREMENT,
    titulo VARCHAR(255) NOT NULL,
    tempoPreparo INT (3) NOT NULL,
    dataPublicacao TIMESTAMP NOT NULL,
    curtidas INT (3) NOT NULL,
    fotos LONGBLOB NOT NULL,
    ingrediente TEXT NOT NULL,
    comoFazer TEXT NOT NULL,
    usuario_id INT NOT NULL,
    comentario_id INT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
    FOREIGN KEY (comentario_id) REFERENCES comentarios(id)
)
ENGINE = InnoDB;

INSERT INTO usuarios (nomeCompleto, genero, dataNascimento, cpf, telefone, email, senha, admin) 
VALUES ('admin', 'M', '1970-01-01', '11111111111', '11111111111', 'admin@admin.com', '$2y$10$/6aH1pW4RKYRFcvKC83JJ.AMSerCItzea57qRHTTLACwRZpkGfs4q', true);