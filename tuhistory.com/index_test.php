<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>

<?php

include('tuhistoryredirect.php');


$test = array(
    'ar.'.$oldSiteGlobal.'.com',
    'ar.'.$oldSiteGlobal.'.com/biografias/',
    'ar.'.$oldSiteGlobal.'.com/biografias/{variable}',
    'ar.'.$oldSiteGlobal.'.com/contacto',
    'ar.'.$oldSiteGlobal.'.com/content/',
    'ar.'.$oldSiteGlobal.'.com/content/{variable}',
    'ar.'.$oldSiteGlobal.'.com/donde-vernos',
    'ar.'.$oldSiteGlobal.'.com/etiquetas/',
    'ar.'.$oldSiteGlobal.'.com/etiquetas/{variable}',
    'ar.'.$oldSiteGlobal.'.com/expandido/',
    'ar.'.$oldSiteGlobal.'.com/expandido/{variable}',
    'ar.'.$oldSiteGlobal.'.com/galeria/',
    'ar.'.$oldSiteGlobal.'.com/galeria/{variable}',
    'ar.'.$oldSiteGlobal.'.com/google_vignette',
    'ar.'.$oldSiteGlobal.'.com/h2',
    'ar.'.$oldSiteGlobal.'.com/history2',
    'ar.'.$oldSiteGlobal.'.com/horarios',
    'ar.'.$oldSiteGlobal.'.com/horarios-programas',
    'ar.'.$oldSiteGlobal.'.com/horarios-programas-history2',
    'ar.'.$oldSiteGlobal.'.com/hoy-en-la-historia',
    'ar.'.$oldSiteGlobal.'.com/hoy-en-la-historia/{variable}',
    'ar.'.$oldSiteGlobal.'.com/microsites/',
    'ar.'.$oldSiteGlobal.'.com/microsites/{variable}',
    'ar.'.$oldSiteGlobal.'.com/microsites/especiales-de-navidad',
    'ar.'.$oldSiteGlobal.'.com/microsites/especiales-de-navidad/{variable}',
    'ar.'.$oldSiteGlobal.'.com/node/',
    'ar.'.$oldSiteGlobal.'.com/node/109631',
    'ar.'.$oldSiteGlobal.'.com/noticias',
    'ar.'.$oldSiteGlobal.'.com/noticias/{variable}',
    'ar.'.$oldSiteGlobal.'.com/politicas_de_privacidad',
    'ar.'.$oldSiteGlobal.'.com/politicas_derechos_autor',
    'ar.'.$oldSiteGlobal.'.com/programa/',
    'ar.'.$oldSiteGlobal.'.com/programa/{variable}',
    'ar.'.$oldSiteGlobal.'.com/programas',
    'ar.'.$oldSiteGlobal.'.com/programas/{variable}',
    'ar.'.$oldSiteGlobal.'.com/publicidad',
    'ar.'.$oldSiteGlobal.'.com/quienes_somos',
    'ar.'.$oldSiteGlobal.'.com/region/{variable}',
    'ar.'.$oldSiteGlobal.'.com/rrpp_y_prensa',
    'ar.'.$oldSiteGlobal.'.com/terminos_de_uso',
    'ar.'.$oldSiteGlobal.'.com/videos/',
    'ar.'.$oldSiteGlobal.'.com/videos/{variable}',
    'ar.'.$oldSiteGlobal.'.com/zonas/',
    'ar.'.$oldSiteGlobal.'.com/zonas/{variable}',
    'unaidea.'.$oldSiteGlobal.'.com',
    'play.'.$oldSiteGlobal.'.com',
    'play.'.$oldSiteGlobal.'.com/#/',
    'play.'.$oldSiteGlobal.'.com/#/aboutus',
    'play.'.$oldSiteGlobal.'.com/#/featured',
    'play.'.$oldSiteGlobal.'.com/#/help',
    'play.'.$oldSiteGlobal.'.com/#/notifications',
    'play.'.$oldSiteGlobal.'.com/#/show/1109',
    'play.'.$oldSiteGlobal.'.com/#/shows',
    'play.'.$oldSiteGlobal.'.com/#/tv-schedule',
    'play.'.$oldSiteGlobal.'.com/episode/{variable}',
    'unaidea.'.$oldSiteGlobal.'.com/{variable}',
    ''.$oldSiteGlobal.'.com',
    'www.'.$oldSiteGlobal.'.com',
    'ar.'.$oldSiteGlobal.'.com/que-demonio-legendario-eres',
    'ar.'.$oldSiteGlobal.'.com/que-personaje-historico-eres',
    'ar.'.$oldSiteGlobal.'.com/--que-guerrero-letal-de-la-historia-eres-',
    'ar.'.$oldSiteGlobal.'.com/programas/lo-mejor-del-precio-de-la-historia',
    'ar.'.$oldSiteGlobal.'.com/programas/lo-mejor-de-cazadores-de-tesoros',
    'ar.'.$oldSiteGlobal.'.com/programas/el-precio-de-la-historia',
    'ar.'.$oldSiteGlobal.'.com/programas/locos-por-los-autos',
    'ar.'.$oldSiteGlobal.'.com/programas/rutas-mortales',
    'ar.'.$oldSiteGlobal.'.com/programas/quien-da-ma',
    'ar.'.$oldSiteGlobal.'.com/1idea/'
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