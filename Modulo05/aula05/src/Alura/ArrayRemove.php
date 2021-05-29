<?php declare(strict_types=1);

namespace Alura;

class ArrayRemove
{
    public static function remover($remover_item, array &$array)
    {
        $posicao = array_search($remover_item, $array, true);
        if(is_int($posicao)){
            unset($array[$posicao]);
            return;
        };
        echo "Não encontrado no banco de dados.";
    }
}
