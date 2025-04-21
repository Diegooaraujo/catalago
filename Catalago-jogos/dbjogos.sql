-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22/04/2025 às 01:51
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbjogos`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `nitendo`
--

CREATE TABLE `nitendo` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `descricao` varchar(10000) DEFAULT NULL,
  `nome_imagem` varchar(50) DEFAULT NULL,
  `genero` varchar(400) DEFAULT NULL,
  `fk_id` int(11) DEFAULT NULL,
  `desenvolvedor` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `nitendo`
--

INSERT INTO `nitendo` (`id`, `nome`, `descricao`, `nome_imagem`, `genero`, `fk_id`, `desenvolvedor`) VALUES
(2, 'Pokémo Scarlet', 'Os jogos Pokémon Scarlet e Pokémon Violet são os primeiros RPG de mundo aberto da série Pokémon. À medida que desfruta das características da série - conhecer, juntar-se a, lutar contra, treinar e trocar Pokémon - poderá mergulhar numa aventura recém-evoluída.', 'pokemon_scarlet.webp', ' Aventura, Rpg', 4, NULL),
(3, 'Hyrule Warriors', 'O jogo Hyrule Warriors: Age of Calamity é a única maneira de ver em primeira mão o que aconteceu 100 anos atrás. Dos bárbaros Bokoblins aos enormes Lynels, monstros ameaçadores surgiram em massa. Além de Link e Zelda, jogue com personagens como os quatro campeões e a jovem Impa.', 'Hyrule_Warriors_Age_of_Calamity.webp', 'Ação Aventura Luta', 5, NULL),
(48, 'Super Mario Odyssey', '	Embarque em uma aventura mundial com Mario, explorando diversos reinos e coletando Power Moons', 'painel-2x1m-super-mario-odyssey-decoracoes.webp', 'Plataforma', 50, 'Nintendo EPD'),
(49, 'Splatoon 3', 'Jogue batalhas de tinta em equipe em arenas coloridas e personalizáveis.', 'splatoon-3-capa.jpg', '	Tiro, Multiplayer', 51, 'Nintendo EPD'),
(50, 'Ori and the Will of the Wisps', 'Uma jornada emocionante em um mundo mágico, com belos visuais e uma trilha sonora memorável.', 'ori-and-the-will-of-the-wisps-capa.webp', 'Plataforma, Metroidvania', 52, 'Moon Studios'),
(51, 'Metroid Dread', 'Um retorno triunfante à série Metroid, com exploração, combate e suspense em um planeta alienígena.', 'metroid-dread.webp', 'Ação, Plataforma', 53, 'MercurySteam'),
(52, 'Paper Mario: The Origami King', 'Uma aventura divertida e criativa no universo de Mario, com um sistema de batalha único e quebra-cabeças desafiadores.', 'Paper-Mario-The-Origami-King.jpg.webp', 'RPG', 54, 'Intelligent Systems'),
(53, 'Minecraft', 'Um mundo infinito onde você pode construir tudo o que imaginar, desde casas simples até cidades complexas.', 'minecraftt.png', 'Aventura, Construção', 55, 'Mojang Studios'),
(54, 'Super Mario Party', 'O Super Mario Party é um jogo de tabuleiro inspirado no clássico Mario Party, desta vez marcando presença no Nintendo Switch com uma infinidade de novos minigames para se divertir com seus amigos. O título apresenta diversas novas maneiras de jogar, graças ao auxílio dos joy-cons e seus sensores de movimento.', 'super_mario_party.webp', ' Party game, Jogo eletrônico de quebra-cabeça', 56, 'Nintendo Cube');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pc`
--

CREATE TABLE `pc` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `descricao` varchar(10000) DEFAULT NULL,
  `nome_imagem` varchar(50) DEFAULT NULL,
  `genero` varchar(400) DEFAULT NULL,
  `fk_id` int(11) DEFAULT NULL,
  `desenvolvedor` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `pc`
--

