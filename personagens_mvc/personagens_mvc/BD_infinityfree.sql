CREATE TABLE personagens (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    faccao VARCHAR(100) NOT NULL,
    habilidade VARCHAR(100) NOT NULL
);

INSERT INTO personagens (nome, faccao, habilidade) VALUES
('Arthur Morgan', 'Gangue Van der Linde', 'Pontaria e rastreamento'),
('John Marston', 'Gangue Van der Linde', 'Combate e sobrevivência'),
('Dutch van der Linde', 'Gangue Van der Linde', 'Oratória e liderança'),
('Hosea Matthews', 'Gangue Van der Linde', 'Planejamento e lábia'),
('Sadie Adler', 'Gangue Van der Linde', 'Tiro e sobrevivência'),
('Charles Smith', 'Gangue Van der Linde', 'Rastreamento e tiro'),
('Micah Bell', 'Gangue Van der Linde', 'Pontaria e violência'),
('Colm O''Driscoll', 'O''Driscoll Boys', 'Liderança e brutalidade'),
('Andrew Milton', 'Agência Pinkerton', 'Investigação e negociação');
