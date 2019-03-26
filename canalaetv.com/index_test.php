<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>

<?php

include('aeredirect.php');


$test = array(
  'ar.'.$oldSiteGlobal.'',
  'ar.'.$oldSiteGlobal.'/horarios-programas',
  'ar.'.$oldSiteGlobal.'/horarios-programas/cualquiervariable',
  'ar.'.$oldSiteGlobal.'/movies',
  'ar.'.$oldSiteGlobal.'/aextras',
  'ar.'.$oldSiteGlobal.'/videos',
  'ar.'.$oldSiteGlobal.'/etiquetas/cualquiervariable',
  'ar.'.$oldSiteGlobal.'/etiquetas/',
  'ar.'.$oldSiteGlobal.'/noticias/',
  'ar.'.$oldSiteGlobal.'/noticias/cualquiervariable',
  'ar.'.$oldSiteGlobal.'/movies/cualquiervariable',
  'ar.'.$oldSiteGlobal.'/content/donde-vernos',
  'ar.'.$oldSiteGlobal.'/google_vignette',
  'ar.'.$oldSiteGlobal.'/search/node',
  'ar.'.$oldSiteGlobal.'/videos/cualquiervariable',
  'ar.'.$oldSiteGlobal.'/series/cualquiervariable',
  'ar.'.$oldSiteGlobal.'/series/',
  'ar.'.$oldSiteGlobal.'/episode/cualquiervariable',
  'ar.'.$oldSiteGlobal.'/episode/',
  'ar.'.$oldSiteGlobal.'/personaje/cualquiervariable',
  'ar.'.$oldSiteGlobal.'/personaje/',
  'ar.'.$oldSiteGlobal.'/content/cualquiervariable',
  'ar.'.$oldSiteGlobal.'/content/',
  'ar.'.$oldSiteGlobal.'/programas/',
  'ar.'.$oldSiteGlobal.'/programas/episodios/cualquiervariable',
  'ar.'.$oldSiteGlobal.'/programas/episodios/',
  'ar.'.$oldSiteGlobal.'/juegos/cualquiervariable',
  'ar.'.$oldSiteGlobal.'/encuesta/cualquiervariable',
  'ar.'.$oldSiteGlobal.'/content/contacto',
  'ar.'.$oldSiteGlobal.'/quienes_somos',
  'ar.'.$oldSiteGlobal.'/content/donde-vernos',
  'ar.'.$oldSiteGlobal.'/terminos_de_uso',
  'ar.'.$oldSiteGlobal.'/politicas_derechos_autor',
  'ar.'.$oldSiteGlobal.'/politicas_de_privacidad',
  'ar.'.$oldSiteGlobal.'/rrpp_y_prensa',
  'ar.'.$oldSiteGlobal.'/publicidad',
  'play.'.$oldSiteGlobal.'',
  'play.'.$oldSiteGlobal.'/#/featured',
  'play.'.$oldSiteGlobal.'/#/shows',
  'play.'.$oldSiteGlobal.'/#/tv-schedule',
  'play.'.$oldSiteGlobal.'/#/notifications',
  'play.'.$oldSiteGlobal.'/#/help',
  'play.'.$oldSiteGlobal.'/#/aboutus',
  'ar.'.$oldSiteGlobal.'/microsites/cualquiervariable',
  'ar.'.$oldSiteGlobal.'/microsites/aeinvestiga/show/60-dias-preso--el-experimento',
  'ar.'.$oldSiteGlobal.'/microsites/demasiado-joven-para-matar/show/terapia-de-shock',
  'ar.'.$oldSiteGlobal.'/microsites/aeinvestiga/show/hijas-de-la-poligamia',
  'ar.'.$oldSiteGlobal.'/microsites/aeinvestiga/show/me-enamore-de-mi-alumno--la-historia-de-mary-kay-letourneau',
  'ar.'.$oldSiteGlobal.'/microsites/aeinvestiga/show/el-secuestro-de-elizabeth-smart',
  'ar.'.$oldSiteGlobal.'/microsites/live-pd-policias-en-vivo/show/lo-mejor-de-policias-en-vivo',
  'ar.'.$oldSiteGlobal.'/microsites/talent-land',
  'ar.'.$oldSiteGlobal.'/microsites/somos-justicia',
  'ar.'.$oldSiteGlobal.'/microsites/hablemosdebullying',
  'ar.'.$oldSiteGlobal.'/microsites/aesocial',
  'ar.'.$oldSiteGlobal.'/series/acumuladores-compulsivos',
  'ar.'.$oldSiteGlobal.'/microsites/demasiado-joven-para-matar/show/demasiado-joven-para-matar',
  'ar.'.$oldSiteGlobal.'/series/esclavos-de-la-cienciologia',
  'ar.'.$oldSiteGlobal.'/series/ncis-new-orleans-1',
  'ar.'.$oldSiteGlobal.'/series/los-hermanos-menendez-la-historia-jamas-contada',
  'ar.'.$oldSiteGlobal.'/series/fronteras-peligrosas'
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