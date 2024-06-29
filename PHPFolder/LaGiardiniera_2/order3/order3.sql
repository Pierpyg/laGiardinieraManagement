CREATE TABLE order3 (
    id INT PRIMARY KEY AUTO_INCREMENT,
    conferma_ordine_pv VARCHAR(255),
    giorno_arrivo ENUM('LUN', 'MAR', 'MER', 'GIO', 'VEN', 'SAB', 'DOM'),
    data_arrivo DATE,
    categoria VARCHAR(255),
    nome_prodotto VARCHAR(255),
    unita VARCHAR(255),
    valore INT,
    note TEXT,
    nome_responsabile_pv VARCHAR(255),
    firma_responsabile_pv VARCHAR(255)
);