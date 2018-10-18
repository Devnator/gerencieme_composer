<?php
namespace AgenciaMaior\Gerencieme;

class Banners extends Gerencieme
{
    const ENDPOINT = 'apibanners.svc';

    public static function buscarBanner($posicao, $quantidade)
    {
        $method = 'ListarBannersPosicao';

        return self::callApi(self::ENDPOINT, $method, [$posicao, $quantidade]);
    }
}