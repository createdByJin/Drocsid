-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Jun-2021 às 16:42
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_drocsid`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `descricao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `descricao`) VALUES
(1, 'Eletrônicos'),
(2, 'Roupas'),
(3, 'Ferramentas'),
(4, 'Alimentos'),
(5, 'Medicamentos'),
(6, 'Bebidas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produto` int(11) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `descricao`, `quantidade`, `categoria_id`) VALUES
(1, 'Smart TV LED 32 HD', 4, 1),
(2, 'Home Theater', 3, 1),
(3, 'iPhone 11 Apple 64GB branco', 7, 1),
(4, 'Smartphone Samsung Galaxy A21s Branco 64GB', 5, 1),
(5, 'Secador de Cabelos Philco Cherry Vermelho 2100W', 8, 1),
(6, 'Parafusadeira Philco Force PPF01 4,8V e 11 Bits - Bivolt', 10, 3),
(7, 'Tablet Multilaser M7 Plus NB304 Preto com 16GB, Tela 7', 2, 1),
(8, 'CAMISETA MANGA LONGA ADICOLOR CLASSICS', 5, 2),
(9, 'Calça De Moletom Masculina Saruel Skinny Sport Luxo', 2, 2),
(10, 'Kit Ferramentas Manuais Hobby com 135 Peças', 4, 3),
(11, 'Chave de Fenda Simples Isolada', 12, 3),
(12, 'Arroz Tio João 5kg Branco', 29, 4),
(13, 'Açúcar Refinado Caravelas 1kg', 17, 4),
(14, 'Trufa morango 30g', 112, 4),
(15, 'DIPIRONA 500MG 30 COMPRIMIDOS GENÉRICO', 33, 5),
(16, 'PARACETAMOL 750MG 20 COMPRIMIDOS GENÉRICO', 52, 5),
(17, 'VITAMINA C 500MG 60 CÁPSULAS', 98, 5),
(18, 'ANALGÉSICO DORFLEX 50 COMPRIMIDOS', 201, 5),
(19, 'Alicate Universal 8 Pol. Niquelado Cabo Dupla Injeção Mtx', 6, 3),
(20, 'Alicate de Pressão tipo C', 1, 3),
(21, 'Jaqueta Feminina Corta Vento Em Poliéster', 10, 2),
(22, 'Blusa Feminina Com Manga Preto', 8, 2),
(23, 'WHISKY OLD PARR 1L', 30, 6),
(24, 'Vinho Malbec 750ml', 43, 6),
(25, 'Champagne Dom Pérignon Brut 750ml', 6, 6),
(26, 'Refrigerante Coca-Cola Sem Açúcar 250ml', 500, 6),
(27, 'Cerveja Budweiser 330ml Caixa (24 Unidades)', 1005, 6),
(28, 'Cerveja Skol Lata 350ml', 399, 6),
(29, 'Creme Nutella 350gr Ferrero Avela', 22, 4),
(30, 'Cerveja Budweiser 269ml Lata', 65, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipousuario`
--

CREATE TABLE `tipousuario` (
  `id_tipoUsuario` int(11) NOT NULL,
  `descricao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tipousuario`
--

INSERT INTO `tipousuario` (`id_tipoUsuario`, `descricao`) VALUES
(1, 'ADM'),
(2, 'FUNC');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `login` varchar(25) NOT NULL,
  `senha` varchar(25) NOT NULL,
  `tipoUsuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome`, `login`, `senha`, `tipoUsuario_id`) VALUES
(1, 'Fernando Cavalcante', 'ADM', '12345', 1),
(2, 'César Teixeira', 'cesar123', '12345', 2),
(3, 'Marcos Nougueira', 'marcos_nougueira17', '12345', 2),
(4, 'Ana Cláudia', 'ana555', '12345', 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produto`),
  ADD KEY `fk_categoria_id` (`categoria_id`);

--
-- Índices para tabela `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD PRIMARY KEY (`id_tipoUsuario`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `fk_tipoUsuario_id` (`tipoUsuario_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `tipousuario`
--
ALTER TABLE `tipousuario`
  MODIFY `id_tipoUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `fk_categoria_id` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id_categoria`);

--
-- Limitadores para a tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_tipoUsuario_id` FOREIGN KEY (`tipoUsuario_id`) REFERENCES `tipousuario` (`id_tipoUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
