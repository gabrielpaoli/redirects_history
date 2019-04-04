<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>

<?php

include('seuhistoryredirect.php');


$test = array(
    ''. $oldSiteGlobal .'',
    ''. $oldSiteGlobal .'/ancine-informacoes-de-programacao',
    ''. $oldSiteGlobal .'/anuncie-conosco',
    ''. $oldSiteGlobal .'/areas/{variable}',
    ''. $oldSiteGlobal .'/areas/daneses-vs-saxoes',
    ''. $oldSiteGlobal .'/assuntos/',
    ''. $oldSiteGlobal .'/assuntos/{variable}',
    ''. $oldSiteGlobal .'/biografia/',
    ''. $oldSiteGlobal .'/biografia/{variable}',
    ''. $oldSiteGlobal .'/biografias/',
    ''. $oldSiteGlobal .'/biografias/adolf-hitler',
    ''. $oldSiteGlobal .'/content/',
    ''. $oldSiteGlobal .'/content/{variable}',
    ''. $oldSiteGlobal .'/etiquetas/',
    ''. $oldSiteGlobal .'/etiquetas/biografia',
    ''. $oldSiteGlobal .'/etiquetas/biografia',
    ''. $oldSiteGlobal .'/expandido/{variable}',
    ''. $oldSiteGlobal .'/galerias/{variable}',
    ''. $oldSiteGlobal .'/google_vignette',
    ''. $oldSiteGlobal .'/historia-das-palavras',
    ''. $oldSiteGlobal .'/hoje-na-historia',
    ''. $oldSiteGlobal .'/hoje-na-historia/{variable}',
    ''. $oldSiteGlobal .'/horarios-programas',
    ''. $oldSiteGlobal .'/horarios-programas-h2',
    ''. $oldSiteGlobal .'/horarios-programas-history2',
    ''. $oldSiteGlobal .'/imprensa',
    ''. $oldSiteGlobal .'/jogos/',
    ''. $oldSiteGlobal .'/jogos/{variable}',
    ''. $oldSiteGlobal .'/node/365',
    ''. $oldSiteGlobal .'/noticias/',
    ''. $oldSiteGlobal .'/noticias/{variable}',
    ''. $oldSiteGlobal .'/onde-assistir',
    ''. $oldSiteGlobal .'/politica-de-privacidade',
    ''. $oldSiteGlobal .'/politica-de-remocao',
    ''. $oldSiteGlobal .'/programas',
    ''. $oldSiteGlobal .'/programas/{variable}',
    ''. $oldSiteGlobal .'/programas/episodios/{variable}',
    ''. $oldSiteGlobal .'/quem-somos',
    ''. $oldSiteGlobal .'/region/',
    ''. $oldSiteGlobal .'/region/{variable}',
    ''. $oldSiteGlobal .'/termos-de-uso',
    ''. $oldSiteGlobal .'/testebarbaros',
    ''. $oldSiteGlobal .'/videos/',
    ''. $oldSiteGlobal .'/videos/{variable}',
    ''. $oldSiteGlobal .'/vivo-tv',
    ''. $oldSiteGlobal .'/microsites/',
    ''. $oldSiteGlobal .'/microsites/{variable}',
    ''. $oldSiteGlobal .'/microsites/a-rebeliao-dos-barbaros/{variable}',
    ''. $oldSiteGlobal .'/microsites/cacando-hitler/home',
    ''. $oldSiteGlobal .'/microsites/carweek/',
    ''. $oldSiteGlobal .'/microsites/carweek/{variable}/',
    ''. $oldSiteGlobal .'/microsites/desafio-sob-fogo/',
    ''. $oldSiteGlobal .'/microsites/desafio-sob-fogo/{variable}/',
    ''. $oldSiteGlobal .'/microsites/invasao-alienigena/{variable}/',
    ''. $oldSiteGlobal .'/microsites/o-juizo-final/{variable}/',
    ''. $oldSiteGlobal .'/microsites/o-ultimo-reino/{variable}/',
    ''. $oldSiteGlobal .'/microsites/raizes/{variable}/',
    ''. $oldSiteGlobal .'/microsites/sozinhos/{variable}/',
    ''. $oldSiteGlobal .'/microsites/templarios/{variable}/',
    'www.'. $oldSiteGlobal .'',
    'play.'. $oldSiteGlobal .'',
    'play.'. $oldSiteGlobal .'/#/aboutus',
    'play.'. $oldSiteGlobal .'/#/featured',
    'play.'. $oldSiteGlobal .'/#/help',
    'play.'. $oldSiteGlobal .'/#/notifications',
    'play.'. $oldSiteGlobal .'/#/shows',
    'play.'. $oldSiteGlobal .'/#/tv-schedule',
    'www.play.'. $oldSiteGlobal .'',
    ''. $oldSiteGlobal .'/microsites/baixe-ja-nosso-app-comercial',
    ''. $oldSiteGlobal .'/programas/estradas-mortais',
    ''. $oldSiteGlobal .'/microsites/quartas-de-negocios/show/quem-da-mais-',
    ''. $oldSiteGlobal .'/programas/o-melhor-detrato-feito',
    ''. $oldSiteGlobal .'/microsites/segundas-de-carros/show/louco-por-carros',
    ''. $oldSiteGlobal .'/--history',
    ''. $oldSiteGlobal .'/microsites/caraoke',
    ''. $oldSiteGlobal .'/microsites/episodios-completos',
    ''. $oldSiteGlobal .'/programacao-especial-de-natal',
    ''. $oldSiteGlobal .'/microsites/trato-feito-e-desafio-sob-fogo',
    ''. $oldSiteGlobal .'/microsites/segundas-de-carros/show/trato-feito',
    ''. $oldSiteGlobal .'/programas/desafio-sob-fogo',
    ''. $oldSiteGlobal .'/programas/cacadores-de-reliquias'
);
?>

