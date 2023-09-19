<?php
/**
 * Classe para inserir as informaçõs dos nós do grafo e seus relacionamentos.
 * Autores: Julia Salvador e Mariana Dircksen
 * Data: 19/09/2023
 */
class grafo {
    
    /**
     * Atributo para armazenar as informações.
     */
    private $grafo = [];

    /**
     * {@inheritDoc}
     */
    public function __construct() {
        $this->setGrafo(
            [
                'RS1' => ['RS2' => 50, 'SC1' => 122, 'SC2' => 152, 'SP4' => 357, 'AC1' => 900],
                'RS2' => ['RS1' => 50],
                'SC1' => ['RS1' => 100],
                'SC2' => ['RS1' => 110],
                'PR1' => ['MS1' => 100, 'SP1' => 120, 'SP4' => 110],
                'PR2' => ['SP1' => 120],
                'SP1' => ['GO1' => 200, 'SP3' => 60, 'SP2' => 40, 'PR2' => 130, 'PR1' => 105, 'MS1' => 100 ],
                'SP2' => ['SP1' => 40,'SP4' => '70'], 
                'SP3' => ['SP1' => 60, 'SP5' => 85],
                'SP4' => ['SP5' => 15, 'SP4'=> 30, 'SP3' => 45, 'PR1' => 110, 'RS1' => 200],
                'SP5' => ['SP4' => 18,'SP3' => 24, 'MG2' => 113],
                'RJ1' => ['MG2' => 105],
                'RJ2' => ['MG2' => 109],
                'RJ3' => ['MG2' => 121, 'ES1' => 123],
                'ES1' => ['RJ3' => 123, 'MG2' => 129, 'MG3' => 142],
                'MG1' => ['DF1' => 173],
                'MG2' => ['DF1' => 192,'ES1' => 113, 'RJ1' => 120, 'RJ2' => 127, 'RJ3' => 133, 'SP5' => 149],
                'MG3' => ['DF1' => 163, 'ES1' => 80],
                'MS1' => ['MT1'=> 111,'SP1' => 122,'PR1' => 133],
                'MT1' => ['PA1' => 195,'DF1' => 222, 'GO1' => 132, 'MS1' => 123, 'RO1' => 170],
                'DF1' => ['TO1' => 222, 'BA1' => 255, 'BA2' => 275, 'MG3' => 275, 'MG2' => 201, 'MG1' => 198, 'GO1' => 72, 'MT1' => 91],
                'GO1' => ['DF1' => 101, 'SP1' => 112, 'MT1' => 253],
                'GO2' => ['RO1'=> 278],
                'BA1' => ['PI1' => 77, 'DF1' => 166], 
                'BA2' => ['SE1' => 77, 'PI1' => 156 , 'DF1' => 202],
                'SE1' => ['PE1' => 400, 'PI1' => 300, 'BA2' => 187],
                'AL1' => ['PE1' => 200 ],
                'PB1' => ['PE1' => 88],
                'RN1' => ['PE1' => 99],
                'PE1' => ['CE2' => 52, 'RN1' => 73, 'PB1' => 81, 'PE2' => 20, 'AL1' => 67 , 'SE1' => 53],
                'PE2' => ['PE1' => 20],
                'CE1' => ['MA1' => 231, 'PI1' => 211],
                'CE2' => ['MA1' => 253, 'PE1' => 83],
                'MA1' => ['CE1' => 257, 'CE2' => 287, 'PI1' => 123, 'PA1' => 239, 'AP1' => 311],
                'PI1' => ['CE1' => 69, 'SE1' => 244, 'BA2' => 153 , 'BA1' => 135, 'TO1' => 265, 'MA1' => 102],
                'TO1' => ['PI1' => 224, 'DF1' => 289 , 'PA1' => 303 ],
                'AM1' => ['RR1' => 353, 'PA1' => 409 , 'AC1' => 450],
                'PA1' => ['AP1' => 321, 'MA1' => 500, 'TO1' => 146, 'MT1' => 523, 'RO1' => 600, 'AC1' => 700, 'AM1' => 453, 'RR1' => 412],
                'RO1' => ['PA1' => 500, 'GO2' => 323, 'MT1' => 173],
                'RR1' => ['PA1' => 422, 'AM1' => 220 ],
                'AC1' => ['RS1' => 900, 'PA1' => 600, 'AM1' => 353],
                'AP1' => ['PA1' => 254, 'MA1' => 329]      
            ]
            
        );
    }

    /**
     * Função que retorna o array que representa o graf.
     * @param Array $aArray - Array a ser setado como grafo.
     */
    public function setGrafo($aArray) {
        $this->grafo = $aArray;
    }

    /**
     * Retorna o grafo.
     * @return Array
     */
    public function getGrafo() {
        return $this->grafo;
    }

}