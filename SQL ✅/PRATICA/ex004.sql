USE exercicios;

CREATE TABLE consultas (
	id_consulta INT PRIMARY KEY,
    id_paciente INT,
    id_medico INT,
    data_consulta DATE
    
);

CREATE INDEX idx_paciente ON consultas(id_paciente);
CREATE INDEX idx_medico ON consultas(id_medico)