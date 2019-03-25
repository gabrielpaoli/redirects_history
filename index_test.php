<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>

<?php

include('aeredirect.php');


$test = array(
  'ar.aelatam.com',
  'ar.aelatam.com/horarios-programas',
  'ar.aelatam.com/horarios-programas/cualquiervariable',
  'ar.aelatam.com/movies',
  'ar.aelatam.com/aextras',
  'ar.aelatam.com/videos',
  'ar.aelatam.com/etiquetas/cualquiervariable',
  'ar.aelatam.com/etiquetas/',
  'ar.aelatam.com/noticias/',
  'ar.aelatam.com/noticias/cualquiervariable',
  'ar.aelatam.com/movies/cualquiervariable',
  'ar.aelatam.com/content/donde-vernos',
  'ar.aelatam.com/google_vignette',
  'ar.aelatam.com/search/node',
  'ar.aelatam.com/videos/cualquiervariable',
  'ar.aelatam.com/series/cualquiervariable',
  'ar.aelatam.com/series/',
  'ar.aelatam.com/episode/cualquiervariable',
  'ar.aelatam.com/episode/',
  'ar.aelatam.com/personaje/cualquiervariable',
  'ar.aelatam.com/personaje/',
  'ar.aelatam.com/content/cualquiervariable',
  'ar.aelatam.com/content/',
  'ar.aelatam.com/programas/',
  'ar.aelatam.com/programas/episodios/cualquiervariable',
  'ar.aelatam.com/programas/episodios/',
  'ar.aelatam.com/juegos/cualquiervariable',
  'ar.aelatam.com/encuesta/cualquiervariable',
  'ar.aelatam.com/content/contacto',
  'ar.aelatam.com/quienes_somos',
  'ar.aelatam.com/content/donde-vernos',
  'ar.aelatam.com/terminos_de_uso',
  'ar.aelatam.com/politicas_derechos_autor',
  'ar.aelatam.com/politicas_de_privacidad',
  'ar.aelatam.com/rrpp_y_prensa',
  'ar.aelatam.com/publicidad',
  'play.aelatam.com',
  'play.aelatam.com/#/featured',
  'play.aelatam.com/#/shows',
  'play.aelatam.com/#/tv-schedule',
  'play.aelatam.com/#/notifications',
  'play.aelatam.com/#/help',
  'play.aelatam.com/#/aboutus',
  'ar.aelatam.com/microsites/cualquiervariable',
  'ar.aelatam.com/microsites/aeinvestiga/show/60-dias-preso--el-experimento',
  'ar.aelatam.com/microsites/demasiado-joven-para-matar/show/terapia-de-shock',
  'ar.aelatam.com/microsites/aeinvestiga/show/hijas-de-la-poligamia',
  'ar.aelatam.com/microsites/aeinvestiga/show/me-enamore-de-mi-alumno--la-historia-de-mary-kay-letourneau',
  'ar.aelatam.com/microsites/aeinvestiga/show/el-secuestro-de-elizabeth-smart',
  'ar.aelatam.com/microsites/live-pd-policias-en-vivo/show/lo-mejor-de-policias-en-vivo',
  'ar.aelatam.com/microsites/talent-land',
  'ar.aelatam.com/microsites/somos-justicia',
  'ar.aelatam.com/microsites/hablemosdebullying',
  'ar.aelatam.com/microsites/aesocial',
  'ar.aelatam.com/series/acumuladores-compulsivos',
  'ar.aelatam.com/microsites/demasiado-joven-para-matar/show/demasiado-joven-para-matar',
  'ar.aelatam.com/series/esclavos-de-la-cienciologia',
  'ar.aelatam.com/series/ncis-new-orleans-1',
  'ar.aelatam.com/series/los-hermanos-menendez-la-historia-jamas-contada'
);
?>

<div class="container-fluid">

<div style="text-align: center;">


  <div class="">
    <h1>Probar url</h1>
    <p><b>Por ejemplo: </b>https://ar.aelatam.com/microsites/demasiado-joven-para-matar/show/demasiado-joven-para-matar</p>
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
        var_dump(parseUrl($url, $countryInUrl, $variableInUrl, $oldUrl, $newUrl, $exceptions));
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
            print '<td>' . parseUrl($url, $countryInUrl, $variableInUrl, $oldUrl, $newUrl, $exceptions) . '</td>';
          print '</tr>';
        endforeach;

      ?>

    </tbody>
  </table>
</div>


</div>