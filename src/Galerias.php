<?php
namespace AgenciaMaior\Gerencieme;

class Galerias extends Gerencieme
{
    const ENDPOINT = 'apimidia.svc';

    public static function listarImagens($id)
    {
        $method = 'Galeria';

        return self::callApi(self::ENDPOINT, $method, [$id]);
    }
}