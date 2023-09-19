<?php
/**
 * Classe de visualização de rotas.
 * Autores: Julia Salvador e Mariana Dircksen
 * Data: 19/09/2023
 */
class viewRotas {

    /**
     * Exibe na tela as rotas passadas por parâmetro.
     * @param Array $aRotas - Array com as rotas a serem exibidas.
     */
    public function exibeRotas($aRotas) {
        foreach($aRotas as $sRota) {
            echo $sRota . '<br/>';
        }
    }

}