INSERT INTO `pc` (`id`, `nome`, `descricao`, `nome_imagem`, `genero`, `fk_id`, `desenvolvedor`) VALUES
(1, 'Valorant', '\r\nValorant é um FPS tático 5x5 que tem como objetivo plantar ou desarmar a Spike. Os jogadores têm apenas uma vida por rodada e a partida é vencida pela equipe que ganhar 13 rodadas (de 25) primeiro', 'VALORANT_Logo_V.png', 'Jogo de tiro tático', 1, 'Riot Games'),
(2, 'League of Legends', ' League of Legends, também conhecido como LOL, é um jogo de estratégia em que duas equipes de cinco poderosos Campeões se enfrentam para destruir a base uma da outra. Escolha entre mais de 140 Campeões para realizar jogadas épicas, assegurar abates e destruir torres conforme você luta até a vitória.', 'league-of-legends.webp', 'MOBA', 2, 'Riot Games'),
(3, 'Cs Go', 'O Counter-Strike: Global Offensive (CS:GO) é a continuação do jogo de equipas cheio de ação que foi pioneiro quando foi lançado há 12 anos atrás. O CS: GO apresenta-se com novos mapas, personagens, armas e ainda oferece versões atualizadas de conteúdo do CS clássico (de_dust, etc.).', 'cs_go.png', 'Jogo de tiro tático', 3, ' Valve Corporation, Hidden Path Entertainment'),
(5, 'The last of us 2', 'Cinco anos depois de uma jornada perigosa pelos Estados Unidos num cenário pós-pandêmico, Ellie e Joel foram morar em Jackson, Wyoming. A vida numa comunidade próspera de sobreviventes lhes trouxe paz e estabilidade, apesar da ameaça constante dos infectados e de outros sobreviventes mais desesperados.', 'the last of us.webp', ' Jogo eletrônico de ação e aventura, Jogo eletrônico de tiro, Survival horror', 5, 'Naughty Dog'),
(68, 'Elden Ring', 'Em Elden Ring os jogadores percorrem livremente pelo mundo aberto interativo, onde os elementos de jogabilidade incluem combate, com vários tipos de armas e feitiços mágicos, passeios a cavalo e crafting.', 'eldenring.png', 'RPG', 68, 'FromSoftware'),
(69, 'God of War Ragnarok', 'Kratos e seu filho, Atreus, embarcam em uma jornada épica através dos Nove Reinos em busca de respostas e para impedir o Ragnarök, o fim dos mundos.', 'god-of-war.jpg', 'Ação', 69, 'Santa Monica Studio'),
(70, 'Horizon Forbidden West', 'Aloy continua sua jornada em um mundo pós-apocalíptico dominado por máquinas, explorando novas terras e enfrentando novas ameaças.', 'HORIZON-FORBIDDEN-WEST.jpg', 'Ação, RPG', 70, 'Guerrilla Games'),
(71, 'Marvel\\\'s Spider-Man: Miles Morales', 'Miles Morales assume o manto de Spider-Man em uma nova aventura em Nova York, com habilidades únicas e uma história emocionante.', 'spider-man-miles-morales.webp', 'Ação, Aventura', 71, 'Insomniac Games'),
(72, 'Starfield', 'Explore uma galáxia vasta e cheia de mistérios a bordo de sua nave espacial. Crie seu próprio personagem e construa sua história.', 'starfield_23ps.jpg', 'RPG', 72, 'Bethesda Game Studios'),
(73, 'Red Dead Redemption 2', 'Red Dead Redemption 2 é um jogo eletrônico de ação-aventura com temática faroeste. Jogado numa perspectiva de primeira ou terceira pessoa, o jogo se passa em um ambiente de mundo aberto, apresentando modos para um jogador e multijogador online, este último lançado sob Red Dead Online.', 'redDead2.jpg', 'Ação, Aventura', 73, 'Rockstar Games'),
(74, 'Gears 5', 'A saga Gears of War continua com uma campanha emocionante e um modo multiplayer competitivo intenso.', 'gears5.webp', 'Tiro em terceira pessoa, Jogo eletrônico de ação e aventura', 74, 'The Coalition'),
(75, 'Uncharted: Legacy of Thieves Collection', 'Remasterização em 4K dos clássicos Uncharted 4: A Thief\\\'s End e Uncharted: The Lost Legacy, com gráficos aprimorados e desempenho otimizado.', 'uncharted-legacy-of-thieves-hero-keyart-02.webp', 'Aventura', 75, 'Naughty Dog'),
(76, 'Ori and the Will of the Wisps', 'Uma jornada emocionante em um mundo mágico, com belos visuais e uma trilha sonora memorável.', 'ori-and-the-will-of-the-wisps-capa.webp', 'Plataforma, Metroidvania', 76, 'Moon Studios'),
(77, 'Psychonauts 2', 'Um jogo de plataforma psicodélico com humor irreverente e personagens memoráveis.', 'psychonauts2.jpg', 'Aventura, Plataforma', 77, 'Double Fine Productions'),
(78, 'Ghost of Tsushima', 'Uma experiência samurai épica em um Japão feudal, com combate visceral e um mundo aberto deslumbrante.', 'ghost-of-tsushima.jpg', 'Ação, Aventura', 78, 'Sucker Punch Productions'),
(79, 'Returnal', 'Um roguelike de ação em terceira pessoa com elementos de terror psicológico, ambientado em um planeta alienígena hostil.', 'returnaljpg.jpg', 'Roguelike, Aventura', 79, 'Housemarque'),
(80, 'Forza Horizon 5', 'Um mundo aberto vibrante e cheio de carros, com eventos emocionantes e personalização profunda.', 'forza-5.jpg', 'Corrida', 80, 'Playground Games'),
(81, 'Halo Infinite', 'Retorno da franquia icônica com multiplayer intenso e uma campanha épica.', 'halo-infinite.jfif', 'Tiro', 81, '343 Industries'),
(82, 'Sea of Thieves', 'Sea of Thieves se passa em um rico mundo de histórias, missões e personagens excêntricos. Você é livre para usar qualquer recurso à sua disposição e ter a vida de pirata que quiser. Cada temporada traz novos recursos de jogo e recompensas, incluindo conteúdo gratui', 'sea-of-thieves.webp', 'Aventura, Multiplayer', 82, 'Rare'),
(83, 'Minecraft', 'Um mundo infinito onde você pode construir tudo o que imaginar, desde casas simples até cidades complexas.', 'minecraftt.png', 'Aventura, Construção', 83, 'Mojang Studios'),
(84, 'Cyberpunk 2077', 'Uma aventura cyberpunk em um futuro distópico, com liberdade para personalizar seu personagem e explorar a cidade de Night City.', 'Cyberpunk.jpg', '', 84, 'CD Projekt Red');

