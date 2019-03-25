<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>

<?php

include('aeredirect.php');


$test = array(
  'ar.canalaetv.com',
  'ar.canalaetv.com/horarios-programas',
  'ar.canalaetv.com/horarios-programas/cualquiervariable',
  'ar.canalaetv.com/movies',
  'ar.canalaetv.com/aextras',
  'ar.canalaetv.com/videos',
  'ar.canalaetv.com/etiquetas/cualquiervariable',
  'ar.canalaetv.com/etiquetas/',
  'ar.canalaetv.com/noticias/',
  'ar.canalaetv.com/noticias/cualquiervariable',
  'ar.canalaetv.com/movies/cualquiervariable',
  'ar.canalaetv.com/content/donde-vernos',
  'ar.canalaetv.com/google_vignette',
  'ar.canalaetv.com/search/node',
  'ar.canalaetv.com/videos/cualquiervariable',
  'ar.canalaetv.com/series/cualquiervariable',
  'ar.canalaetv.com/series/',
  'ar.canalaetv.com/episode/cualquiervariable',
  'ar.canalaetv.com/episode/',
  'ar.canalaetv.com/personaje/cualquiervariable',
  'ar.canalaetv.com/personaje/',
  'ar.canalaetv.com/content/cualquiervariable',
  'ar.canalaetv.com/content/',
  'ar.canalaetv.com/programas/',
  'ar.canalaetv.com/programas/episodios/cualquiervariable',
  'ar.canalaetv.com/programas/episodios/',
  'ar.canalaetv.com/juegos/cualquiervariable',
  'ar.canalaetv.com/encuesta/cualquiervariable',
  'ar.canalaetv.com/content/contacto',
  'ar.canalaetv.com/quienes_somos',
  'ar.canalaetv.com/content/donde-vernos',
  'ar.canalaetv.com/terminos_de_uso',
  'ar.canalaetv.com/politicas_derechos_autor',
  'ar.canalaetv.com/politicas_de_privacidad',
  'ar.canalaetv.com/rrpp_y_prensa',
  'ar.canalaetv.com/publicidad',
  'play.canalaetv.com',
  'play.canalaetv.com/#/featured',
  'play.canalaetv.com/#/shows',
  'play.canalaetv.com/#/tv-schedule',
  'play.canalaetv.com/#/notifications',
  'play.canalaetv.com/#/help',
  'play.canalaetv.com/#/aboutus',
  'ar.canalaetv.com/microsites/cualquiervariable',
  'ar.canalaetv.com/microsites/aeinvestiga/show/60-dias-preso--el-experimento',
  'ar.canalaetv.com/microsites/demasiado-joven-para-matar/show/terapia-de-shock',
  'ar.canalaetv.com/microsites/aeinvestiga/show/hijas-de-la-poligamia',
  'ar.canalaetv.com/microsites/aeinvestiga/show/me-enamore-de-mi-alumno--la-historia-de-mary-kay-letourneau',
  'ar.canalaetv.com/microsites/aeinvestiga/show/el-secuestro-de-elizabeth-smart',
  'ar.canalaetv.com/microsites/live-pd-policias-en-vivo/show/lo-mejor-de-policias-en-vivo',
  'ar.canalaetv.com/microsites/talent-land',
  'ar.canalaetv.com/microsites/somos-justicia',
  'ar.canalaetv.com/microsites/hablemosdebullying',
  'ar.canalaetv.com/microsites/aesocial',
  'ar.canalaetv.com/series/acumuladores-compulsivos',
  'ar.canalaetv.com/microsites/demasiado-joven-para-matar/show/demasiado-joven-para-matar',
  'ar.canalaetv.com/series/esclavos-de-la-cienciologia',
  'ar.canalaetv.com/series/ncis-new-orleans-1',
  'ar.canalaetv.com/series/los-hermanos-menendez-la-historia-jamas-contada'
);
?>

<div class="container-fluid">

<div style="text-align: center;">


  <div class="">
    <h1>Probar url</h1>
    <p><b>Por ejemplo: </b>https://ar.canalaetv.com/microsites/demasiado-joven-para-matar/show/demasiado-joven-para-matar</p>
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