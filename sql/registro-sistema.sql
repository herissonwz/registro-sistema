CREATE TABLE registro (
    id INT AUTO_INCREMENT PRIMARY KEY,
    data DATE NOT NULL,
    hora TIME NOT NULL,
    solicitante VARCHAR(255) NOT NULL,
    setor VARCHAR(100) NOT NULL,
    demanda_tecnica TEXT NOT NULL,
    assinatura_solicitante VARCHAR(255) NOT NULL,
    tecnico_el_remoto VARCHAR(255) NOT NULL,
    chamado_helpdesk VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

DESCRIBE registro;

