# --------------------------------------------------------
# Host:                         127.0.0.1
# Database:                     loja_teckfone
# Server version:               5.5.8
# Server OS:                    Win32
# HeidiSQL version:             5.0.0.3272
# Date/time:                    2019-09-30 10:18:02
# --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
# Dumping database structure for loja_teckfone
DROP DATABASE IF EXISTS `loja_teckfone`;
CREATE DATABASE IF NOT EXISTS `loja_teckfone` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `loja_teckfone`;


# Dumping structure for table loja_teckfone.tb_categoria_prod
DROP TABLE IF EXISTS `tb_categoria_prod`;
CREATE TABLE IF NOT EXISTS `tb_categoria_prod` (
  `cat_id` int(10) NOT NULL AUTO_INCREMENT,
  `cat_id_produto` int(10) DEFAULT '0',
  `cat_categoria` varchar(255) DEFAULT '0',
  PRIMARY KEY (`cat_id`),
  KEY `Key_categoria_produto` (`cat_id_produto`),
  CONSTRAINT `Key_categoria_produto` FOREIGN KEY (`cat_id_produto`) REFERENCES `tb_produtos` (`id_prod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

# Dumping data for table loja_teckfone.tb_categoria_prod: 0 rows
/*!40000 ALTER TABLE `tb_categoria_prod` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_categoria_prod` ENABLE KEYS */;


# Dumping structure for table loja_teckfone.tb_fotos
DROP TABLE IF EXISTS `tb_fotos`;
CREATE TABLE IF NOT EXISTS `tb_fotos` (
  `id_foto` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_key_produto` int(11) DEFAULT NULL,
  `id_caminho` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id_foto`),
  KEY `FK_tb_fotos_tb_produtos` (`id_key_produto`),
  CONSTRAINT `FK_tb_fotos_tb_produtos` FOREIGN KEY (`id_key_produto`) REFERENCES `tb_produtos` (`id_prod`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

# Dumping data for table loja_teckfone.tb_fotos: 14 rows
/*!40000 ALTER TABLE `tb_fotos` DISABLE KEYS */;
INSERT INTO `tb_fotos` (`id_foto`, `id_key_produto`, `id_caminho`) VALUES (1, 3, '3fone-blutoof.jpg'), (2, 4, 'headfone-vermelho.jpg'), (3, 5, 'bluedio.jpg'), (4, 6, 'fone-ouvido.jpg'), (5, 7, 'motoMaxx.jpg'), (6, 8, 'fone_bluetooth_41.jpg'), (7, 3, '2fone-blutoof.jpg'), (8, 7, '13247542853662.jpg'), (9, 7, '830406_1.jpg'), (10, 7, '905107_MotoG7Play_Indigo11_z.jpg'), (11, 8, '3fone_bluetooth_41.jpg'), (12, 6, 'fone_de_ouvido_bluetooth_sodo_mh1_rosa_2033_1_20190320122536.jpg'), (13, 4, '3headfone-vermelho.jpg'), (14, 5, '5bluedio.jpg');
/*!40000 ALTER TABLE `tb_fotos` ENABLE KEYS */;


# Dumping structure for table loja_teckfone.tb_produtos
DROP TABLE IF EXISTS `tb_produtos`;
CREATE TABLE IF NOT EXISTS `tb_produtos` (
  `id_prod` int(11) NOT NULL AUTO_INCREMENT,
  `nome_prod_curto` varchar(150) DEFAULT NULL,
  `nome_prod_longo` varchar(500) DEFAULT NULL,
  `codigo` bigint(20) DEFAULT NULL,
  `prod_avalidaite` int(11) DEFAULT NULL,
  `preco_real` decimal(10,2) DEFAULT NULL,
  `preco_desc` decimal(10,2) DEFAULT NULL,
  `largura_centimetro` int(11) DEFAULT NULL,
  `altura_centimetro` int(11) DEFAULT NULL,
  `quantidade_estoque` int(11) DEFAULT NULL,
  `prod_vendido` char(255) DEFAULT NULL,
  `parcelamento` char(20) DEFAULT NULL,
  `classificacao` decimal(10,2) DEFAULT NULL,
  `comprimento_centimetro` int(11) DEFAULT NULL,
  `prod_foto_principal` char(255) DEFAULT NULL,
  PRIMARY KEY (`id_prod`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

# Dumping data for table loja_teckfone.tb_produtos: 6 rows
/*!40000 ALTER TABLE `tb_produtos` DISABLE KEYS */;
INSERT INTO `tb_produtos` (`id_prod`, `nome_prod_curto`, `nome_prod_longo`, `codigo`, `prod_avalidaite`, `preco_real`, `preco_desc`, `largura_centimetro`, `altura_centimetro`, `quantidade_estoque`, `prod_vendido`, `parcelamento`, `classificacao`, `comprimento_centimetro`, `prod_foto_principal`) VALUES (3, 'Fones De Ouvido Par Sem Fio Bluetooth 5.0 I7s Tws', 'Fones De Ouvido Par Sem Fio Bluetooth 5.0 I7s Tws', 124678139, 3, 25.90, 19.15, 7, 13, 50, '2', '2', 1.00, NULL, 'fone-blutoof.jpg'), (4, 'Headset Gamer Microfone Omnidirecional Super Bass Hd Kp-397', 'Headset Gamer Microfone Omnidirecional Super Bass Hd Kp-397 Ps4 Pc Celular Notebook Tablet', 124407806, 1, 150.80, 79.90, 168, 92, 10, '2', '6', 1.00, NULL, 'headfone-vermelho.jpg'), (5, 'Bluetooth 5.0 Sports fones de ouvido sem fio', 'T-elfo TWS Bluetooth 5.0 Sports fones de ouvido sem fio com carregamento Box', 120866280, 5, 160.10, 122.40, 26, 60, 100, '1', '6', 1.00, NULL, 'bluedio.jpg'), (6, 'Fone Ouvido Sem Fio B01 Bluetooth Fm Sd Card Fx-b01 Hi-wi Mega Bass', 'Fone Ouvido Sem Fio B01 Bluetooth Fm Sd Card Fx-b01 Hi-wi Mega Bass', 123893531, 5, 50.99, 46.90, 29, 21, 10, '1', '3', 1.00, NULL, 'fone-ouvido.jpg'), (7, 'Smartphone Motorola Moto Maxx', 'Smartphone Motorola Moto Maxx Desbloqueado Android 4.4 Tela 5.2" Memória 64GB Wi-Fi Câmera 21MP Preto', 121034371, 3, 2000.00, 1800.50, 7, 13, 100, '3', '12', 1.00, NULL, 'motoMaxx.jpg'), (8, 'Fone Ouvido Bluetooth 4.1 Sem Fio', 'Fone Ouvido Bluetooth 4.1 Sem Fio Esportivo Corrida Chamadas', 1234865706, 38, 48.99, 33.99, 35, 22, 1, '10', '2', 29.00, NULL, 'fone_bluetooth_41.jpg');
/*!40000 ALTER TABLE `tb_produtos` ENABLE KEYS */;


# Dumping structure for table loja_teckfone.tb_usuarios
DROP TABLE IF EXISTS `tb_usuarios`;
CREATE TABLE IF NOT EXISTS `tb_usuarios` (
  `id_usuario` int(10) NOT NULL AUTO_INCREMENT,
  `user_nome` varchar(255) DEFAULT NULL,
  `user_login` varchar(25) DEFAULT NULL,
  `user_senha` varchar(32) DEFAULT NULL,
  `user_data_cadastro` date DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

# Dumping data for table loja_teckfone.tb_usuarios: 2 rows
/*!40000 ALTER TABLE `tb_usuarios` DISABLE KEYS */;
INSERT INTO `tb_usuarios` (`id_usuario`, `user_nome`, `user_login`, `user_senha`, `user_data_cadastro`) VALUES (1, 'Denis Souto de Gouvea', 'denis', '123', '2019-09-30');
/*!40000 ALTER TABLE `tb_usuarios` ENABLE KEYS */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
