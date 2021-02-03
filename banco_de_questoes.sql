-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23-Dez-2016 às 12:19
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banco de questoes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_aluno`
--

CREATE TABLE `cadastro_aluno` (
  `id_aluno` int(11) NOT NULL,
  `alu_nome` varchar(250) NOT NULL,
  `alu_email` varchar(300) NOT NULL,
  `alu_senha` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadastro_aluno`
--

INSERT INTO `cadastro_aluno` (`id_aluno`, `alu_nome`, `alu_email`, `alu_senha`) VALUES
(1, 'ivan', 'ivan', 'ivan'),
(2, 'yury', 'yury', 'yuty'),
(3, 'Yury Nascimento Abreu', 'yurynascimento96', 'senha'),
(4, 'TR', 'RT', 'TRH'),
(5, 'TR', 'RT', ''),
(6, 'SDR', 'SRTY', ''),
(7, 'ivani', 'ivani', 'ivani'),
(8, 'zica', 'zica', 'zica'),
(9, 'xi', 'xi', 'xi'),
(10, 'Pedro Ygor', 'xlryuk.games@gmail.com', '123456'),
(14, 'ghij', 'ghij@123456', '123456'),
(12, 't', '', ''),
(13, 'abcdef', 'abcdef@123456', '123456'),
(15, 'Liziane Martins', 'liziane@martins.com', '4002'),
(16, 'ca', 'ca', 'ca');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_disciplina`
--

CREATE TABLE `cad_disciplina` (
  `id_disciplina` int(11) NOT NULL,
  `dis_portugues` text,
  `dis_matematica` varchar(2000) DEFAULT NULL,
  `dis_geografia` varchar(2000) DEFAULT NULL,
  `dis_historia` varchar(2000) DEFAULT NULL,
  `dis_quimica` varchar(2000) DEFAULT NULL,
  `dis_filosofia` varchar(2000) DEFAULT NULL,
  `dis_biologia` varchar(2000) DEFAULT NULL,
  `dis_ingles` varchar(2000) DEFAULT NULL,
  `dis_espanhol` varchar(2000) DEFAULT NULL,
  `dis_fisica` varchar(2000) DEFAULT NULL,
  `dis_ed_fisica` varchar(2000) DEFAULT NULL,
  `dis_artes` varchar(2000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cad_disciplina`
--

