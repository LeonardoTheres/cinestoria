<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineStoria</title>
    <link rel="stylesheet" href="tcc.css">
</head>
<body>
<h3> Selecione um Gênero:</h3>
<?php
$filmes = $_GET["Gêneros"];

switch ($filmes)
{

    case 1:
        echo 'As pessoas que preferem o gênero de ação gostam mais de cenas emocinantes, filmes de ação mexem mais com elas por serem rápidos e cheio de acontecimentos, é como se você se imaginasse dentro do filme, vivendo aquela situação do protagonista, e isso te leva a uma sensação de euforia.<br><br><br><img src="asao.gif">';
    break;
        case 2:
        echo 'Comédia é a temática ideal para quem está preocupado e com um certo nível de ansiedade, pois ao rir com algo engraçado, esse sentimento é diluído, o ato de rir pode até mesmo previnir certas doenças. Também é ideal para momentos de descontração com amigos e familiares.<br><img src="comedia2.gif">';
        break;
        case 3:
        echo 'O gênero drama vai além do entretenimento, o mesmo é capaz de fazer o telespectador não se sentir sozinho e transmitir a sensação de que está tudo bem. Dá as pessoas a comprovação de que estão todos sempre tentando fazer o melhor que podem para tentar entender e passar pelo o que é a vida.<br><img src="dramaa.gif">';
        break;
        case 4:
        echo 'Os filmes românticos são conhecidos como ótimos companheiros para quem sonha em viver algo que cause borboletas em seu estomago. Pesquisadores enfatizam o fato de que muitas pessoas assistem a filmes românticos especificamente para relaxar e levantar o ânimo. <br>-<img src="romanceee.gif">';
        break;
        case 5:
        echo 'A pessoa que gosta de filmes de terror gosta das sensações de medo controlado, preso nas fronteiras do irreal e com um fim bem preciso. Assim, o indivíduo supre essa necessidade de adrenalina sem que o fim seja trágico. Psicólogos dizem que isso só é bom porque é uma emoção forte que depois acaba. A realidade, depois do terror, é sempre um final feliz.<br><img src="terror.gif">';

}


?>
<style>
    body{
    background-color:#60afa7;
    font-size:12pt;
    color:#29252;
    


    }
    img{
        width:650px;
        height:300px;      
        margin-left:25%;
        margin-top:5%;
    }</style>
</body>
</html>