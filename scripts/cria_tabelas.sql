-- amzpm.client definition

CREATE TABLE `client` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Identificador único dos clientes',
  `client_name` varchar(100) DEFAULT NULL COMMENT 'Nome do cliente',
  `client_address` varchar(100) DEFAULT NULL COMMENT 'Endereço do cliente',
  `client_neighborhood` varchar(50) DEFAULT NULL COMMENT 'Bairro do cliente',
  `client_city` varchar(100) DEFAULT NULL COMMENT 'Cidade do cliente',
  `client_state` varchar(20) DEFAULT NULL COMMENT 'Estado do cliente',
  `client_zipcode` varchar(9) DEFAULT NULL COMMENT 'Cep do cliente',
  `client_phone` varchar(20) DEFAULT NULL COMMENT 'Telefone do cliente',
  `client_email` varchar(100) DEFAULT NULL COMMENT 'Email do cliente',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COMMENT='Tabela de clientes';

-- amzpm.users definition

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Identificador único dos usuários',
  `user_name` varchar(100) DEFAULT NULL COMMENT 'Nome do usuário',
  `user_password` varchar(100) DEFAULT NULL COMMENT 'Senha do usuário',
  `user_token` varchar(150) DEFAULT NULL COMMENT 'Token de autenticação do usuário',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COMMENT='Tabela de usuário';