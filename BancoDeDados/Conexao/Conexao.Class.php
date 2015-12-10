<?php
/**
 * Descrição para Conexao
 *
 * Classe que realiza a conexão com o Banco de Dados. [Fábrica de Conexão]
 * 
 * É necessário importar o arquivo Config.php que está dentro do diretório
 * Config/BancoDeDados ná página que for utilizar a conexão com banco de dados, 
 * pois essa classe vai ler os parâmetros lá definidos e apartir deles, 
 * realizar a conexão. As importações devem ser feitas ná página que vão 
 * utilizar, a conexão e não nas classes pois os caminhos devem ser absolutos 
 * no PHP. Essa questão de importação do PHP é bem chatinha mesmo.
 * 
 * A classe faz uso também da TratamentoMensagens.Class.php, que trata as 
 * mensagens visualmente, e exibe a mensagem bem trabalhada para o usuário.
 * Essa classe tá disponivel lá em https://github.com/ThiagoTeodoro e será
 * necessário para ela o Bootstrap-3.3.6 ou superior, Jquery-2.1.4 ou superior
 * e o PHP 5.0 ou superior
 * 
 * @author Thiago Teodoro Rodrigues
 */
class Conexao {
    
    //Atributos da Classe
    private $Host;
    private $Porta;
    private $BancoDeDados;
    private $CharsetDoBanco;   
    private $Usuario;
    private $Senha;

    
    /**
     * Método construtor da Classe.
     * 
     * O método construtor vai ler o arquivo de configuração dos parâmetros de
     * conexão com o banco de dados -> Config.ini, gerar a conexão e armazenar
     * essa conexão gerada no atributo $Link_De_Conexao para que essa conexão 
     * armazenada em $Link_De_Conexão possa ser utilizada pela aplicação 
     * da chamada do método getLink_De_Conexao.
     */
    public function __construct() {
        
        //Inicializando variáveis/atributos [Boa prática]
        //Aqui é tudo String mesmo.
        $this->Host = '';
        $this->Porta = '';
        $this->BancoDeDados = '';
        $this->CharsetDoBanco = '';
        $this->Usuario = '';
        $this->Senha = '';
        
        
        /**
         * Lendo arquivo Config.ini de configuração com o Banco de Dados e
         * setando os parâmetros de configuração.
         */
        $this->Host = HOST;
        $this->Porta = PORTA;
        $this->BancoDeDados = BANCODEDADOS;
        $this->CharsetDoBanco = CHARSETDOBANCO;
        $this->Usuario = USUARIO;
        $this->Senha = SENHA;
        
    }
    
    
    /**
     * Método que Abri/Gera a Conexão com o Banco de Dados
     * 
     * Esse método que gera a String de Conexão para o PDO e gera a conexão PDO
     * passando para o PDO a String de Conexão mais o Usuário e Senha 
     * armazenados nos atributos desta classe, que vão conter na realidade
     * aquilo que foi configurado no Config.php do Banco Da Dados.
     * 
     * @return \PDO -> Conexão com o Banco de Dados do Tipo PDO
     */
    public function AbrirConexao() {
        
        //Montando String de Conexão 
        /*
         * Cuidado com a String de Conexão ela tem que estar devidamente escrita
         * nessa ordem, não pode ter espaço entre o 'mysql:', os parâmetros têm
         * que estar desse jeitinho sem os espaços entre eles sem o espaço entre
         * os iguais, os pontos e vírgula no final, tudo direitinho. Pode usar 
         * esse exemplo para todos! Por que isso não muda, segui esse padrão.
         */
        $StringConexao = 'mysql:host=' . $this->Host . ';port=' . $this->Porta . ';dbname=' . $this->BancoDeDados . ';charset=' . $this->CharsetDoBanco . ';';
        
        //Tentando realizar a conexão
        try {
            
            //Gerando conexão
            $Link_De_Conexao = new PDO($StringConexao, $this->Usuario, $this->Senha);    
            
            //Retornando Conexão para o método solicitante.
            return $Link_De_Conexao;
            
        } catch (Exception $ex) {
            
            //Instanciando Classe para tratamento de erro.
            $Mensagem = new TratamentoMensagens();
            
            //Problema com a conexão, informando erro.
            $Mensagem->MsgErro('Não foi possivel realizar a conexão com o Banco de Dados, cheque o arquivo de configuração de conexão com o Banco de Dados, Descrição do erro : ' . $ex->getMessage(), NULL, NULL);
            
        }
        
    }

}
