<?php
namespace AgenciaMaior\Gerencieme;

class Noticias extends Gerencieme
{
    const ENDPOINT = 'apinoticias.svc';

    public static function listarNoticias($pagina = 0, $limite = 0)
    {
        $method = 'ListarNoticias';

        return self::callApi(self::ENDPOINT, $method, [$pagina, $limite]);
    }

    public static function detalheNoticia($id)
    {
        $method = 'DetalheNoticia';

        return self::callApi(self::ENDPOINT, $method, [$id]);
    }
}