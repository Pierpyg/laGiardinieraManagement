CREATE TABLE table2 (
    id INT AUTO_INCREMENT PRIMARY KEY,
    Azienda VARCHAR(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    Prodotto VARCHAR(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    IvaPercentualeAcquisto DECIMAL(5,2),
    PrezzoAcquisto DECIMAL(10,2),
    PrezzoIvatoAcquisto DECIMAL(10,2),
    UnitàAcquisto VARCHAR(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
    IvaPercentualeVendita DECIMAL(5,2),
    PrezzoVendita DECIMAL(10,2),
    PrezzoIvatoVendita DECIMAL(10,2),
    UnitàVendita VARCHAR(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
    MarginePercentuale DECIMAL(5,2),
    MargineEuro DECIMAL(10,2)
);