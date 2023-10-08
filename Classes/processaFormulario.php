<?php
class processaFormulario {
    private $Aeroporto = [];

    public function __construct() {
        $this->setAeroportos(
            [   
                'RS0',  
                'RS1',  
                'RS2', 
                'SC1', 
                'SC2', 
                'PR1', 
                'PR2', 
                'SP1', 
                'SP2', 
                'SP3', 
                'SP4', 
                'SP5', 
                'RJ1', 
                'RJ2', 
                'RJ3', 
                'ES1', 
                'MG1', 
                'MG2', 
                'MG3', 
                'MS1', 
                'MT1', 
                'DF1', 
                'GO1', 
                'GO2', 
                'BA1', 
                'BA2', 
                'SE1', 
                'AL1', 
                'PB1', 
                'RN1', 
                'PE1', 
                'PE2', 
                'CE1', 
                'CE2', 
                'MA1', 
                'PI1', 
                'TO1', 
                'AM1', 
                'PA1', 
                'RO1', 
                'RR1', 
                'AC1',  
                'AP1'  
            ] 
        );
    

    }

    /**
     * Função que retorna o array que representa o Aeroporto escolhido do grafo.
     * @param Array $aArray - Array a ser setado como grafo.
     */
    public function setAeroportos($aArray) {
        $this->Aeroporto = $aArray;
    }

    /**
     * Retorna as siglas de Aeroportos
     * @return Array
     */
    public function getAeroportos() {
        return $this->Aeroporto;
    }
}


