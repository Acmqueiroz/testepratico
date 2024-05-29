/* Crie um script SQL que cria uma tabela chamada ‘products’ com as seguintes colunas: id (PK, auto_increment), name (varchar(55)), price (decimal).*/


CREATE TABLE products(
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(55) NOT NULL,
price FLOAT NOT NULL,
);


/* Insira três registros na tabela ‘products’.*/

INSERT INTO products  ('name', 'price') VALUES
('Caneta', 2.70),
('Livro', 22.90),
('Papel', 1.80);
