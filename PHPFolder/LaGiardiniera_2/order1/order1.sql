CREATE TABLE order1 (
    id INT PRIMARY KEY AUTO_INCREMENT,
    conferma_ordine_pv VARCHAR(255),
    giorno_arrivo ENUM('LUN', 'MAR', 'MER', 'GIO', 'VEN', 'SAB', 'DOM'),
    data_arrivo DATE,
    nome_prodotto VARCHAR(255),
    quantita_monouso_1 INT,
    quantita_monouso_2 INT,
    quantita_monouso_4 INT,
    quantita_monouso_6 INT,
    nome_prodotto_2 VARCHAR(255),
    quantita_tegamini INT,
    note TEXT,
    nome_responsabile_pv VARCHAR(255),
    firma_responsabile_pv VARCHAR(255)
);