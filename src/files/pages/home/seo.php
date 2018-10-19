<?php 
$tituloPagina = 'Título da Página';
$descricaoPagina = 'Descrição da Página';

$pageTitleSeo = htmlentities(strip_tags($tituloPagina), 0, 'UTF-8');
$descriptionPageSeo = htmlentities(strip_tags($descricaoPagina), 0, 'UTF-8');
?>

<title><?php echo $tituloPagina ?></title>

<meta name="Description" content="<?php echo $descriptionPageSeo ?>" />
<meta name="Keywords" content="Palavras-chave" />
<meta name="title" content="<?php echo $pageTitleSeo ?>" />

<meta name="robots" content="index,follow" />
<meta name="googlebot" content="index,follow" />
<meta name="msnbot" content="index,follow,all" />
<meta name="inktomislurp" content="index,follow,all" />
<meta name="unknownrobot" content="index,follow,all" />

<meta name="author" content="http://www.sejamaior.com.br/" />

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= $pageTitleSeo ?>">
<meta name="twitter:description" content="<?= $descriptionPageSeo ?>">
<meta name="twitter:image" content="Imagem de destaque">

<!-- Facebook -->
<meta property="og:locale" content="pt_BR" />
<meta property="og:type" content="article" />
<meta property="og:url" content="<?= ROOT_URL ?>" />
<meta property="og:title" content="<?= $pageTitleSeo ?>" />
<meta property="og:description" content="<?= $descriptionPageSeo ?>" />
<meta property="og:site_name" content="<?= $pageTitleSeo ?>" />
<meta property="og:image" content="Imagem de Destaque" />
<meta property="og:image:width" content="800">
<meta property="og:image:height" content="600">
<meta property="fb:app_id" content="" />