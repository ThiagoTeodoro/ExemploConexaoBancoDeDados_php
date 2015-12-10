<!--
    Importando Bootstrap e Jquery para funcionamento da 
    TratamentoMensagens.Class.php
-->

<!--
    Importando Bootstrap [CSS]
-->
<link rel="stylesheet" type="text/css" href="bootstrap-3.3.6/css/bootstrap.min.css" />

<!--
    Importando JQUERY necessário para o Bootstrap funcionar e necessário
    também para o funcionamento do AJAX. Sem o JQUERY nada disso funciona xD
-->
<script src="jquery-2.1.4/jquery-2.1.4.min.js"></script>

<!--
    Importando Bootstrap JavaScript
-->
<script src="bootstrap-3.3.6/js/bootstrap.min.js"></script>

<?php
/**
 * Exemplo de conexão com o banco de dados.
 */

//Configurando Charset da página
require_once './Config/CharsetPaginas/Config.php';

//Importando parâmetros de conexão com o banco de dados
require_once './Config/BancoDeDados/Config.php';

//Importando Classe de conexão com o banco de dados
require_once './BancoDeDados/Conexao/Conexao.Class.php';

//Importando Classe de tratamento de mensagens
require_once './TratamentoMensagens/TratamentoMensagens.Class.php';

//Realizando Conexão Exemplo
$ConexaoBancoDeDados = new Conexao();
$ConexaoBancoDeDados->AbrirConexao();



