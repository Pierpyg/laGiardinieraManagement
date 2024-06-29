CREATE TABLE table3 (
    id INT AUTO_INCREMENT PRIMARY KEY,
    Data DATE,
    PuntoVendita VARCHAR(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
    NomeRichiedente VARCHAR(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
    Numero INT,
    Quantita INT,
    UM VARCHAR(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
    DescrizioneMerce VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
    Note VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
    FirmaRichiedente VARCHAR(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
    FirmaUfficioAcquisti VARCHAR(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci
);