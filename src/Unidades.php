<?php
namespace AgenciaMaior\Gerencieme;

class Unidades extends Gerencieme
{
    const ENDPOINT = 'apiunidades.svc';

    public static function listarUnidades()
    {
        $method = 'ListarUnidades';

        return self::callApi(self::ENDPOINT, $method);
    }
}