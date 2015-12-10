<?php
/* 
 * Arquivo de configuração dos parâmetros de conexão com o banco de dados.
 * Esse arquivo informa para a Classe de Conexão os parâmetros que devem ser 
 * usados para realizar a conexão com o banco de dados.
 * 
 * O Arquivo precisa dos seguintes parâmetros de configuração para fornecer à
 * classe de conexão condição de funcionamento:
 * 
 * Host -> Local em que está o Banco de Dados.
 * Porta -> Porta de comunicação para acessar o Banco de Dados no Host.
 * BancoDeDados -> Banco que será utilizado/trabalhado na conexão.
 * CharsetDoBanco -> Charset do Banco de Dados.
 * Usuario -> Usuário de acesso ao Banco de Dados.
 * Senha -> Senha de acesso ao Banco de Dados conforme Usuario.
 * 
 * 
 * Parâmetros de Configuração 
 * [Por padrão Constantes, são colocadas inteiras em maiúsculo]
 */
const HOST = 'Localhost';
const PORTA = '3306';
const BANCODEDADOS = 'Banco A Conectar!';
const CHARSETDOBANCO = 'utf8'; //UTF-8 é assim no PDO = utf8 [Procure trabalhar sempre com bancos em UTF-8 quase não dá problema em relação à acentuação]
const USUARIO = 'root';
const SENHA = '123456';