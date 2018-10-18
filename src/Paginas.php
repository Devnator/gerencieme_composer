<?php
namespace AgenciaMaior\Gerencieme;

class Paginas extends Gerencieme
{
    const ENDPOINT = 'apipaginas.svc';

    public static function buscarPagina($id)
    {
        $method = 'Pagina';

        return self::callApi(self::ENDPOINT, $method, [$id]);
    }

    public static function buscarSubnivel($id)
    {
        $method = 'SubNivel';

        return self::callApi(self::ENDPOINT, $method, [$id]);
    }
}