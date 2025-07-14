-- Database: joao_correia_laravel
-- Tables Structure

-- Tabela de permissões/páginas do sistema
CREATE TABLE permissoes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pagina VARCHAR(50) NOT NULL UNIQUE
);

-- Inserindo as permissões/páginas
INSERT INTO permissoes (id, pagina) VALUES
(1, 'dashboard'),
(2, 'clientes'),
(3, 'agenda'),
(4, 'asistente'),
(5, 'equipe'),
(6, 'fornecedor'),
(7, 'produtos'),
(8, 'financas'),
(9, 'tarefas'),
(10, 'checklist'),
(11, 'orcamentos'),
(12, 'contratos'),
(13, 'aguardando'),
(14, 'veiculos');

-- Tabela de usuários (equipe)
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    permissoes TEXT NOT NULL COMMENT 'IDs das permissões separados por vírgula (ex: 1,2,3,8)',
    status ENUM('ativo', 'inativo') NOT NULL DEFAULT 'ativo',
    valor_por_hora DECIMAL(10,2) NOT NULL,
    custo_mensal DECIMAL(10,2) NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Exemplo de inserção de usuário
-- INSERT INTO users (nome, email, senha, permissoes, status, valor_por_hora, custo_mensal) VALUES
-- ('João Silva', 'joao@empresa.com', '$2y$10$...', '1,2,3,5,8', 'ativo', 150.00, 3200.00); 