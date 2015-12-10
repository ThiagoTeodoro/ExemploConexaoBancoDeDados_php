<?php
/**
 * Descrição da TratamentoMensagens
 *
 * Essa classe tem o objetivo de tratar as mensagens de erro, exibindo-as de 
 * forma elegante o fornecendo a opção de utilizar links ou não nas mensagens
 * de erro aqui tratadas.
 * 
 * A Classe prove 4 tipos de mensagens: Erro, Atenção, Sucesso e Informação.
 * Cada uma possui cores e ícones diferentes, porém, todas elas recebem como
 * parâmetro a mensagem, o link (Caso a mensagem for trabalhar com ícone de
 * redirecionamento) e o texto desse link que será exibido caso ele exita.
 * 
 * -- Requisitos da Classe --
 * 
 * - Na página em que a classe for utilizada de estar importado o 
 * bootstrap-3.3.6 ou superior, com as referencias de fontes e ícones operando
 * corretamente.
 * - Na página em que a classe for utilizada deve estar importado o jquery-2.1.4
 * ou superior
 * - PHP 5.0 ou superior.
 * 
 * @author Thiago Teodoro Rodrigues
 */
class TratamentoMensagens {
    
    /**
     * Função/método para tratamento de mensagens de erro.
     * 
     * A função recebe uma mensagem e monta uma "caixa" de erro em tom de
     * vermelho, com ícone de erro. A função exige o envio da $Msg que é a 
     * mensagem de erro, porém o $Link e o $TextoLink são opcionais, caso
     * a mensagem não possua um Link, basta enviar NULL para $Link e para
     * $TextoLink que a função ignorará a criação de um Link.
     * 
     * Exemplo de utilização :
     *
     * $Mensagem = new TratamentoMensagens();              
     * $Mensagem->MsgErro("Teste", NULL, NULL);
     * 
     * 
     * Nota:
     * 
     * - Os links devem ser feitos, em relação à página que está exibindo
     * a mensagem e não em relação ao caminho em que a classe está sendo 
     * exibida.
     * 
     * @param String $Msg
     * @param String $Link
     * @param String $TextoLink
     */
    public function MsgErro($Msg, $Link, $TextoLink) {
        
        /*
         * Caixa de erro do Bootstrap com configuração de tamanho que será
         * atribuída automaticamente para o texto e para o Icone.
         */
        echo ('<div class="alert alert-danger" role="alert" style="font-size: 22px;">');

            //Ícone de erro do Bootstrap 
            echo ('<span class="glyphicon glyphicon-remove-sign" aria-hidden="true" style="padding: 6px; top: 3px;"></span>');

            //Mensagem de erro.
            echo ($Msg);
            
            //Checando se foi enviado um Link
            if($Link != NULL) {
            
                //Se o link foi enviado colocamos o Link e o seu Texto na Mensagem           
                echo ('<br/><a href="' . $Link . '" style="margin-left: 35px; font-size: 18px;">' . $TextoLink . '</a>');
                
            }
        
        echo ('</div>');
    }
    
    
    /**
     * Função/método para tratamento de mensagens de Informação.
     * 
     * A função recebe uma mensagem e monta uma "caixa" de Informação em tom de
     * Azul, com ícone de erro. A função exige o envio da $Msg que é a 
     * mensagem de Informação, porém o $Link e o $TextoLink são opcionais, caso
     * a mensagem não possua um Link, basta enviar NULL para $Link e para
     * $TextoLink que a função ignorará a criação de um Link.
     * 
     * Exemplo de utilização :
     *
     * $Mensagem = new TratamentoMensagens();              
     * $Mensagem->MsgInformacao("Teste", NULL, NULL);
     * 
     * 
     * Nota:
     * 
     * - Os links devem ser feitos, em relação à página que está exibindo
     * a mensagem e não em relação ao caminho em que a classe está sendo 
     * exibida.
     * 
     * @param String $Msg
     * @param String $Link
     * @param String $TextoLink
     */
    public function MsgInformacao($Msg, $Link, $TextoLink) {
        
        /*
         * Caixa de erro do Bootstrap com configuração de tamanho que será
         * atribuída automaticamente para o texto e para o Icone.
         */
        echo ('<div class="alert alert-info" role="alert" style="font-size: 22px;">');

            //Ícone de erro do Bootstrap 
            echo ('<span class="glyphicon glyphicon-info-sign" aria-hidden="true" style="padding: 6px; top: 3px;"></span>');

            //Mensagem de erro.
            echo ($Msg);
            
            //Checando se foi enviado um Link
            if($Link != NULL) {
            
                //Se o link foi enviado colocamos o Link e o seu Texto na Mensagem           
                echo ('<br/><a href="' . $Link . '" style="margin-left: 35px; font-size: 18px;">' . $TextoLink . '</a>');
                
            }
        
        echo ('</div>');
    }
    
    
    /**
     * Função/método para tratamento de mensagens de Alerta.
     * 
     * A função recebe uma mensagem e monta uma "caixa" de Alerta em tom de
     * Amarelo, com ícone de erro. A função exige o envio da $Msg que é a 
     * mensagem de Alerta, porém o $Link e o $TextoLink são opcionais, caso
     * a mensagem não possua um Link, basta enviar NULL para $Link e para
     * $TextoLink que a função ignorará a criação de um Link.
     * 
     * Exemplo de utilização :
     *
     * $Mensagem = new TratamentoMensagens();              
     * $Mensagem->MsgAlerta("Teste", NULL, NULL);
     * 
     * 
     * Nota:
     * 
     * - Os links devem ser feitos, em relação à página que está exibindo
     * a mensagem e não em relação ao caminho em que a classe está sendo 
     * exibida.
     * 
     * @param String $Msg
     * @param String $Link
     * @param String $TextoLink
     */
    public function MsgAlerta($Msg, $Link, $TextoLink) {
        
        /*
         * Caixa de erro do Bootstrap com configuração de tamanho que será
         * atribuída automaticamente para o texto e para o Icone.
         */
        echo ('<div class="alert alert-warning" role="alert" style="font-size: 22px;">');

            //Ícone de erro do Bootstrap 
            echo ('<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true" style="padding: 6px; top: 3px;"></span>');

            //Mensagem de erro.
            echo ($Msg);
            
            //Checando se foi enviado um Link
            if($Link != NULL) {
            
                //Se o link foi enviado colocamos o Link e o seu Texto na Mensagem           
                echo ('<br/><a href="' . $Link . '" style="margin-left: 35px; font-size: 18px;">' . $TextoLink . '</a>');
                
            }
        
        echo ('</div>');
    }
    
    
    /**
     * Função/método para tratamento de mensagens de Sucesso.
     * 
     * A função recebe uma mensagem e monta uma "caixa" de Sucesso em tom de
     * Verde, com ícone de erro. A função exige o envio da $Msg que é a 
     * mensagem de Sucesso, porém o $Link e o $TextoLink são opcionais, caso
     * a mensagem não possua um Link, basta enviar NULL para $Link e para
     * $TextoLink que a função ignorará a criação de um Link.
     * 
     * Exemplo de utilização :
     *
     * $Mensagem = new TratamentoMensagens();              
     * $Mensagem->MsgSucesso("Teste", NULL, NULL);
     * 
     * 
     * Nota:
     * 
     * - Os links devem ser feitos, em relação à página que está exibindo
     * a mensagem e não em relação ao caminho em que a classe está sendo 
     * exibida.
     * 
     * @param String $Msg
     * @param String $Link
     * @param String $TextoLink
     */
    public function MsgSucesso($Msg, $Link, $TextoLink) {
        
        /*
         * Caixa de erro do Bootstrap com configuração de tamanho que será
         * atribuída automaticamente para o texto e para o Icone.
         */
        echo ('<div class="alert alert-success" role="alert" style="font-size: 22px;">');

            //Ícone de erro do Bootstrap 
            echo ('<span class="glyphicon glyphicon-ok-sign" aria-hidden="true" style="padding: 6px; top: 3px;"></span>');

            //Mensagem de erro.
            echo ($Msg);
            
            //Checando se foi enviado um Link
            if($Link != NULL) {
            
                //Se o link foi enviado colocamos o Link e o seu Texto na Mensagem           
                echo ('<br/><a href="' . $Link . '" style="margin-left: 35px; font-size: 18px;">' . $TextoLink . '</a>');
                
            }
        
        echo ('</div>');
    }
    
    
    
    
    
}
