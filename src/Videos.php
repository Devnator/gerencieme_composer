<?php
namespace AgenciaMaior\Gerencieme;

class Videos extends Gerencieme
{
    const ENDPOINT = 'apimidia.svc';

    public static function listarVideos()
    {
        $method = 'ListarVideos';

        return self::callApi(self::ENDPOINT, $method);
    }

    public static function detalheVideo($id)
    {
        $method = 'Video';

        return self::callApi(self::ENDPOINT, $method, [$id]);
    }

    public static function parseVideoLink($link)
    {
        if (strpos($link, 'vimeo') != false) {
            $buffer = explode('https://vimeo.com/', $link);
            return 'https://player.vimeo.com/video/' . $buffer[1];
        } elseif (strpos($link, 'youtube') != false) {
            $buffer = explode('v=', $link);
            return 'https://www.youtube.com/embed/' . $buffer[1];
        } else {
            return $link;
        }
    }
}