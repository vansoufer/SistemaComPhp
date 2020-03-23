-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03-Dez-2019 às 15:35
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cme`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipamentos`
--

CREATE TABLE `equipamentos` (
  `id` int(11) NOT NULL,
  `codigo` int(5) UNSIGNED ZEROFILL NOT NULL,
  `nome` varchar(50) NOT NULL,
  `dtcompra` date NOT NULL,
  `setor` varchar(50) NOT NULL,
  `dtfabricacao` date NOT NULL,
  `tpgarantia` varchar(20) NOT NULL,
  `descricao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `equipamentos`
--

INSERT INTO `equipamentos` (`id`, `codigo`, `nome`, `dtcompra`, `setor`, `dtfabricacao`, `tpgarantia`, `descricao`) VALUES
(1, 00001, 'Soldador', '2018-08-15', 'tecnico', '2017-08-15', '02 anos', 'Maquina para realizar solda'),
(2, 00015, 'Soldador', '1970-01-01', 'setor', '1970-01-01', 'tpgarantia', '				'),
(3, 00056, 'maquina de solda', '2019-10-17', 'lab', '2019-10-18', 'sfff', '				udugfiuci'),
(4, 00052, 'BAZUCA', '2019-10-18', 'tecnico', '2019-10-01', '2 ANOS', '				KOAODK'),
(5, 00052, 'BAZUCA', '2019-10-18', 'tecnico', '2019-10-01', '2 ANOS', '				KOAODK'),
(6, 00089, 'huj', '2019-10-24', 'lab', '2019-10-23', '2 ANOS', '				sef'),
(7, 00000, 'ferro', '2019-11-04', 'lab', '1995-01-02', '2 ANOS', '			houhoh	');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedores`
--

CREATE TABLE `fornecedores` (
  `id` int(11) NOT NULL,
  `cnpj` varchar(20) NOT NULL,
  `razao` varchar(50) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `prodforn` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens`
--

CREATE TABLE `itens` (
  `codigo` int(11) NOT NULL,
  `tipoitem` varchar(20) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descricao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `itens`
--

INSERT INTO `itens` (`codigo`, `tipoitem`, `nome`, `descricao`) VALUES
(1, 'teste', 'teste', 'teste'),
(2, 'oleo', 'jk', '                kolj'),
(3, 'lixa', 'alianÃ§a', '                jusjik'),
(4, 'oleo', 'Jose', '                saxac');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ordemdeservico`
--

CREATE TABLE `ordemdeservico` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `local` varchar(20) NOT NULL,
  `encaminhar` varchar(20) NOT NULL,
  `dtregistro` date NOT NULL,
  `setor` varchar(20) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `solucao` varchar(100) NOT NULL,
  `nometec` varchar(30) NOT NULL,
  `datafinal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ordemdeservico`
--

INSERT INTO `ordemdeservico` (`id`, `nome`, `local`, `encaminhar`, `dtregistro`, `setor`, `descricao`, `status`, `solucao`, `nometec`, `datafinal`) VALUES
(17, 'Adriana', 'estoque', 'tecnico1', '2019-11-14', 'estoque', 'maquina de embalar quebrou		', 1, '', '', '0000-00-00'),
(18, 'Vanessa', 'administrativo', 'tecnico2', '2019-12-11', 'administrativo', 'autorizaÃ§Ã£o de acesso	', 1, '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `setores`
--

CREATE TABLE `setores` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `setores`
--

INSERT INTO `setores` (`codigo`, `nome`, `status`) VALUES
(1, 'RH', 'supervisor'),
(2, 'RH', 'ativo'),
(3, 'produÃ§Ã£o', 'ativo'),
(4, 'maquinario', 'inativo'),
(5, 'maquinario', 'ativo'),
(6, 'NOC', 'ativo'),
(7, 'Estoque', 'ativo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `perfil` varchar(20) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `sobrenome`, `sexo`, `cpf`, `perfil`, `login`, `senha`) VALUES
(13, 'JosÃ©', 'Ricardo', 'masculino', '11111111111', 'administrador', 'joserick', '1234'),
(14, 'Vanessa', 'Souto', 'feminino', '22222222222', 'tecnico', 'vansoufer', '312345'),
(15, 'Adriana', 'Mataveli', 'feminino', '33333333333', 'usuario', 'drimataveli', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `equipamentos`
--
ALTER TABLE `equipamentos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fornecedores`
--
ALTER TABLE `fornecedores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `itens`
--
ALTER TABLE `itens`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `ordemdeservico`
--
ALTER TABLE `ordemdeservico`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `setores`
--
ALTER TABLE `setores`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `equipamentos`
--
ALTER TABLE `equipamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `fornecedores`
--
ALTER TABLE `fornecedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `itens`
--
ALTER TABLE `itens`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ordemdeservico`
--
ALTER TABLE `ordemdeservico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `setores`
--
ALTER TABLE `setores`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
