CREATE TABLE usuario_viajante(
	`id_viajante` int(11) NOT NULL,
  `nome_viajante` varchar(200) NOT NULL,
  `cpf_viajante` int(16) NOT NULL,
  `cel_viajante` int(11) DEFAULT NULL,
  `email_viajante` varchar(30) NOT NULL,
  `cidade_viajante` varchar(50) NOT NULL,
  `data_nasc_viajante` varchar(10) NOT NULL,
  `usuario_viajante` varchar(30) NOT NULL,
  `senha_viajante` varchar(30) NOT NULL,
  `habilidades_viajante` varchar(200) NOT NULL,
  `mensagem_viajante` varchar(200) NOT NULL,
  `datacad_viajante` datetime DEFAULT current_timestamp(),
  `dataalt_viajante` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `prive_viajante` int(1) NOT NULL,
  `status_viajante` int(1) NOT NULL
);