----Banco SCHEMA
CREATE SCHEMA `Teste` DEFAULT CHARACTER SET latin1 COLLATE latin1_bin ;
-- TABELA USUARIOS
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,  
  `email` varchar(100) NOT NULL,
  `telefone` varchar(20) NOT NULL,  
  PRIMARY KEY (`id`) 
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;