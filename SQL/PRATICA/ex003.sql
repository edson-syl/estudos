USE exercicios;

CREATE TABLE Equipamentos (
	id INT PRIMARY KEY,
    descricao VARCHAR(100) NOT NULL,
    id_enfermeiro INT,
    FOREIGN KEY (id_enfermeiro) REFERENCES Enfermeiros(id)
    
)

DROP TABLE Equipamentos;