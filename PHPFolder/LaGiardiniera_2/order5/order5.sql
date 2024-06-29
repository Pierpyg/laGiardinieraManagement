CREATE TABLE order5 (
    id INT PRIMARY KEY AUTO_INCREMENT,
    conferma_ordine_pv VARCHAR(255),
    giorno_arrivo ENUM('LUN', 'MAR', 'MER', 'GIO', 'VEN', 'SAB', 'DOM'),
    data_arrivo DATE,
    nome_prodotto VARCHAR(255),
    valore INT,
    note TEXT,
    nome_responsabile_pv VARCHAR(255),
    firma_responsabile_pv VARCHAR(255)
);