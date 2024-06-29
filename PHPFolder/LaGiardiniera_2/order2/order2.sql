CREATE TABLE order2 (
    id INT PRIMARY KEY AUTO_INCREMENT,
    conferma_ordine_pv VARCHAR(255),
    giorno_arrivo ENUM('LUN', 'MAR', 'MER', 'GIO', 'VEN', 'SAB', 'DOM'),
    data_arrivo DATE,
    nome_prodotto VARCHAR(255),
    pirofila_2 INT,
    pirofila_4 INT,
    pirofila_6 INT,
    note TEXT,
    nome_responsabile_pv VARCHAR(255),
    firma_responsabile_pv VARCHAR(255)
);