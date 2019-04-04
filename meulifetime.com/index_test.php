<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>

<?php

include('meulifetimeredirect.php');


$test = array(
    ''. $oldSiteGlobal .'',
    ''. $oldSiteGlobal .'/#/aboutus',
    ''. $oldSiteGlobal .'/#/featured',
    ''. $oldSiteGlobal .'/#/help',
    ''. $oldSiteGlobal .'/#/notifications',
    ''. $oldSiteGlobal .'/#/shows',
    ''. $oldSiteGlobal .'/#/tv-schedule',
    ''. $oldSiteGlobal .'/ancine-informacoes-de-programacao',
    ''. $oldSiteGlobal .'/contato',
    ''. $oldSiteGlobal .'/episodioscompletos',
    ''. $oldSiteGlobal .'/etiquetas/',
    ''. $oldSiteGlobal .'/etiquetas/{variable}',
    ''. $oldSiteGlobal .'/galeria-de-fotos/',
    ''. $oldSiteGlobal .'/galeria-de-fotos/{variable}',
    ''. $oldSiteGlobal .'/google_vignette',
    ''. $oldSiteGlobal .'/horarios-movies',
    ''. $oldSiteGlobal .'/horarios-movies/',
    ''. $oldSiteGlobal .'/horarios-movies/{variable}',
    ''. $oldSiteGlobal .'/horarios-programas',
    ''. $oldSiteGlobal .'/imprensa',
    ''. $oldSiteGlobal .'/infograficos/',
    ''. $oldSiteGlobal .'/infograficos/{variable}',
    ''. $oldSiteGlobal .'/jogos/{variable}',
    ''. $oldSiteGlobal .'/lifetime-movies',
    ''. $oldSiteGlobal .'/microsites/especial-de-natal',
    ''. $oldSiteGlobal .'/microsites/especial-de-natal/{variable}',
    ''. $oldSiteGlobal .'/microsites/kennedy',
    ''. $oldSiteGlobal .'/microsites/kennedy/{variable}',
    ''. $oldSiteGlobal .'/microsites/{variable}',
    ''. $oldSiteGlobal .'/momento-lifetime',
    ''. $oldSiteGlobal .'/momento-lifetime/{variable}',
    ''. $oldSiteGlobal .'/node',
    ''. $oldSiteGlobal .'/node/151721/results',
    ''. $oldSiteGlobal .'/enquete/{variable}',
    ''. $oldSiteGlobal .'/noticias/',
    ''. $oldSiteGlobal .'/noticias/{variable}',
    ''. $oldSiteGlobal .'/onde-assistir',
    ''. $oldSiteGlobal .'/personagem',
    ''. $oldSiteGlobal .'/personagem/{variable}',
    ''. $oldSiteGlobal .'/politica-de-privacidade',
    ''. $oldSiteGlobal .'/politica-de-remocao',
    ''. $oldSiteGlobal .'/programa',
    ''. $oldSiteGlobal .'/programa/{variable}',
    ''. $oldSiteGlobal .'/programas',
    ''. $oldSiteGlobal .'/programas/{variable}',
    ''. $oldSiteGlobal .'/publicidade',
    ''. $oldSiteGlobal .'/quem-somos',
    ''. $oldSiteGlobal .'/semfiltro/',
    ''. $oldSiteGlobal .'/semfiltro/{variable}',
    ''. $oldSiteGlobal .'/super-tag',
    ''. $oldSiteGlobal .'/termos-de-uso',
    ''. $oldSiteGlobal .'/testes/',
    ''. $oldSiteGlobal .'/testes/{variable}',
    ''. $oldSiteGlobal .'/video/',
    ''. $oldSiteGlobal .'/video/{variable}',
    ''. $oldSiteGlobal .'/videos/',
    ''. $oldSiteGlobal .'/videos/{variable}',
    'play.'. $oldSiteGlobal .'/#/',
    $oldSiteGlobal,
    'www.'. $oldSiteGlobal .'',
    ''. $oldSiteGlobal .'/programa/bring-it',
    ''. $oldSiteGlobal .'/programa/pequenas-grandes-mulheres',
    ''. $oldSiteGlobal .'/movies/rainha-da-cocaina',
    ''. $oldSiteGlobal .'/movies/danca-mortal-em-las-vegas',
    ''. $oldSiteGlobal .'/programa/perfeita-obsessao',
    ''. $oldSiteGlobal .'/microsites/vioencia-de-genero',
    ''. $oldSiteGlobal .'/onde-assistir',
    ''. $oldSiteGlobal .'/ancine-informacoes-de-programacao'
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