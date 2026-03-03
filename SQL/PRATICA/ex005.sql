USE exercicios;

CREATE TABLE exames (
	id_exame INT PRIMARY KEY AUTO_INCREMENT,	
    nome_exame VARCHAR(30) NOT NULL,
    nome_paciente VARCHAR(50) NOT NULL,
    resultado VARCHAR(50)
    
);

INSERT INTO exames (nome_exame, nome_paciente, resultado) VALUES ('Exame de sangue', 'Josemar', 'Deu bom!');
INSERT INTO exames (nome_exame, nome_paciente, resultado) VALUES ('Exame de fezes', 'Joelinto', 'Deu ruim!');
INSERT INTO exames (nome_exame, nome_paciente, resultado) VALUES ('Exame de prostata', 'Claudemar', 'Morreu no exame!')