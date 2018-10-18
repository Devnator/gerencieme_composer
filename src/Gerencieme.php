<?php
namespace AgenciaMaior\Gerencieme;

use Dotenv\Dotenv;
use Exception;

class Gerencieme
{
    const BASE_URL = 'http://gerencieme.sejamaior.com.br/wcf';

    public static function callApi($endpoint, $method, array $params = [])
    {
        $dotenvDir = __DIR__ . '/../../../../';

        if (!file_exists($dotenvDir . '.env')) {
            throw new Exception('Arquivo .env não encontrado. Verifique se vocë criou o arquivo e ele se encontra na raiz do seu projeto');
        }

        $dotenv = new Dotenv($dotenvDir);
        $dotenv->load();

        $params = implode('/', $params);

        $key = getenv('GERENCIEME_KEY');

        if (!$key) {
            throw new Exception('Chave do Gerencieme não encontrada. Verifique se a linha GERENCIEME_KEY existe no seu arquivo .env');
        }

        $url = implode('/', array_filter([self::BASE_URL, $endpoint, $method, $key, $params]));

        $request = file_get_contents($url);
        $json = json_decode(json_decode($request, true), true);

        return $json;
    }
}