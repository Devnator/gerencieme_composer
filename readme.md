# Gerencieme

Biblioteca de acesso à API do Gerencieme.

## Instalação

```
composer require agenciamaior/gerencieme
```

Se não existir, crie o arquivo `.env` na raiz do seu projeto e adicione a linha:

```
GERENCIEME_KEY=chave_do_gerencieme
```

## Exemplo

```php
require_once __DIR__ . '/vendor/autoload.php';

use AgenciaMaior\Gerencieme\Noticias;

$noticia = Noticias::listarNoticias();

echo $noticia['titulo'];
```

## Bibliotecas externas utilizadas

* [PHPDotenv](https://packagist.org/packages/vlucas/phpdotenv)

## Funções

### Banners

```php
use AgenciaMaior\Gerencieme\Banners;

Banners::buscarBanner($posicao, $quantidade);
```

| Parâmetro  | Descrição                                              |
| ---------- | ------------------------------------------------------ |
| posicao    | Posição do banner na página. Ex.: _topo_, _lado_, etc. |
| quantidade | Quantidade de registros por banner                     |

### Galerias

```php
use AgenciaMaior\Gerencieme\Galerias;

Galerias::listarImagens($id);
```

| Parâmetro  | Descrição                                              |
| ---------- | ------------------------------------------------------ |
| id         | ID da galeria                                          |

### Notícias

```php
use AgenciaMaior\Gerencieme\Noticias;

Noticias::listarNoticias($pagina, $limite);
```

| Parâmetro  | Descrição                                              |
| ---------- | ------------------------------------------------------ |
| pagina     | _Opcional_. Número da página atual. Padrão _0_         |
| limite     | _Opcional_. Limite de registros por página. Padrão _0_ |

```php
use AgenciaMaior\Gerencieme\Noticias;

Noticias::detalheNoticia($id);
```

| Parâmetro  | Descrição                                              |
| ---------- | ------------------------------------------------------ |
| id         | ID da notícia                                          |

### Páginas

```php
use AgenciaMaior\Gerencieme\Paginas;

Paginas::buscarPagina($id);
```

| Parâmetro  | Descrição                                              |
| ---------- | ------------------------------------------------------ |
| id         | ID da página                                           |

```php
use AgenciaMaior\Gerencieme\Paginas;

Paginas::buscarSubnivel($id);
```

| Parâmetro  | Descrição                                              |
| ---------- | ------------------------------------------------------ |
| id         | ID da página                                           |

### Unidades

```php
use AgenciaMaior\Gerencieme\Unidades;

Unidades::listarUnidades();
```

### Vídeos

```php
use AgenciaMaior\Gerencieme\Videos;

Videos::listarVideos();
```

```php
use AgenciaMaior\Gerencieme\Videos;

Videos::detalheVideo($id);
```

| Parâmetro  | Descrição                                              |
| ---------- | ------------------------------------------------------ |
| id         | ID do vídeo                                            |

```php
use AgenciaMaior\Gerencieme\Videos;

Videos::parseVideoLink($link);
```

Converte um link direto de um site de vídeo para poder ser usado em tags embed. Formatos suportados até o momento: Youtube e Vimeo.

| Parâmetro  | Descrição                                              |
| ---------- | ------------------------------------------------------ |
| link       | Link do vídeo                                          |