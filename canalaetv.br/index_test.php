<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>

<?php

include('aeredirect.php');


$test = array(
    ''. $oldSiteGlobal .'',
    ''. $oldSiteGlobal .'/ancine-informacoes-de-programacao',
    ''. $oldSiteGlobal .'/damien/noticia/hora-morta-o-momento-mais-temido-da-madrugada',
    ''. $oldSiteGlobal .'/aeextras',
    ''. $oldSiteGlobal .'/contato',
    ''. $oldSiteGlobal .'/content/onde-assistir',
    ''. $oldSiteGlobal .'/enquete/cualquiervariable',
    ''. $oldSiteGlobal .'/episode/',
    ''. $oldSiteGlobal .'/episode/cualquiervariable',
    ''. $oldSiteGlobal .'/episodio/cualquiervariable',
    ''. $oldSiteGlobal .'/etiquetas/',
    ''. $oldSiteGlobal .'/etiquetas/cualquiervariable',
    ''. $oldSiteGlobal .'/horarios-movies/',
    ''. $oldSiteGlobal .'/horarios-movies/cualquiervariable',
    ''. $oldSiteGlobal .'/horarios-programas',
    ''. $oldSiteGlobal .'/horarios-programas/cualquiervariable',
    ''. $oldSiteGlobal .'/horarios-programas/horarios-programas/cualquiervariable',
    ''. $oldSiteGlobal .'/imprensa',
    ''. $oldSiteGlobal .'/jogos/cualquiervariable',
    ''. $oldSiteGlobal .'/movies/',
    ''. $oldSiteGlobal .'/movies/cualquiervariable',
    ''. $oldSiteGlobal .'/noticia/',
    ''. $oldSiteGlobal .'/noticia/cualquiervariable',
    ''. $oldSiteGlobal .'/personagem/',
    ''. $oldSiteGlobal .'/personagem/cualquiervariable',
    ''. $oldSiteGlobal .'/politica-de-privacidade',
    ''. $oldSiteGlobal .'/politica-de-remocao',
    ''. $oldSiteGlobal .'/programas/',
    ''. $oldSiteGlobal .'/programas/episodios/',
    ''. $oldSiteGlobal .'/programas/episodios/cualquiervariable',
    ''. $oldSiteGlobal .'/publicidade',
    ''. $oldSiteGlobal .'/quem_somos',
    ''. $oldSiteGlobal .'/serie/cualquiervariable',
    ''. $oldSiteGlobal .'/termos-de-uso',
    ''. $oldSiteGlobal .'/videos',
    ''. $oldSiteGlobal .'/videos/cualquiervariable',
    'www.'. $oldSiteGlobal .'',
    'play.'. $oldSiteGlobal .'',
    'play.'. $oldSiteGlobal .'/#/aboutus',
    'play.'. $oldSiteGlobal .'/#/featured',
    'play.'. $oldSiteGlobal .'/#/help',
    'play.'. $oldSiteGlobal .'/#/notifications',
    'play.'. $oldSiteGlobal .'/#/shows',
    'play.'. $oldSiteGlobal .'/#/tv-schedule',
    ''. $oldSiteGlobal .'/microsites/cualquiervariable',
    ''. $oldSiteGlobal .'/microsites/aeinvestiga/show/filhas-da-poligamia',
    ''. $oldSiteGlobal .'/microsites/aeinvestiga/show/60-dias-infiltrados-na-prisao',
    ''. $oldSiteGlobal .'/microsites/aeinvestiga/show/warren-jeffs--profeta-do-mal',
    ''. $oldSiteGlobal .'/series/ate-que-morte-nos-separe',
    ''. $oldSiteGlobal .'/serie/acumuladores-compulsivos',
    ''. $oldSiteGlobal .'/serie/barrados-na-fronteira',
    ''. $oldSiteGlobal .'/serie/casos-arquivados',
    ''. $oldSiteGlobal .'/serie/desaparecidos-s2',
    ''. $oldSiteGlobal .'/serie/policia-ao-vivo-melhores-momentos',
    ''. $oldSiteGlobal .'/microsites/aeinvestiga/videos/gangues-e-extorsao',
    ''. $oldSiteGlobal .'/microsites/aeinvestiga/videos/extorsao-termina-em-briga',
    ''. $oldSiteGlobal .'/microsites/aeinvestiga/videos/mae-atras-das-grades',
    ''. $oldSiteGlobal .'/microsites/aeinvestiga/videos/mormons-na-cadeia',
    ''. $oldSiteGlobal .'/microsites/aeinvestiga/videos/pai-e-filho-novatos',
    ''. $oldSiteGlobal .'/microsites/aesocial',
    ''. $oldSiteGlobal .'/microsites/especial-bruce-lee',
    ''. $oldSiteGlobal .'/microsites/especial-de-halloween',
    ''. $oldSiteGlobal .'/inicial',
    ''. $oldSiteGlobal .'/microsites/sabedoria-oriental/videos/bartitsu--a-arte-marcial-praticada-por-sherlock-holmes',
    ''. $oldSiteGlobal .'/microsites/sabedoria-oriental/videos/o-japao-esta-ficando-sem-ninjas',
    ''. $oldSiteGlobal .'/microsites/vamosfalardebullying'
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