-- --------------------------------------------------------

--
-- Estrutura para tabela `playstation`
--

CREATE TABLE `playstation` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `descricao` varchar(10000) DEFAULT NULL,
  `nome_imagem` varchar(50) DEFAULT NULL,
  `fk_id` int(11) DEFAULT NULL,
  `genero` varchar(400) DEFAULT NULL,
  `desenvolvedor` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `playstation`
--

INSERT INTO `playstation` (`id`, `nome`, `descricao`, `nome_imagem`, `fk_id`, `genero`, `desenvolvedor`) VALUES
(72, 'The Last of Us', 'The Last of Us é uma experiência de gênero definitiva que mistura elementos de sobrevivência e ação para contar uma história de personagens sobre uma praga moderna dizimando a humanidade. A natureza invade a civilização, forçando os sobreviventes restantes a matarem por comida, armas e qualquer coisa que possam achar. Joel, um sobrevivente impiedoso, e Ellie, uma corajosa jovem garota adolescente que é sábia além de sua idade, devem trabalhar juntos para sobreviverem sua jornada através do que resta dos Estados Unidos.', 'file.jpg', 58, 'Ação', 'Naughty Dog'),
(73, 'Elden Ring', 'Em Elden Ring os jogadores percorrem livremente pelo mundo aberto interativo, onde os elementos de jogabilidade incluem combate, com vários tipos de armas e feitiços mágicos, passeios a cavalo e crafting.', 'eldenring.png', 59, 'RPG', 'FromSoftware'),
(74, 'God of War Ragnarok', 'Kratos e seu filho, Atreus, embarcam em uma jornada épica através dos Nove Reinos em busca de respostas e para impedir o Ragnarök, o fim dos mundos.', 'god-of-war.jpg', 60, 'Ação', 'Santa Monica Studio'),
(75, 'Horizon Forbidden West', 'Aloy continua sua jornada em um mundo pós-apocalíptico dominado por máquinas, explorando novas terras e enfrentando novas ameaças.', 'HORIZON-FORBIDDEN-WEST.jpg', 61, 'Ação, RPG', 'Guerrilla Games'),
(76, 'Marvel\\\'s Spider-Man: Miles Morales', 'Miles Morales assume o manto de Spider-Man em uma nova aventura em Nova York, com habilidades únicas e uma história emocionante.', 'spider-man-miles-morales.webp', 62, 'Ação, Aventura', 'Insomniac Games'),
(77, 'Red Dead Redemption 2', 'Red Dead Redemption 2 é um jogo eletrônico de ação-aventura com temática faroeste. Jogado numa perspectiva de primeira ou terceira pessoa, o jogo se passa em um ambiente de mundo aberto, apresentando modos para um jogador e multijogador online, este último lançado sob Red Dead Online.', 'redDead2.jpg', 63, 'Ação, Aventura', 'Rockstar Games'),
(78, 'Gears 5', 'A saga Gears of War continua com uma campanha emocionante e um modo multiplayer competitivo intenso.', 'gears5.webp', 64, 'Tiro em terceira pessoa, Jogo eletrônico de ação e aventura', 'The Coalition'),
(79, 'Bloodborne', 'Um RPG de ação desafiador ambientado em um gótico mundo de pesadelo, com combate frenético e atmosfera sombria.', 'bloodborne.jfif', 65, 'Ação, RPG', 'FromSoftware'),
(80, 'Uncharted: Legacy of Thieves Collection', 'Remasterização em 4K dos clássicos Uncharted 4: A Thief\\\'s End e Uncharted: The Lost Legacy, com gráficos aprimorados e desempenho otimizado.', 'uncharted-legacy-of-thieves-hero-keyart-02.webp', 66, 'Aventura', 'Naughty Dog'),
(81, 'Ghost of Tsushima', 'Uma experiência samurai épica em um Japão feudal, com combate visceral e um mundo aberto deslumbrante.', 'ghost-of-tsushima.jpg', 67, 'Ação, Aventura', 'Sucker Punch Productions'),
(82, 'Returnal', 'Um roguelike de ação em terceira pessoa com elementos de terror psicológico, ambientado em um planeta alienígena hostil.', 'returnaljpg.jpg', 68, 'Roguelike, Aventura', 'Housemarque'),
(83, 'Sea of Thieves', 'Sea of Thieves se passa em um rico mundo de histórias, missões e personagens excêntricos. Você é livre para usar qualquer recurso à sua disposição e ter a vida de pirata que quiser. Cada temporada traz novos recursos de jogo e recompensas, incluindo conteúdo gratui', 'sea-of-thieves.webp', 69, 'Aventura, Multiplayer', 'Rare'),
(84, 'Minecraft', 'Um mundo infinito onde você pode construir tudo o que imaginar, desde casas simples até cidades complexas.', 'minecraftt.png', 70, 'Aventura, Construção', 'Mojang Studios'),
(85, 'Cyberpunk 2077', 'Uma aventura cyberpunk em um futuro distópico, com liberdade para personalizar seu personagem e explorar a cidade de Night City.', 'Cyberpunk.jpg', 71, '', 'CD Projekt Red');

