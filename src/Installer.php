<?php
namespace AgenciaMaior\Gerencieme;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class Installer implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        echo "Instalando arquivos do Gerencieme...";

        $projectRoot = __DIR__ . '/../../../../';
        $filesPath = __DIR__ . '/files/';

        $configPath = $projectRoot . '/config';

        if (!is_dir($configPath)) {
            mkdir($configPath);
        }

        $loaderFile = $configPath . '/loader.php';

        if (!file_exists($loaderFile)) {
            copy($filesPath . '/config/loader.php', $loaderFile);
        }

        $cssPath = $projectRoot . '/css';

        if (!is_dir($cssPath)) {
            mkdir($cssPath);
        }

        $fontsPath = $projectRoot . '/fonts';

        if (!is_dir($fontsPath)) {
            mkdir($fontsPath);
        }

        $imagesPath = $projectRoot . '/images';

        if (!is_dir($imagesPath)) {
            mkdir($imagesPath);
        }

        $jsPath = $projectRoot . '/js';

        if (!is_dir($jsPath)) {
            mkdir($jsPath);
        }

        $templatesPath = $projectRoot . '/templates';

        if (!is_dir($templatesPath)) {
            mkdir($templatesPath);
        }

        $defaultTemplateFile = $templatesPath . '/default.php';

        if (!file_exists($defaultTemplateFile)) {
            copy($filesPath . '/templates/default.php', $defaultTemplateFile);
        }

        $gitIgnoreFile = $projectRoot . '.gitignore';

        if (!file_exists($gitIgnoreFile)) {
            copy($filesPath . '.gitignore', $gitIgnoreFile);
        }

        $htaccessFile = $projectRoot . '.htaccess';

        if (!file_exists($htaccessFile)) {
            copy($filesPath . '.htaccess', $htaccessFile);
        }

        $generatorFile = $projectRoot . 'agm.php';

        copy($filesPath . 'agm.php', $generatorFile);

        $envFile = $projectRoot . '.env';

        if (!file_exists($envFile)) {
            echo "\nEntre com a chave do Gerencieme: ";
            $input = rtrim(fgets(STDIN));

            $file = fopen($envFile, 'w');
            fwrite($file, 'GERENCIEME_KEY=' . $input);
            fclose($file);
        }

        echo "\nArquivos instalados com sucesso";
    }
}