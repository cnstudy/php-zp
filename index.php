<?php
if (isset($_POST['email']) && !empty($_POST['email'])){
    echo "O usuário envio o e-mail.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta id="viewport" name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Portal</title>
</head>
<body style="background-color: #5a5959">
<div class="topo">
    <div class="topoint">
        <div class="topoleft">
            <ul>
                <li><a href="./">Home</a></li>
                <li><a href="quem-somos">Quem somos</a></li>
                <li><a href="anuncie-aqui">Anuncie aqui</a></li>
                <li><a href="contato">Contato</a></li>
            </ul>
        </div>
        <div class="toporight">
            <input type="image" src="assets/images/search.png" width="26" height="26">
            <input type="text" placeholder="Busca..." class="topobusca fa fa-search" name="busca" height="24">
            <a href=""><img class="img-topo-r" src="assets/images/fb.png" alt="" border="0" width="26" height="26"></a>
            <a href=""><img class="img-topo-r" src="assets/images/twitter.png" alt="" border="0" width="26" height="26"></a>
            <a href=""><img class="img-topo-r" src="assets/images/insta.jpeg" alt="" border="0" width="26" height="26"></a>
            <a href=""><img class="img-topo-r" src="assets/images/youtube.png" alt="" border="0" width="26" height="26"></a>
            <a href=""><img class="img-topo-r" src="assets/images/linkedin.png" alt="" border="0" width="26"
                            height="26"></a>
        </div>
    </div>
</div>
<div class="topo2">
    <div class="topo2-int">
        <div class="logo">
            <img src="assets/images/logo.png" alt="" width="230" border="0">
        </div>
        <div class="banner">

        </div>
    </div>
</div>
<div class="menu">
    <div class="menu-int">
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Economia</a></li>
            <li>
                <a href="">Entretenimento</a>
                <img src="assets/images/down.png" width="10" alt="">
                <div class="submenu">
                    <a href="">
                        <div class="submenu-item">Item 1</div>
                    </a>
                    <a href="">
                        <div class="submenu-item">Item 2</div>
                    </a>
                    <a href="">
                        <div class="submenu-item">Item 3</div>
                    </a>
                    <a href="">
                        <div class="submenu-item">Item 4</div>
                    </a>
                </div>
            </li>
            <li>
                <a href="">Esportes</a>
                <img src="assets/images/down.png" width="10" alt="">
                <div class="submenu">
                    <a href="">
                        <div class="submenu-item">Item 1</div>
                    </a>
                    <a href="">
                        <div class="submenu-item">Item 2</div>
                    </a>
                    <a href="">
                        <div class="submenu-item">Item 3</div>
                    </a>
                    <a href="">
                        <div class="submenu-item">Item 4</div>
                    </a>
                </div>
            </li>
            <li><a href="">Geral</a></li>
            <li>
                <a href="">Notícias</a>
                <img src="assets/images/down.png" width="10" alt="">
                <div class="submenu">
                    <a href="">
                        <div class="submenu-item">Item 1</div>
                    </a>
                    <a href="">
                        <div class="submenu-item">Item 2</div>
                    </a>
                    <a href="">
                        <div class="submenu-item">Item 3</div>
                    </a>
                    <a href="">
                        <div class="submenu-item">Item 4</div>
                    </a>
                </div>
            </li>
            <li><a href="">Política</a></li>
            <li><a href="">Vídeos</a></li>
        </ul>
    </div>
</div>
<div class="ultimas-noticias">
    <div class="utlimas-notic-int">
        <div class="area-ult-notic">
            <div class="titulo">Últimas Notícias</div>
            <div class="noticia">Aqui o conteúdo da notícia</div>
        </div>
    </div>
</div>
<div class="container">
    <div class="container-int">
        <div class="left-side">
            <div class="slideshow">
                <div class="slideshow-area">
                    <form action="" method="post">
                        E-mail: <br>
                        <input type="email" name="email" id=""><br>
                        Senha: <br>
                        <input type="password" name="senha"><br>
                        <input type="submit" value="Enviar dados">
                    </form>
                </div>
            </div>
        </div>
        <div class="right-side">
            <div class="widget">
                <div class="widget-titulo">SOCIAL</div>
                <div class="widget-conteudo">
                    <a href=""><img class="img-topo-r" src="assets/images/fb.png" alt="" border="0" width="26"
                                    height="26"></a>
                    <a href=""><img class="img-topo-r" src="assets/images/twitter.png" alt="" border="0" width="26"
                                    height="26"></a>
                    <a href=""><img class="img-topo-r" src="assets/images/insta.jpeg" alt="" border="0" width="26"
                                    height="26"></a>
                    <a href=""><img class="img-topo-r" src="assets/images/youtube.png" alt="" border="0" width="26"
                                    height="26"></a>
                    <a href=""><img class="img-topo-r" src="assets/images/linkedin.png" alt="" border="0" width="26"
                                    height="26"></a>
                </div>
            </div>
            <div class="widget">
                <div class="widget-titulo">ÚLTIMAS NOTÍCIAS</div>
                <div class="widget-conteudo">
                    <div class="item-noticia">
                        <a href="https://www.infomoney.com.br/onde-investir/com-juro-no-piso-historico-e-maior-oferta-de-produtos-fundos-internacionais-crescem-e-aparecem-no-mercado-brasileiro/">
                            Com juro no piso histórico e maior oferta de produtos, fundos internacionais crescem e aparecem no mercado brasileiro.
                        </a>
                    </div>
                    <div class="item-noticia">
                        <a href="https://www.infomoney.com.br/mercados/ganhos-de-acoes-de-tecnologia-indicam-lenta-retomada-do-emprego-nos-eua/">
                            Em um momento em que a pandemia deixou 22 milhões de americanos desempregados, os preços das ações ainda assim se valorizaram em US$ 5 trilhões.
                        </a>
                    </div>
                    <div class="item-noticia">
                        <a href="https://www.infomoney.com.br/colunistas/felippe-hermes/6-coisas-que-voce-deveria-esperar-para-o-brasil-em-2021/">
                            Felippe Hermes: 6 coisas que você deveria esperar para o Brasil em 2021.
                        </a>
                    </div>
                    <div class="item-noticia">
                        <a href="https://www.infomoney.com.br/colunistas/panorama-politico/ministro-do-stf-lewandowski-prorroga-estado-de-calamidade-apenas-para-medidas-sanitarias/">
                            STF prorroga duração de medidas extraordinárias para enfrentamento sanitário da pandemia.
                        </a>
                    </div>
                </div>
            </div>
            <div class="widget">
                <div class="widget-titulo">PUBLICIDADE</div>
                <div class="widget-conteudo">
                    <img src="assets/images/covid.jpg" width="275" height="275" alt="">
                </div>
            </div>
            <div class="widget">
                <div class="widget-titulo">ENCONTRE-NOS NO FACEBOOK</div>
                <div class="widget-conteudo">
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FComprasOnlineMagazineCN%2F&tabs=timeline&width=275&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                            width="275" height="200" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                            allowfullscreen="true"
                            allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
