<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>

<?php

include('milifetimeredirect.php');


$test = array(
  'ar.'.$oldSiteGlobal.'/',
  'ar.'.$oldSiteGlobal.'/content',
  'ar.'.$oldSiteGlobal.'/contacto',
  'ar.'.$oldSiteGlobal.'/donde-vernos',
  'ar.'.$oldSiteGlobal.'/episodios-completos',
  'ar.'.$oldSiteGlobal.'/episodioscompletos',
  'ar.'.$oldSiteGlobal.'/etiquetas/',
  'ar.'.$oldSiteGlobal.'/etiquetas/{variable}',
  'ar.'.$oldSiteGlobal.'/google_vignette',
  'ar.'.$oldSiteGlobal.'/horarios-programas',
  'ar.'.$oldSiteGlobal.'/lifetime-movies',
  'ar.'.$oldSiteGlobal.'/momento-lifetime',
  'ar.'.$oldSiteGlobal.'/momentolifetime/',
  'ar.'.$oldSiteGlobal.'/momentolifetime/{variable}',
  'ar.'.$oldSiteGlobal.'/personajes',
  'ar.'.$oldSiteGlobal.'/personajes/{variable}',
  'ar.'.$oldSiteGlobal.'/politicas_de_privacidad',
  'ar.'.$oldSiteGlobal.'/politicas_derechos_autor',
  'ar.'.$oldSiteGlobal.'/programas',
  'ar.'.$oldSiteGlobal.'/programas/episodios/{variable}',
  'ar.'.$oldSiteGlobal.'/programas/{variable}',
  'ar.'.$oldSiteGlobal.'/publicidad',
  'ar.'.$oldSiteGlobal.'/quienes_somos',
  'ar.'.$oldSiteGlobal.'/rrpp_y_prensa',
  'ar.'.$oldSiteGlobal.'/terminos_de_uso',
  'ar.'.$oldSiteGlobal.'/videos',
  'ar.'.$oldSiteGlobal.'/videos/{variable}',
  'ar.'.$oldSiteGlobal.'/microsites/{variable}',
  'ar.'.$oldSiteGlobal.'/microsites/atrapada-en-el-manicomio',
  'ar.'.$oldSiteGlobal.'/microsites/atrapada-en-el-manicomio/{variable}',
  'ar.'.$oldSiteGlobal.'/microsites/juguemos-igual/noticias/las-7-mejores-jugadoras-de-futbol-mexicanas',
  'ar.'.$oldSiteGlobal.'/microsites/kennedy/episode/parte-1',
  'play.'.$oldSiteGlobal.'',
  'play.'.$oldSiteGlobal.'/#/',
  'play.'.$oldSiteGlobal.'/#/aboutus',
  'play.'.$oldSiteGlobal.'/#/featured',
  'play.'.$oldSiteGlobal.'/#/help',
  'play.'.$oldSiteGlobal.'/#/notifications',
  'play.'.$oldSiteGlobal.'/#/shows',
  'play.'.$oldSiteGlobal.'/#/tv-schedule',
  'ar.'.$oldSiteGlobal.'/microsites/juguemos-igual',
  'ar.'.$oldSiteGlobal.'/microsites/juguemos-igual/noticias/el-panorama-del-futbol-femenino-en-america-latina',
  'ar.'.$oldSiteGlobal.'/microsites/kennedy',
  'ar.'.$oldSiteGlobal.'/microsites/project-runway-junior',
  'ar.'.$oldSiteGlobal.'/programas/bring-it',
  'ar.'.$oldSiteGlobal.'/programas/sobrevivi-r-kelly',
  'ar.'.$oldSiteGlobal.'/peliculas/griselda-la-reina-de-la-cocaina',
  'ar.'.$oldSiteGlobal.'/microsites/violencia-de-genero/peliculas/obsesion-y-muerte-en-las-vegas',
  'ar.'.$oldSiteGlobal.'/peliculas/vacaciones-para-morir'
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