INSERT INTO `cad_disciplina` (`id_disciplina`, `dis_portugues`, `dis_matematica`, `dis_geografia`, `dis_historia`, `dis_quimica`, `dis_filosofia`, `dis_biologia`, `dis_ingles`, `dis_espanhol`, `dis_fisica`, `dis_ed_fisica`, `dis_artes`) VALUES
(1, 'gfgf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'gfgf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'asdsadasdasdasdasdasdasd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, '\r\n1. A palavra que apresenta tantos fonemas quantas sÃ£o as letras que a compÃµem Ã©:\r\n\r\na) importÃ¢ncia\r\nb) milhares\r\nc) sequer\r\nd) tÃ©cnica\r\ne) adolescente \r\n\r\n\r\n2. Em qual das palavras abaixo a letra x apresenta nÃ£o um, mas dois fonemas?\r\n\r\na) exemplo \r\nb) complexo \r\nc) prÃ³ximos\r\nd) executivo \r\ne) luxo	\r\n\r\n\r\n3. Qual palavra possui dois dÃ­grafos?\r\n\r\na) fechar\r\nb) sombra \r\nc) ninharia \r\nd) correndo \r\ne) pÃªssego	\r\n\r\n\r\n4. Indique a alternativa cuja sequÃªncia de vocÃ¡bulos apresenta, na mesma ordem, o seguinte: ditongo, hiato, hiato, ditongo.\r\n\r\na) jamais / Deus / luar / daÃ­ \r\nb) joias / fluir / jesuÃ­ta / fogarÃ©u\r\nc) Ã³dio / saguÃ£o / leal / poeira\r\nd) quais / fugiu / caiu / histÃ³ria\r\n\r\n\r\n\r\n5. Por que a forma verbal "hÃ¡" leva acento ortogrÃ¡fico?\r\n\r\na) Ã‰ um monossÃ­labo Ã¡tono.\r\nb) Ã‰ forma verbal.\r\nc) Ã‰ palavra sem valor semÃ¢ntico. \r\nd) Ã‰ monossÃ­labo tÃ´nico terminado em "a". \r\ne) A vogal "a" possui timbre aberto.	\r\n\r\n\r\n6. Assinale a opÃ§Ã£o em que todas as palavras se acentuam pela mesma regra.\r\n\r\na) ananÃ¡s - pajÃ© - sÃ³ \r\nb) fÃ³rceps - Ã¡rvore - pÃ©ssimo\r\nc) torÃ³ - piauÃ­ - cafÃ© \r\nd) balaÃºstre - caÃ­ - substituÃ­ste \r\ne) rÃ©u - pÃ³ - mÃ¡	\r\n\r\n\r\n7. A alternativa em que duas palavras destacadas do texto recebem acento grÃ¡fico pelo mesmo motivo Ã©:\r\n\r\na) inevitÃ¡vel - polÃ­ticas \r\nb) Ã© - porquÃª \r\nc) vÃ¡rios - histÃ³ria\r\nd) contrÃ¡rio - paÃ­ses \r\ne) trÃªs - tÃªm	\r\n\r\n\r\n8. Assinale a alternativa em que as trÃªs palavras sÃ£o acentuadas de acordo com a mesma regra:\r\n\r\na) espÃ©cie - atÃ© - zoÃ³logo\r\nb) vocÃª - contrÃ¡rio - palÃ¡cio\r\nc) alienÃ­gena - nÃ³s - biolÃ³gica\r\nd) cÃ©rebro - prÃ³prio  - CÃ©sar\r\ne) inglÃªs - tambÃ©m - chimpanzÃ©	\r\n\r\n\r\n9. Assinale a palavra que nÃ£o se completa com "i", e sim com "e".\r\n\r\na) pr_vilÃ©gio \r\nb) _mpecilho \r\nc) pÃ¡t_o \r\nd) dent_frÃ­cio \r\ne) pont_agudo	\r\n\r\n\r\n10. Assinale a alternativa cujas palavras estÃ£o todas corretamente grafadas.\r\n\r\na) pajÃ©, xadrÃªs, flecha, mixto, aconchego\r\nb) aboliÃ§Ã£o, tribo, pretensÃ£o, obsecado, cansaÃ§o\r\nc) gorjeta, sargeta, picina, florecer, consiliar \r\nd) xadrez, ficha, mexerico, enxame, enxurrada\r\ne) pagÃ©, xadrÃªs, flexa, mecherico, enxame	', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, '\r\n1. A palavra que apresenta tantos fonemas quantas sÃ£o as letras que a compÃµem Ã©:\r\n\r\na) importÃ¢ncia\r\nb) milhares\r\nc) sequer\r\nd) tÃ©cnica\r\ne) adolescente \r\n\r\n\r\n2. Em qual das palavras abaixo a letra x apresenta nÃ£o um, mas dois fonemas?\r\n\r\na) exemplo \r\nb) complexo \r\nc) prÃ³ximos\r\nd) executivo \r\ne) luxo	\r\n\r\n\r\n3. Qual palavra possui dois dÃ­grafos?\r\n\r\na) fechar\r\nb) sombra \r\nc) ninharia \r\nd) correndo \r\ne) pÃªssego	\r\n\r\n\r\n4. Indique a alternativa cuja sequÃªncia de vocÃ¡bulos apresenta, na mesma ordem, o seguinte: ditongo, hiato, hiato, ditongo.\r\n\r\na) jamais / Deus / luar / daÃ­ \r\nb) joias / fluir / jesuÃ­ta / fogarÃ©u\r\nc) Ã³dio / saguÃ£o / leal / poeira\r\nd) quais / fugiu / caiu / histÃ³ria\r\n\r\n\r\n\r\n5. Por que a forma verbal "hÃ¡" leva acento ortogrÃ¡fico?\r\n\r\na) Ã‰ um monossÃ­labo Ã¡tono.\r\nb) Ã‰ forma verbal.\r\nc) Ã‰ palavra sem valor semÃ¢ntico. \r\nd) Ã‰ monossÃ­labo tÃ´nico terminado em "a". \r\ne) A vogal "a" possui timbre aberto.	\r\n\r\n\r\n6. Assinale a opÃ§Ã£o em que todas as palavras se acentuam pela mesma regra.\r\n\r\na) ananÃ¡s - pajÃ© - sÃ³ \r\nb) fÃ³rceps - Ã¡rvore - pÃ©ssimo\r\nc) torÃ³ - piauÃ­ - cafÃ© \r\nd) balaÃºstre - caÃ­ - substituÃ­ste \r\ne) rÃ©u - pÃ³ - mÃ¡	\r\n\r\n\r\n7. A alternativa em que duas palavras destacadas do texto recebem acento grÃ¡fico pelo mesmo motivo Ã©:\r\n\r\na) inevitÃ¡vel - polÃ­ticas \r\nb) Ã© - porquÃª \r\nc) vÃ¡rios - histÃ³ria\r\nd) contrÃ¡rio - paÃ­ses \r\ne) trÃªs - tÃªm	\r\n\r\n\r\n8. Assinale a alternativa em que as trÃªs palavras sÃ£o acentuadas de acordo com a mesma regra:\r\n\r\na) espÃ©cie - atÃ© - zoÃ³logo\r\nb) vocÃª - contrÃ¡rio - palÃ¡cio\r\nc) alienÃ­gena - nÃ³s - biolÃ³gica\r\nd) cÃ©rebro - prÃ³prio  - CÃ©sar\r\ne) inglÃªs - tambÃ©m - chimpanzÃ©	\r\n\r\n\r\n9. Assinale a palavra que nÃ£o se completa com "i", e sim com "e".\r\n\r\na) pr_vilÃ©gio \r\nb) _mpecilho \r\nc) pÃ¡t_o \r\nd) dent_frÃ­cio \r\ne) pont_agudo	\r\n\r\n\r\n10. Assinale a alternativa cujas palavras estÃ£o todas corretamente grafadas.\r\n\r\na) pajÃ©, xadrÃªs, flecha, mixto, aconchego\r\nb) aboliÃ§Ã£o, tribo, pretensÃ£o, obsecado, cansaÃ§o\r\nc) gorjeta, sargeta, picina, florecer, consiliar \r\nd) xadrez, ficha, mexerico, enxame, enxurrada\r\ne) pagÃ©, xadrÃªs, flexa, mecherico, enxame	', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1. A palavra que apresenta tantos fonemas quantas sÃ£o as letras que a compÃµem Ã©:\r\n\r\na) importÃ¢ncia\r\nb) milhares\r\nc) sequer\r\nd) tÃ©cnica\r\ne) adolescente ', NULL),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2. Em qual das palavras abaixo a letra x apresenta nÃ£o um, mas dois fonemas?\r\n\r\na) exemplo \r\nb) complexo \r\nc) prÃ³ximos\r\nd) executivo \r\ne) luxo	\r\n', NULL),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3. Qual palavra possui dois dÃ­grafos?\r\n\r\na) fechar\r\nb) sombra \r\nc) ninharia \r\nd) correndo \r\ne) pÃªssego	', NULL),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Qual animal mÃ­stico tem no filme "Labirinto do Fauno"?\r\na)Fauno\r\nb)OfÃ©lia\r\nc)CapitÃ£o\r\nd)MandrÃ¡gora\r\ne)Cobra');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_professor`
--

