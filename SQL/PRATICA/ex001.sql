use exercicios;
create table if not exists Pacientes (
	ID INT PRIMARY KEY,
    NOME VARCHAR(50) NOT NULL,
    DATA_NAS DATE NOT NULL,
    CIDADE VARCHAR(40),
    CPF INT(11)
    
)