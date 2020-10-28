-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 28-Out-2020 às 18:39
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `fseletro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `id_comentario` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `data` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`id_comentario`, `nome`, `msg`, `data`) VALUES
(5, 'Maria', 'Ola como vai?', '2020-10-24 20:51:31'),
(6, 'Nayara Suelen Fernandes Lopes', 'Olá, Teste.', '2020-10-28 09:16:35');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `idpedido` int(11) NOT NULL,
  `nomecliente` varchar(100) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `telefone` varchar(200) NOT NULL,
  `nomeproduto` varchar(255) NOT NULL,
  `valorunitario` float NOT NULL,
  `quantidade` varchar(50) NOT NULL,
  `valortotal` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `idproduto` int(11) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `preco` decimal(8,2) NOT NULL,
  `precofinal` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`idproduto`, `categoria`, `descricao`, `imagem`, `preco`, `precofinal`) VALUES
(2, 'geladeira', 'Geladeira Frost Free Brastemp Branca 375 litros.', './img/Geladeira Frost Free Brastemp Branca 375 litros.jpg', '2068.60', '1910.90'),
(4, 'fogao', 'Fogão de Piso 4 Bocas Atlas Monaco com Acedimento Automático', './img/Fogão de Piso 4 Bocas Atlas Monaco com Acedimento Automático.jpeg', '609.90', '519.70'),
(5, 'fogao', 'Fogão 4 Bocas Consul Inox com Mesa de Vidro', './img/Fogão 4 Bocas Consul Inox com Mesa de Vidro.jpg', '1209.90', '1129.00'),
(6, 'microondas', 'Micro-ondas Consul com Função Tira Odor Inox - 32 Litros', './img/Micro-ondas Consul 32 Litros Inox 220v.jpg', '580.90', '479.88'),
(7, 'microondas', 'Microondas 25L Espelhado Philco 220v', './img/Microondas 25L Espelhado Philco 220v.jpg', '508.70', '464.53'),
(8, 'microondas', 'Forno de Microondas Eletrolux 20L Branco', './img/Forno de Microondas Eletrolux 20L Branco.jpg', '459.90', '436.05'),
(9, 'lavadoraDeRoupas', 'Lavadora de Roupas Brastemp 11 kg', './img/Lavadora de Roupas Brastemp 11 kg com Turbo Performance Branca.jpg', '1699.00', '1214.10'),
(10, 'lavadoraDeRoupas', 'Lavadora de Roupas Philco Inverter 12KG', './img/Lavadora de Roupas Philco Inverter 12KG.jpg', '6389.00', '5019.00'),
(11, 'lavaLoucas', 'Lava-Louças Electrolux Inox com 10 Serviços, Painel Blue Touch', './img/Lava-Louças Electrolux Inox com 10 Serviços, 06 Programas de Lavagem e Painel Blue Touch.jpg', '3599.00', '2799.90'),
(12, 'lavaLoucas', 'Lava Louça Compacta 8 Serviços Branca 127V Brastem', './img/Lava Louça Compacta 8 Serviços Branca 127V Brastemp.jpg', '1970.50', '1730.61'),
(13, 'geladeira', 'Geladeira Frost Free Brastemp Side Inverse 540 litros', './img/Geladeira Frost Free Brastemp Side Inverse 540 litros.jpg', '6389.00', '5019.00'),
(14, 'geladeira', 'Geladeira Frost Free Consul Prata 340 litros', './img/Geladeira Frost Free Consul Prata 340 litros.jpg', '2199.90', '2069.00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentario`);

--
-- Índices para tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`idpedido`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`idproduto`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `idpedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `idproduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