CREATE TABLE `cad_professor` (
  `id_professor` int(11) NOT NULL,
  `pro_nome` varchar(250) NOT NULL,
  `pro_email` varchar(300) NOT NULL,
  `pro_senha` varchar(300) DEFAULT NULL,
  `pro_disciplina` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cad_professor`
--

INSERT INTO `cad_professor` (`id_professor`, `pro_nome`, `pro_email`, `pro_senha`, `pro_disciplina`) VALUES
(1, '', 'asd', 'asd', 'asd'),
(3, 'Ygor', 'ygorbragax@gmail.com', '123456', 'mate'),
(4, 'Zeneide Maria', 'zeneide@davinci.com', 'fauno', 'Artes');

-- --------------------------------------------------------

--
-- Estrutura da tabela `simulado`
--

CREATE TABLE `simulado` (
  `id_simulado` int(11) NOT NULL,
  `sim_portugues` varchar(200) NOT NULL,
  `sim_matematica` varchar(200) NOT NULL,
  `sim_artes` varchar(200) NOT NULL,
  `sim_geografia` varchar(200) NOT NULL,
  `sim_historia` varchar(200) NOT NULL,
  `sim_fisica` varchar(200) NOT NULL,
  `sim_filosofia` varchar(200) NOT NULL,
  `sim_sociologia` varchar(200) NOT NULL,
  `sim_quimica` varchar(200) NOT NULL,
  `sim_biologia` varchar(200) NOT NULL,
  `sim_espanhol` varchar(200) NOT NULL,
  `sim_ingles` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro_aluno`
--
ALTER TABLE `cadastro_aluno`
  ADD PRIMARY KEY (`id_aluno`);

--
-- Indexes for table `cad_disciplina`
--
ALTER TABLE `cad_disciplina`
  ADD PRIMARY KEY (`id_disciplina`);

--
-- Indexes for table `cad_professor`
--
ALTER TABLE `cad_professor`
  ADD PRIMARY KEY (`id_professor`);

--
-- Indexes for table `simulado`
--
ALTER TABLE `simulado`
  ADD PRIMARY KEY (`id_simulado`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastro_aluno`
--
ALTER TABLE `cadastro_aluno`
  MODIFY `id_aluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `cad_disciplina`
--
ALTER TABLE `cad_disciplina`
  MODIFY `id_disciplina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `cad_professor`
--
ALTER TABLE `cad_professor`
  MODIFY `id_professor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `simulado`
--
ALTER TABLE `simulado`
  MODIFY `id_simulado` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