-- --------------------------------------------------------

--
-- Estrutura para tabela `requisitos_recomendados`
--

CREATE TABLE `requisitos_recomendados` (
  `id` int(11) NOT NULL,
  `OS` varchar(30) DEFAULT NULL,
  `armazenamento` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `requisitos_recomendados`
--

INSERT INTO `requisitos_recomendados` (`id`, `OS`, `armazenamento`) VALUES
(2, 'playstation 5', '100 GB de espaço disponível'),
(24, 'Windows 10', '75 GB de espaço SSD'),
(58, 'PlayStation 5,PlayStation 4', '100 gb'),
(59, 'PlayStation 4, PlayStation 5', '60 gb'),
(60, 'PlayStation 5,PlayStation 4', '90gb'),
(61, 'PlayStation 5,PlayStation 4', '50gb'),
(62, 'PlayStation 5, PlayStation 4', '70'),
(63, 'playstation 5, playstation4', ''),
(64, 'Xbox One, Xbox Series X/S', '50gb'),
(65, 'PlayStation 4', '30gb'),
(66, 'PlayStation 5', '50gb'),
(67, 'PlayStation 4, PlayStation 5', '50gb'),
(68, 'PlayStation 5', '30gb'),
(69, 'playstation 5', '50gb'),
(70, 'playstation 5, playstation 4, ', '5gb'),
(71, 'playstation 5, playstation 4', '70gb');

-- --------------------------------------------------------

--
-- Estrutura para tabela `requisitos_recomendados_nitendo`
--

CREATE TABLE `requisitos_recomendados_nitendo` (
  `id` int(11) NOT NULL,
  `OS` varchar(30) DEFAULT NULL,
  `armazenamento` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `requisitos_recomendados_nitendo`
--

INSERT INTO `requisitos_recomendados_nitendo` (`id`, `OS`, `armazenamento`) VALUES
(4, 'nitendo switch', '9.9 GB'),
(5, 'nitendo switch', ' 11.1 GB'),
(6, 'nitendo switch', '75 GB de espaço SSD'),
(50, 'Nintendo Switch', '5.8'),
(51, 'Nintendo Switch', '6.0 gb'),
(52, 'nitendo switch', '15gb'),
(53, 'Nintendo Switch', '6.1 gb'),
(54, 'Nintendo Switch', '5.8gb'),
(55, 'Nintendo Switch', '5gb'),
(56, 'Nintendo Switch', '5gb');

-- --------------------------------------------------------

--
-- Estrutura para tabela `requisitos_recomendados_pc`
--

CREATE TABLE `requisitos_recomendados_pc` (
  `id` int(11) NOT NULL,
  `OS` varchar(30) DEFAULT NULL,
  `processador` varchar(200) DEFAULT NULL,
  `placa_video` varchar(200) DEFAULT NULL,
  `memoria` varchar(40) DEFAULT NULL,
  `armazenamento` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `requisitos_recomendados_pc`
--

INSERT INTO `requisitos_recomendados_pc` (`id`, `OS`, `processador`, `placa_video`, `memoria`, `armazenamento`) VALUES
(1, 'Windows: 10', 'Ryzen 3 1200, Ryzen 5 2600X (AMD)', 'GTX 1050 Ti, Radeon R7 370', ' 4GB RAM', ' 43,5 GB'),
(2, 'Windows 10/11.', 'AMD: Ryzen 3 1200', 'NVIDIA: GeForce 9600GT, AMD: Radeon HD 6950', '	 4 GB', '16 GB (SSD)'),
(3, 'Windows 7/8/10.', ': Intel Pentium Dual-Core E5700 3 GHz ou AMD Phenom 8750 Triple-Core', 'Nvidia Geforce GT 630, AMD Radeon HD 6670', ' 4 GB', 'Espaço de armazenamento: 15 GB'),
(5, 'Windows 10', 'AMD Ryzen 5 1500X, Intel Core i7-4770K', ' AMD Radeon RX 470 (4 GB), AMD Radeon RX 6500 XT (4 GB)', '16 GB de RAM', '100 GB de espaço disponível'),
(68, 'windows 10,11', 'INTEL CORE I5-8400 or AMD RYZEN 3 3300X.', ' NVIDIA GEFORCE GTX 1060 3 GB or AMD RADEON RX 580 4 GB.', ' 12 GB de RAM', '60bg'),
(69, 'windows 10,11', ' Intel Core i5-4670k ou AMD Ryzen 3 1200.', ' Nvidia Geforce GTX 1060 (6GB), AMD RX 5500 XT (8GB) ou Intel Arc A750', '8GB de RAM', '90gb'),
(70, ' Windows 10,11', ' Intel Core i3-8100 ou AMD Ryzen 3 1300X.', 'NVIDIA GeForce GTX 1650 4GB ou AMD Radeon RX 5500XT 4GB.', 'RAM: 16 GB.', '50gb'),
(71, 'windows 10,11', ' Intel Core i5-4670 ou AMD Ryzen 5 1600', 'GPU: NVIDIA GeForce GTX 1060 6 GB ou AMD Radeon RX 580', '16 GB', ' 75 gb'),
(72, 'windows 10,11', ' AMD Ryzen 5 2600X ou Intel Core i7-6800K.', 'AMD Radeon RX 5700 ou NVIDIA GeForce 1070 Ti. DirectX: Versão 12.', 'RAM: 16 GB.', ' 125 GB'),
(73, 'windows 10,11', ' Intel Core i7-4770K / AMD Ryzen 5 1500X.', ' NVIDIA GeForce GTX 1060 de 6 GB / AMD Radeon RX 480 de 4 GB.', '12GB.', '150gb'),
(74, 'windows 10,11', 'AMD Ryzen 3 | Intel i5 Skylake.', ' AMD Radeon RX 570 | NVIDIA GeForce GTX 970 | NVIDIA GeForce GTX 1660ti', '8 GB de RAM.', '15gb'),
(75, 'windows 10,11', 'Intel i7-4770 ou AMD Ryzen 5 1500X.', 'NVIDIA GTX 1060 (6 GB) ou AMD RX 570 (4 GB)', '16 GB.', '126 GB de SSD.'),
(76, 'windows 10,11', 'AMD Athlon X4 | Intel Core i5 4460', 'NVIDIA GTX 950 | AMD R7 370', '8 GB RAM', ' 20 GB'),
(77, 'windows 10,11,7', ' Intel Core i3-3225, AMD Phenom II X6 1100T.', 'Nvidia GeForce GTX 1050, AMD Radeon RX 560.', '8 GB de RAM', '30gb'),
(78, 'windows 10,11', 'ntel Core i5-8600, AMD Ryzen 5 3600', 'NVIDIA GeForce RTX 2060,  AMD Radeon RX 5600 XT', '16 GB', '75 GB '),
(79, 'windows 10,11', 'Intel Core i5 6400 (4 núcleos 2,7 GHz) ou AMD Ryzen 5 1500X (4 núcleos 3,5 GHz)', 'Geforce RTX 2070 Super 8GB ou Radeon RX 6700 XT 12GB', '	16 GB', '60 GB'),
(80, 'windows 10,11', 'Intel i5-4460 ou AMD Ryzen 3 1200', 'NVidia GTX 1070 ou AMD RX 590', '8 GB de RAM', '110gb'),
(81, 'windows 10,11', 'AMD Ryzen 5 1600 or Intel i5-4440.', ' AMD RX 570 or Nvidia GTX 1050 Ti.', '8 GB de RAM', '50gb'),
(82, 'windows 10,11', ' Intel Q9450 @ 2.6GHz - AMD Phenom II X6 @ 3.3 GHz.', 'Nvidia GeForce GTX 650 - AMD Radeon 7750 - Intel A310.', NULL, '100 GB'),
(83, 'windows 10,11,8,7', ' Intel Celeron J4105 ou AMD FX-4100.', ' Intel HD Graphics 4000 ou AMD Radeon R5.', 'RAM: 4 GB', '5gb'),
(84, 'Windows 10/11.', 'Ryzen 5 1600／Intel Core i7-6700.', 'radeon RX 5700xt /Geforce RTX 2060 Super', '16bg', '70gb');

-- --------------------------------------------------------

--
-- Estrutura para tabela `requisitos_recomendados_xbox`
--

CREATE TABLE `requisitos_recomendados_xbox` (
  `id` int(11) NOT NULL,
  `OS` varchar(30) DEFAULT NULL,
  `armazenamento` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `requisitos_recomendados_xbox`
--

INSERT INTO `requisitos_recomendados_xbox` (`id`, `OS`, `armazenamento`) VALUES
(1, 'PlayStation, Xbox, NS e PC', '8 GB de RAM'),
(2, 'PS5, Xbox Series X|S e PC', '65 GB'),
(5, ' Windows Xp, Vista, 7, 8/8.1, ', 'uu'),
(16, ', Xbox One e Xbox Series X/S.', ''),
(17, 'Xbox Series X/S', '125gb'),
(18, 'Xbox One, Xbox Series X/S', '105gb'),
(19, 'Xbox One, Xbox Series X/S', '15gb'),
(20, 'Xbox One, Xbox Series X/S', '30gb'),
(21, 'Xbox One, Xbox Series X/S', '100gb'),
(22, 'Xbox One, Xbox Series X/S', '50gb'),
(23, 'Xbox One, Xbox Series X/S', '50gb'),
(24, 'Xbox 360, Xbox One, Xbox S,Xbo', ''),
(25, ' Xbox One e Xbox Series X/S.', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `senha`) VALUES
(2, 'diegoubatuba103@gmail.com', '1212'),
(4, 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Estrutura para tabela `xbox`
--

CREATE TABLE `xbox` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `descricao` varchar(10000) DEFAULT NULL,
  `nome_imagem` varchar(50) DEFAULT NULL,
  `genero` varchar(400) DEFAULT NULL,
  `fk_id` int(11) DEFAULT NULL,
  `desenvolvedor` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `xbox`
--

INSERT INTO `xbox` (`id`, `nome`, `descricao`, `nome_imagem`, `genero`, `fk_id`, `desenvolvedor`) VALUES
(1, 'EA SPORTS FC 24', 'O EA SPORTS FC 24 é uma nova era para o Jogo de Todo Mundo: mais de 19.000 atletas com licença completa, mais de 700 times e mais de 30 ligas, tudo isso na experiência de futebol mais autêntica já criada para PC.\r\n\r\nSinta o jogo de perto com três tecnologias de ponta que proporcionam um realismo inigualável em todas as partidas: HyperMotionV, PlayStyles otimizada pela Opta, e uma Frostbite™ Engine revolucionada, além de novas configurações gráficas que entregam visuais vívidos e aperfeiçoados no PC.', 'fifa_24.webp', 'Futebol', 1, NULL),
(2, 'Pay Day 3', 'PAYDAY 3 é a esperada sequência de um dos jogos de tiro cooperativos mais populares de todos os tempos. Desde a versão original, os jogadores de PAYDAY se divertem com a emoção de um assalto perfeitamente planejado e executado. É isso que torna PAYDAY uma experiência inigualável de FPS cooperativo de alta octanagem.', 'payday.webp', 'Ação, Cooperativo', 2, NULL),
(5, 'Terraria ', 'Terraria é um jogo eletrônico RPG de ação-aventura independente produzido pela desenvolvedora de jogos Re-Logic. Possui como características a exploração, artesanato, construção de estruturas e combate a monstros perigosos em um mundo 2D gerado de forma procedural.', 'Terraria.jpg', ' Jogo eletrônico de plataforma, Jogo eletrônico de ação e aventura, Jogabilidade não linea', 5, NULL),
(16, 'Elden Ring', 'Em Elden Ring os jogadores percorrem livremente pelo mundo aberto interativo, onde os elementos de jogabilidade incluem combate, com vários tipos de armas e feitiços mágicos, passeios a cavalo e crafting.', 'eldenring.png', 'RPG', 16, 'FromSoftware'),
(17, 'Starfield', 'Explore uma galáxia vasta e cheia de mistérios a bordo de sua nave espacial. Crie seu próprio personagem e construa sua história.', 'starfield_23ps.jpg', 'RPG', 17, 'Bethesda Game Studios'),
(18, 'Red Dead Redemption 2', 'Red Dead Redemption 2 é um jogo eletrônico de ação-aventura com temática faroeste. Jogado numa perspectiva de primeira ou terceira pessoa, o jogo se passa em um ambiente de mundo aberto, apresentando modos para um jogador e multijogador online, este último lançado sob Red Dead Online.', 'redDead2.jpg', 'Ação, Aventura', 18, 'Rockstar Games'),
(19, 'Ori and the Will of the Wisps', 'Uma jornada emocionante em um mundo mágico, com belos visuais e uma trilha sonora memorável.', 'ori-and-the-will-of-the-wisps-capa.webp', 'Plataforma, Metroidvania', 19, 'Moon Studios'),
(20, 'Psychonauts 2', 'Um jogo de plataforma psicodélico com humor irreverente e personagens memoráveis.', 'psychonauts2.jpg', 'Aventura, Plataforma', 20, 'Double Fine Productions'),
(21, 'Forza Horizon 5', 'Um mundo aberto vibrante e cheio de carros, com eventos emocionantes e personalização profunda.', 'forza-5.jpg', 'Corrida', 21, 'Playground Games'),
(22, 'Halo Infinite', 'Retorno da franquia icônica com multiplayer intenso e uma campanha épica.', 'halo-infinite.jfif', 'Tiro', 22, '343 Industries'),
(23, 'Sea of Thieves', 'Sea of Thieves se passa em um rico mundo de histórias, missões e personagens excêntricos. Você é livre para usar qualquer recurso à sua disposição e ter a vida de pirata que quiser. Cada temporada traz novos recursos de jogo e recompensas, incluindo conteúdo gratui', 'sea-of-thieves.webp', 'Aventura, Multiplayer', 23, 'Rare'),
(24, 'Minecraft', 'Um mundo infinito onde você pode construir tudo o que imaginar, desde casas simples até cidades complexas.', 'minecraftt.png', 'Aventura, Construção', 24, 'Mojang Studios'),
(25, 'Cyberpunk 2077', 'Uma aventura cyberpunk em um futuro distópico, com liberdade para personalizar seu personagem e explorar a cidade de Night City.', 'Cyberpunk.jpg', '', 25, 'CD Projekt Red');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `nitendo`
--
ALTER TABLE `nitendo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id` (`fk_id`);

--
-- Índices de tabela `pc`
--
ALTER TABLE `pc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id` (`fk_id`);

--
-- Índices de tabela `playstation`
--
ALTER TABLE `playstation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id` (`fk_id`);

--
-- Índices de tabela `requisitos_recomendados`
--
ALTER TABLE `requisitos_recomendados`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `requisitos_recomendados_nitendo`
--
ALTER TABLE `requisitos_recomendados_nitendo`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `requisitos_recomendados_pc`
--
ALTER TABLE `requisitos_recomendados_pc`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `requisitos_recomendados_xbox`
--
ALTER TABLE `requisitos_recomendados_xbox`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `xbox`
--
ALTER TABLE `xbox`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id` (`fk_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `nitendo`
--
ALTER TABLE `nitendo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de tabela `pc`
--
ALTER TABLE `pc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT de tabela `playstation`
--
ALTER TABLE `playstation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT de tabela `requisitos_recomendados`
--
ALTER TABLE `requisitos_recomendados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT de tabela `requisitos_recomendados_nitendo`
--
ALTER TABLE `requisitos_recomendados_nitendo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de tabela `requisitos_recomendados_pc`
--
ALTER TABLE `requisitos_recomendados_pc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT de tabela `requisitos_recomendados_xbox`
--
ALTER TABLE `requisitos_recomendados_xbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `xbox`
--
ALTER TABLE `xbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `nitendo`
--
ALTER TABLE `nitendo`
  ADD CONSTRAINT `nitendo_ibfk_1` FOREIGN KEY (`fk_id`) REFERENCES `requisitos_recomendados_nitendo` (`id`);

--
-- Restrições para tabelas `pc`
--
ALTER TABLE `pc`
  ADD CONSTRAINT `pc_ibfk_1` FOREIGN KEY (`fk_id`) REFERENCES `requisitos_recomendados_pc` (`id`);

--
-- Restrições para tabelas `playstation`
--
ALTER TABLE `playstation`
  ADD CONSTRAINT `playstation_ibfk_1` FOREIGN KEY (`fk_id`) REFERENCES `requisitos_recomendados` (`id`);

--
-- Restrições para tabelas `xbox`
--
ALTER TABLE `xbox`
  ADD CONSTRAINT `xbox_ibfk_1` FOREIGN KEY (`fk_id`) REFERENCES `requisitos_recomendados_xbox` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
