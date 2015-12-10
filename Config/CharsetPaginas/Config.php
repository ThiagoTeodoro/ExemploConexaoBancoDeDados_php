<?php

/* 
 * Página de configuração dos charset's das páginas da aplicação.
 *
 * Basta adicionar o arquivo no início da página da aplicação, que o charset
 * da página será configurado para o charset que aqui está definido.
 */

//Atribuindo Charset para a constante de configuração.
const CHARSETEXIBICAOPAGINA = 'UTF-8';

//Configurando o Charset para a página.
header('Content-Type: text/html; charset=' . CHARSETEXIBICAOPAGINA);