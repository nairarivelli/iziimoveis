-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Nov-2023 às 01:14
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `iziimoveis`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE `admin` (
  `adminId` int(10) NOT NULL,
  `adminUsuario` varchar(255) DEFAULT NULL,
  `adminEmail` varchar(255) DEFAULT NULL,
  `adminSenha` varchar(50) DEFAULT NULL,
  `adminDataNasc` date DEFAULT NULL,
  `adminTelefone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`adminId`, `adminUsuario`, `adminEmail`, `adminSenha`, `adminDataNasc`, `adminTelefone`) VALUES
(1, 'Admin', 'admin@gmail.com', '123', '2003-12-19', '11949877280');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidade`
--

CREATE TABLE `cidade` (
  `cidadeId` int(50) DEFAULT NULL,
  `cidadeNome` varchar(255) DEFAULT NULL,
  `estadoId` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `detalhes`
--

CREATE TABLE `detalhes` (
  `id` int(10) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `conteudo` longtext DEFAULT NULL,
  `img` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estado`
--

CREATE TABLE `estado` (
  `estadoId` int(50) NOT NULL,
  `estadoNome` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `feedback`
--

CREATE TABLE `feedback` (
  `idFeedback` int(50) NOT NULL,
  `idUsuario` int(50) DEFAULT NULL,
  `fdescricao` varchar(300) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `imoveis`
--

CREATE TABLE `imoveis` (
  `idImovel` int(11) NOT NULL,
  `imovelTitulo` varchar(255) DEFAULT NULL,
  `imovelConteudo` varchar(500) DEFAULT NULL,
  `imovelTipo` varchar(255) DEFAULT NULL,
  `comodos` varchar(50) DEFAULT NULL,
  `locacao` varchar(100) DEFAULT NULL,
  `quartos` int(50) DEFAULT NULL,
  `banheiro` int(50) DEFAULT NULL,
  `lavanderia` int(50) DEFAULT NULL,
  `cozinha` int(50) DEFAULT NULL,
  `quintal` int(50) DEFAULT NULL,
  `andares` int(50) DEFAULT NULL,
  `andarApto` int(50) DEFAULT NULL,
  `metrosQuadrados` varchar(300) DEFAULT NULL,
  `preco` int(11) DEFAULT NULL,
  `localizacao` varchar(255) DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL,
  `pimage` varchar(300) DEFAULT NULL,
  `pimage1` varchar(300) DEFAULT NULL,
  `pimage2` varchar(300) DEFAULT NULL,
  `pimage3` varchar(300) DEFAULT NULL,
  `pimage4` varchar(300) DEFAULT NULL,
  `idUsuario` int(50) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `relacionado` longtext DEFAULT NULL,
  `mapimage` varchar(300) DEFAULT NULL,
  `topmapimage` varchar(300) DEFAULT NULL,
  `groundmapimage` varchar(300) DEFAULT NULL,
  `temRelacao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `imoveis`
--

INSERT INTO `imoveis` (`idImovel`, `imovelTitulo`, `imovelConteudo`, `imovelTipo`, `comodos`, `locacao`, `quartos`, `banheiro`, `lavanderia`, `cozinha`, `quintal`, `andares`, `andarApto`, `metrosQuadrados`, `preco`, `localizacao`, `cidade`, `estado`, `pimage`, `pimage1`, `pimage2`, `pimage3`, `pimage4`, `idUsuario`, `status`, `date`, `relacionado`, `mapimage`, `topmapimage`, `groundmapimage`, `temRelacao`) VALUES
(1, 'Apartamento Morumbi', '<p>Apartamento no Morumbi com f&aacute;cil acesso ao shopping Jardim Sul</p>\r\n<p>Com piscina, &aacute;rea de lazer e academia no condominio.</p>', 'Apartamento', '3', 'Aluguel', 2, 2, 1, 1, 0, 5, 5, '140', 2500, 'Morumbi Town', 'São Paulo', 'São Paulo', 'FSJZzcJYq4wGUjG9E1WTSrTF-whatsapp-image-2022-03-21-at-153434.jpg', 'mais-morumbi-no-morumbi-s-o-paulo.jpg', 'apartamento-com-3-quartos-venda-127m-no-lapa-s-o-paulo.jpg', 'PERSPECTIVA-ARTÍSTICA-DA-VARANDA-COM-CHURRASQUEIRA-DO-APARTAMENTO-DE-91M².jpg', '903312705180176.jpg', 0, 'available', NULL, '', 'portaria-apartamento-a-venda-1-quarto-29-77m-morumbi-sao-paulo-sp-metrocasa-morumbi1639716356684ftxfe.jpg', 'images.jpg', 'Sy-I0rO0MLQwTTZKTTEwMTaLL05NT8zN1DcwMzAx1E-Py0zJySxNss1UMzU1NbRNVjOyLQYA.jpg', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(50) NOT NULL,
  `usuarioNome` varchar(255) DEFAULT NULL,
  `usuarioEmail` varchar(255) DEFAULT NULL,
  `usuarioNumero` varchar(12) DEFAULT NULL,
  `usuarioSenha` varchar(255) DEFAULT NULL,
  `usuarioTipo` varchar(255) DEFAULT NULL,
  `usuarioImg` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `usuarioNome`, `usuarioEmail`, `usuarioNumero`, `usuarioSenha`, `usuarioTipo`, `usuarioImg`) VALUES
(1, 'Naira', 'Naira@izi.com', '1194876637', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'usuario', '288137250_1749834088692056_1981992880259677081_n.jpg'),
(2, 'Maria Helena', 'mariahelena@izi.com', '1174234324', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'corretor', 'Businesswoman Working on Laptop - 480x720.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Índices para tabela `detalhes`
--
ALTER TABLE `detalhes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`estadoId`);

--
-- Índices para tabela `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`idFeedback`);

--
-- Índices para tabela `imoveis`
--
ALTER TABLE `imoveis`
  ADD PRIMARY KEY (`idImovel`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `detalhes`
--
ALTER TABLE `detalhes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `estado`
--
ALTER TABLE `estado`
  MODIFY `estadoId` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `feedback`
--
ALTER TABLE `feedback`
  MODIFY `idFeedback` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `imoveis`
--
ALTER TABLE `imoveis`
  MODIFY `idImovel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
