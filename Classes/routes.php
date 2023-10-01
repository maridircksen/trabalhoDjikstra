<?php
/**
 * Classe responsável pela geração das rotas.
 * Autores: Julia Salvador e Mariana Dircksen
 * Data: 19/09/2023
 */
class routes {

    /**
     * Retorna um array com as strings de rotas.
     * @param $aVertices - Array resultante do processamento.
     * @return $aCaminhos - Array de caminhos. 
     */
    public function getRotas($aVertices) {
        $aCaminhos = [];
        foreach($aVertices as $oVertice) {
            $aCaminhos[] = $this->getCaminhoCompleto($oVertice, $aVertices) . ' <strong>| Custo: ' . $oVertice->getCusto() . '</strong>';
        }
        return $aCaminhos;
    }

    /**
     * Método apenas para caso seja necessária alguma tratativa.
     * @param \Vertice $oVertice
     * @param Array $aVertices
     */
    private function getCaminhoCompleto($oVertice, $aVertices) {
        return $this->getPrecedenteRecursive($oVertice, $aVertices);
    }

    /**
     * Método recursivo para montagem das rotas.
     * @param \Vertice $oVertice
     * @param Array $aVertices
     * @return String $sCaminho
     */
    private function getPrecedenteRecursive($oVertice, $aVertices) {
        $sCaminho = '';
        if ($oVertice->getPrecedente() != null) {
            $sCaminho .= $this->getPrecedenteRecursive($aVertices[$oVertice->getPrecedente()], $aVertices) . ' - ' . $this->getNomeCerto($oVertice->getNome()) ; 
        }
        else {
            $sCaminho = $this->getNomeCerto($oVertice->getNome());
        }
        return $sCaminho;
    }

    /**
     * Método converter as siglas para os nomes corretos.
     * 
     * @param String $sSigla - Sigla do estado.
     */
    private function getNomeCerto($sSigla) {
        $aNomes = [
            'RS1' => 'Rio Grande do Sul 1',
            'RS2' => 'Rio Grande do Sul 2',
            'SC1' => 'Santa Catarina 1',
            'SC2' => 'Santa Catarina 2',
            'PR1' => 'Paraná 1',
            'PR2' => 'Paraná 2',
            'SP1' => 'São Paulo 1',
            'SP2' => 'São Paulo 2',
            'SP3' => 'São Paulo 3',
            'SP4' => 'São Paulo 4',
            'SP5' => 'São Paulo 5',
            'RJ1' => 'Rio de Janeiro 1',
            'RJ2' => 'Rio de Janeiro 2',
            'RJ3' => 'Rio de Janeiro 3',
            'ES1' => 'Espirito Santo 1',
            'MG1' => 'Minas Gerais 1',
            'MG2' => 'Minas Gerais 2',
            'MG3' => 'Minas Gerais 3',
            'MS1' => 'Mato Grosso do Sul 1',
            'MT1' => 'Mato Grosso 1',
            'DF1' => 'Distrito Federal 1',
            'GO1' => 'Goiás 1',
            'GO2' => 'Goiás 2',
            'BA1' => 'Bahia 1',
            'BA2' => 'Bahia 2',
            'SE1' => 'Sergipe 1',
            'AL1' => 'Alagoas 1',
            'PB1' => 'Paraiba 1',
            'RN1' => 'Rio Grande do Norte 1',
            'PE1' => 'Pernambuco 1',
            'PE2' => 'Pernambuco 2',
            'CE1' => 'Ceará 1',
            'CE2' => 'Ceará 2',
            'MA1' => 'Maranhão 1',
            'PI1' => 'Piauí 1',
            'TO1' => 'Tocantins 1',
            'AM1' => 'Amazonas 1',
            'PA1' => 'Pará 1',
            'RO1' => 'Rondônia 1',
            'RR1' => 'Roraima 1',
            'AC1' => 'Acre 1',
            'AP1' => 'Amapa 1'
        ];
        return $aNomes[$sSigla];
    }

    // private $NomeCerto = [];
    
    // public function __construct() {
    //         $this->setNomeCerto(
    //             $aNome = [
    //                 'RS1' => 'Rio Grande do Sul 1',
    //                 'RS2' => 'Rio Grande do Sul 2',
    //                 'SC1' => 'Santa Catarina 1',
    //                 'SC2' => 'Santa Catarina 2',
    //                 'PR1' => 'Paraná 1',
    //                 'PR2' => 'Paraná 2',
    //                 'SP1' => 'São Paulo 1',
    //                 'SP2' => 'São Paulo 2',
    //                 'SP3' => 'São Paulo 3',
    //                 'SP4' => 'São Paulo 4',
    //                 'SP5' => 'São Paulo 5',
    //                 'RJ1' => 'Rio de Janeiro 1',
    //                 'RJ2' => 'Rio de Janeiro 2',
    //                 'RJ3' => 'Rio de Janeiro 3',
    //                 'ES1' => 'Espirito Santo 1',
    //                 'MG1' => 'Minas Gerais 1',
    //                 'MG2' => 'Minas Gerais 2',
    //                 'MG3' => 'Minas Gerais 3',
    //                 'MS1' => 'Mato Grosso do Sul 1',
    //                 'MT1' => 'Mato Grosso 1',
    //                 'DF1' => 'Distrito Federal 1',
    //                 'GO1' => 'Goiás 1',
    //                 'GO2' => 'Goiás 2',
    //                 'BA1' => 'Bahia 1',
    //                 'BA2' => 'Bahia 2',
    //                 'SE1' => 'Sergipe 1',
    //                 'AL1' => 'Alagoas 1',
    //                 'PB1' => 'Paraiba 1',
    //                 'RN1' => 'Rio Grande do Norte 1',
    //                 'PE1' => 'Pernambuco 1',
    //                 'PE2' => 'Pernambuco 2',
    //                 'CE1' => 'Ceará 1',
    //                 'CE2' => 'Ceará 2',
    //                 'MA1' => 'Maranhão 1',
    //                 'PI1' => 'Piauí 1',
    //                 'TO1' => 'Tocantins 1',
    //                 'AM1' => 'Amazonas 1',
    //                 'PA1' => 'Pará 1',
    //                 'RO1' => 'Rondônia 1',
    //                 'RR1' => 'Roraima 1',
    //                 'AC1' => 'Acre 1',
    //                 'AP1' => 'Amapa 1'
    //             ] 
    //         );
    //         return $aNomes[$sSigla];
        
    
    //     }
    
    //         /**
    //      * Função que retorna o array que representa o Aeroporto escolhido do grafo..
    //      * @param Array $aArray - Array a ser setado como grafo.
    //      */
    //     public function setNomeCerto($aArray) {
    //         $this->NomeCerto = $aArray;
    //     }
    
    //     /**
    //      * Retorna as siglas de Aeroportos
    //      * @return Array
    //      */
    //     public function getNomeCerto() {
    //         return $this->NomeCerto;
    //     }
    
    

}