<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>

<?php

include('tuhistoryredirect.php');


$test = array(
    'ar.'.$oldSiteGlobal.'',
    'ar.'.$oldSiteGlobal.'/biografias/',
    'ar.'.$oldSiteGlobal.'/biografias/{variable}',
    'ar.'.$oldSiteGlobal.'/contacto',
    'ar.'.$oldSiteGlobal.'/content/',
    'ar.'.$oldSiteGlobal.'/content/{variable}',
    'ar.'.$oldSiteGlobal.'/donde-vernos',
    'ar.'.$oldSiteGlobal.'/etiquetas/',
    'ar.'.$oldSiteGlobal.'/etiquetas/{variable}',
    'ar.'.$oldSiteGlobal.'/expandido/',
    'ar.'.$oldSiteGlobal.'/expandido/{variable}',
    'ar.'.$oldSiteGlobal.'/galeria/',
    'ar.'.$oldSiteGlobal.'/galeria/{variable}',
    'ar.'.$oldSiteGlobal.'/google_vignette',
    'ar.'.$oldSiteGlobal.'/h2',
    'ar.'.$oldSiteGlobal.'/history2',
    'ar.'.$oldSiteGlobal.'/horarios',
    'ar.'.$oldSiteGlobal.'/horarios-programas',
    'ar.'.$oldSiteGlobal.'/horarios-programas-history2',
    'ar.'.$oldSiteGlobal.'/hoy-en-la-historia',
    'ar.'.$oldSiteGlobal.'/hoy-en-la-historia/{variable}',
    'ar.'.$oldSiteGlobal.'/microsites/',
    'ar.'.$oldSiteGlobal.'/microsites/{variable}',
    'ar.'.$oldSiteGlobal.'/microsites/especiales-de-navidad',
    'ar.'.$oldSiteGlobal.'/microsites/especiales-de-navidad/{variable}',
    'ar.'.$oldSiteGlobal.'/node/',
    'ar.'.$oldSiteGlobal.'/node/109631',
    'ar.'.$oldSiteGlobal.'/noticias',
    'ar.'.$oldSiteGlobal.'/noticias/{variable}',
    'ar.'.$oldSiteGlobal.'/politicas_de_privacidad',
    'ar.'.$oldSiteGlobal.'/politicas_derechos_autor',
    'ar.'.$oldSiteGlobal.'/programa/',
    'ar.'.$oldSiteGlobal.'/programa/{variable}',
    'ar.'.$oldSiteGlobal.'/programas',
    'ar.'.$oldSiteGlobal.'/programas/{variable}',
    'ar.'.$oldSiteGlobal.'/publicidad',
    'ar.'.$oldSiteGlobal.'/quienes_somos',
    'ar.'.$oldSiteGlobal.'/region/{variable}',
    'ar.'.$oldSiteGlobal.'/rrpp_y_prensa',
    'ar.'.$oldSiteGlobal.'/terminos_de_uso',
    'ar.'.$oldSiteGlobal.'/videos/',
    'ar.'.$oldSiteGlobal.'/videos/{variable}',
    'ar.'.$oldSiteGlobal.'/zonas/',
    'ar.'.$oldSiteGlobal.'/zonas/{variable}',
    'unaidea.'.$oldSiteGlobal.'',
    'play.'.$oldSiteGlobal.'',
    'play.'.$oldSiteGlobal.'/#/',
    'play.'.$oldSiteGlobal.'/#/aboutus',
    'play.'.$oldSiteGlobal.'/#/featured',
    'play.'.$oldSiteGlobal.'/#/help',
    'play.'.$oldSiteGlobal.'/#/notifications',
    'play.'.$oldSiteGlobal.'/#/show/1109',
    'play.'.$oldSiteGlobal.'/#/shows/{variable}',
    'play.'.$oldSiteGlobal.'/#/tv-schedule',
    'play.'.$oldSiteGlobal.'/episode/{variable}',
    'unaidea.'.$oldSiteGlobal.'/{variable}',
    ''.$oldSiteGlobal.'',
    'www.'.$oldSiteGlobal.'',
    'ar.'.$oldSiteGlobal.'/que-demonio-legendario-eres',
    'ar.'.$oldSiteGlobal.'/que-personaje-historico-eres',
    'ar.'.$oldSiteGlobal.'/--que-guerrero-letal-de-la-historia-eres-',
    'ar.'.$oldSiteGlobal.'/programas/lo-mejor-del-precio-de-la-historia',
    'ar.'.$oldSiteGlobal.'/programas/lo-mejor-de-cazadores-de-tesoros',
    'ar.'.$oldSiteGlobal.'/programas/el-precio-de-la-historia',
    'ar.'.$oldSiteGlobal.'/programas/locos-por-los-autos',
    'ar.'.$oldSiteGlobal.'/programas/rutas-mortales',
    'ar.'.$oldSiteGlobal.'/programas/quien-da-ma',
    'ar.'.$oldSiteGlobal.'/1idea/'
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