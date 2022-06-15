CREATE DATABASE projweb3 COLLATE 'utf8_unicode_ci';

CREATE TABLE IF NOT EXISTS usuarios (
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR (255) UNIQUE NOT NULL,
    senha VARCHAR (255) NOT NULL,
    admin BOOLEAN NOT NULL DEFAULT 0,
    PRIMARY KEY (id)
)
ENGINE = InnoDB;

CREATE TABLE receitas (
    id INT NOT NULL AUTO_INCREMENT,
    titulo VARCHAR(255) NOT NULL,
    tempoPreparo INT (3) NOT NULL,
    dataPublicacao DATE NOT NULL,
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

INSERT INTO receitas (titulo, tempoPreparo, dataPublicacao, fotos, ingrediente, comoFazer, usuario_id) 
VALUES ('Lasanha', 50, '2022-06-14', 1, '[{"tag":"massa para lasanha"},{"tag":"1000gr de frango"},{"tag":"molho de tomate"}, {"tag":"sal a gosto"}, {"tag":"organo"}]', 'Pré aquecer o forno por 15 min a 180°, misturar tudo...', 1);
INSERT INTO receitas (titulo, tempoPreparo, dataPublicacao, fotos, ingrediente, comoFazer, usuario_id) 
VALUES ('Lasanha', 50, '2022-06-14', 1, '[{"tag":"massa para lasanha"},{"tag":"1000gr de frango"},{"tag":"molho de tomate"}, {"tag":"sal a gosto"}, {"tag":"organo"}]', 'Pré aquecer o forno por 15 min a 180°, misturar tudo...', 1);
INSERT INTO receitas (titulo, tempoPreparo, dataPublicacao, fotos, ingrediente, comoFazer, usuario_id) 
VALUES ('Lasanha', 50, '2022-06-14', 1, '[{"tag":"massa para lasanha"},{"tag":"1000gr de frango"},{"tag":"molho de tomate"}, {"tag":"sal a gosto"}, {"tag":"organo"}]', 'Pré aquecer o forno por 15 min a 180°, misturar tudo...', 1);
INSERT INTO receitas (titulo, tempoPreparo, dataPublicacao, fotos, ingrediente, comoFazer, usuario_id) 
VALUES ('Lasanha', 50, '2022-06-14', 1, '[{"tag":"massa para lasanha"},{"tag":"1000gr de frango"},{"tag":"molho de tomate"}, {"tag":"sal a gosto"}, {"tag":"organo"}]', 'Pré aquecer o forno por 15 min a 180°, misturar tudo...', 1);
INSERT INTO receitas (titulo, tempoPreparo, dataPublicacao, fotos, ingrediente, comoFazer, usuario_id) 
VALUES ('Lasanha', 50, '2022-06-14', 1, '[{"tag":"massa para lasanha"},{"tag":"1000gr de frango"},{"tag":"molho de tomate"}, {"tag":"sal a gosto"}, {"tag":"organo"}]', 'Pré aquecer o forno por 15 min a 180°, misturar tudo...', 1);
INSERT INTO receitas (titulo, tempoPreparo, dataPublicacao, fotos, ingrediente, comoFazer, usuario_id) 
VALUES ('Lasanha', 50, '2022-06-14', 1, '[{"tag":"massa para lasanha"},{"tag":"1000gr de frango"},{"tag":"molho de tomate"}, {"tag":"sal a gosto"}, {"tag":"organo"}]', 'Pré aquecer o forno por 15 min a 180°, misturar tudo...', 1);
INSERT INTO receitas (titulo, tempoPreparo, dataPublicacao, fotos, ingrediente, comoFazer, usuario_id) 
VALUES ('Lasanha', 50, '2022-06-14', 1, '[{"tag":"massa para lasanha"},{"tag":"1000gr de frango"},{"tag":"molho de tomate"}, {"tag":"sal a gosto"}, {"tag":"organo"}]', 'Pré aquecer o forno por 15 min a 180°, misturar tudo...', 1);
INSERT INTO receitas (titulo, tempoPreparo, dataPublicacao, fotos, ingrediente, comoFazer, usuario_id) 
VALUES ('Lasanha', 50, '2022-06-14', 1, '[{"tag":"massa para lasanha"},{"tag":"1000gr de frango"},{"tag":"molho de tomate"}, {"tag":"sal a gosto"}, {"tag":"organo"}]', 'Pré aquecer o forno por 15 min a 180°, misturar tudo...', 1);
INSERT INTO receitas (titulo, tempoPreparo, dataPublicacao, fotos, ingrediente, comoFazer, usuario_id) 
VALUES ('Lasanha', 50, '2022-06-14', 1, '[{"tag":"massa para lasanha"},{"tag":"1000gr de frango"},{"tag":"molho de tomate"}, {"tag":"sal a gosto"}, {"tag":"organo"}]', 'Pré aquecer o forno por 15 min a 180°, misturar tudo...', 1);
INSERT INTO receitas (titulo, tempoPreparo, dataPublicacao, fotos, ingrediente, comoFazer, usuario_id) 
VALUES ('Lasanha', 50, '2022-06-14', 1, '[{"tag":"massa para lasanha"},{"tag":"1000gr de frango"},{"tag":"molho de tomate"}, {"tag":"sal a gosto"}, {"tag":"organo"}]', 'Pré aquecer o forno por 15 min a 180°, misturar tudo...', 1);
INSERT INTO receitas (titulo, tempoPreparo, dataPublicacao, fotos, ingrediente, comoFazer, usuario_id) 
VALUES ('Lasanha', 50, '2022-06-14', 1, '[{"tag":"massa para lasanha"},{"tag":"1000gr de frango"},{"tag":"molho de tomate"}, {"tag":"sal a gosto"}, {"tag":"organo"}]', 'Pré aquecer o forno por 15 min a 180°, misturar tudo...', 1);
INSERT INTO receitas (titulo, tempoPreparo, dataPublicacao, fotos, ingrediente, comoFazer, usuario_id) 
VALUES ('Lasanha', 50, '2022-06-14', 1, '[{"tag":"massa para lasanha"},{"tag":"1000gr de frango"},{"tag":"molho de tomate"}, {"tag":"sal a gosto"}, {"tag":"organo"}]', 'Pré aquecer o forno por 15 min a 180°, misturar tudo...', 1);

INSERT INTO comentarios (titulo, comentario, usuario_id, receita_id) 
VALUES ('Muito Boa!!!', 'Eu adorei, adicionei paprica e ficou melhor ainda, recomendo!', 1, 1);
INSERT INTO comentarios (titulo, comentario, usuario_id, receita_id) 
VALUES ('Deliciosa', 'Eu adorei, adicionei paprica e ficou melhor ainda, recomendo!', 1, 1);
INSERT INTO comentarios (titulo, comentario, usuario_id, receita_id) 
VALUES ('Muito Boa!!!', 'Eu adorei, adicionei paprica e ficou melhor ainda, recomendo!', 1, 2);
INSERT INTO comentarios (titulo, comentario, usuario_id, receita_id) 
VALUES ('Deliciosa', 'Eu adorei, adicionei paprica e ficou melhor ainda, recomendo!', 1, 2);
INSERT INTO comentarios (titulo, comentario, usuario_id, receita_id) 
VALUES ('Muito Boa!!!', 'Eu adorei, adicionei paprica e ficou melhor ainda, recomendo!', 1, 3);
INSERT INTO comentarios (titulo, comentario, usuario_id, receita_id) 
VALUES ('Deliciosa', 'Eu adorei, adicionei paprica e ficou melhor ainda, recomendo!', 1, 3);
INSERT INTO comentarios (titulo, comentario, usuario_id, receita_id) 
VALUES ('Muito Boa!!!', 'Eu adorei, adicionei paprica e ficou melhor ainda, recomendo!', 1, 4);
INSERT INTO comentarios (titulo, comentario, usuario_id, receita_id) 
VALUES ('Deliciosa', 'Eu adorei, adicionei paprica e ficou melhor ainda, recomendo!', 1, 4);
INSERT INTO comentarios (titulo, comentario, usuario_id, receita_id) 
VALUES ('Muito Boa!!!', 'Eu adorei, adicionei paprica e ficou melhor ainda, recomendo!', 1, 5);
INSERT INTO comentarios (titulo, comentario, usuario_id, receita_id) 
VALUES ('Deliciosa', 'Eu adorei, adicionei paprica e ficou melhor ainda, recomendo!', 1, 5);
INSERT INTO comentarios (titulo, comentario, usuario_id, receita_id) 
VALUES ('Muito Boa!!!', 'Eu adorei, adicionei paprica e ficou melhor ainda, recomendo!', 1, 6);
INSERT INTO comentarios (titulo, comentario, usuario_id, receita_id) 
VALUES ('Deliciosa', 'Eu adorei, adicionei paprica e ficou melhor ainda, recomendo!', 1, 6);