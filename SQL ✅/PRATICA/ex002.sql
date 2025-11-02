USE exercicios;

ALTER TABLE enfermeiros 
	ADD COLUMN salario NUMERIC(8,2),
    MODIFY COLUMN turno VARCHAR(20),
    DROP COLUMN nome