<div class="container-fluid">

<div style="text-align: center;">


  <div class="">
    <h1>Probar url</h1>
    <p><b>Por ejemplo: </b>https://ar.<?= $oldSiteGlobal; ?>/microsites/demasiado-joven-para-matar/show/demasiado-joven-para-matar</p>
  </div>



  <form action="index_test.php" method="post">
    <input type="text" name="url" value="">
    <input type="submit" value="Submit">
  </form> 



  <div>
    <?php 
      if(isset($_POST['url'])):
        $url = $_POST['url'];
        $countryInUrl = countryInUrl($url, $countries);
        $variableInUrl = variableInUrl($url, $urlsWithVariables);
        $redirectType = redirectType($url, $urlsWithVariables, $redirectTo302, $exceptions, $countryInUrl);

        print '<div><b>Resultado</b> ' . parseUrl($url, $countryInUrl, $variableInUrl, $oldUrl, $newUrl, $exceptions) . '</div>';
      endif;
    ?>
  </div>



</div>




<div class="row">
  <h1>Todas las variables</h1>
</div>

<div class="row">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Url vieja</th>
        <th>Url nueva</th>
        <th>Tipo de redirect</th>
      </tr>
    </thead>
    <tbody>

      <?php

        foreach($test as $testInd):
          print '<tr>';
            $url = $testInd;
            print '<td>' . $testInd . '</td>';
            $countryInUrl = countryInUrl($url, $countries);
            $variableInUrl = variableInUrl($url, $urlsWithVariables);
            $redirectType = redirectType($url, $urlsWithVariables, $redirectTo302, $exceptions, $countryInUrl);

            print '<td>' . parseUrl($url, $countryInUrl, $variableInUrl, $oldUrl, $newUrl, $exceptions) . '</td>';
            print '<td>' . $redirectType . '</td>';

          print '</tr>';
        endforeach;

      ?>

    </tbody>
  </table>
</div>


</div>