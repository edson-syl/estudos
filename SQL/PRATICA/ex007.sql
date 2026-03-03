USE exercicios;

CREATE TABLE IF NOT EXISTS Livros(
	id INT PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(40),
    autor VARCHAR(40),
    genero VARCHAR(50)
);

INSERT INTO livros (titulo, autor, genero) VALUES
('O Pequeno Príncipe', 'Antoine de Saint-Exupéry', 'Fábula'),
('Dom Casmurro', 'Machado de Assis', 'Romance'),
('1984', 'George Orwell', 'Distopia');

SELECT genero FROM livros;