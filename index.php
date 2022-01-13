<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://bootswatch.com/5/slate/bootstrap.css" rel="stylesheet" >

    <title>CMS Detector</title>
  </head>
  <body>
    <div class="container py-5" style="margin-top: 250px;">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h1 class="text-center font-weight-bold">What CMS</h1>
          <p class="text-center w-50 mx-auto">Check now what technologies are using on your website.</p>
          <form method="post">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Website Link</label>
              <input type="text" class="form-control" name="link" id="exampleFormControlInput1" placeholder="Ex: example.com">
            </div>
            <div>
              <button class="btn btn-primary" name="submit" type="submit">Check Now!</button>
            </div>
          </form>

          <div class="data mt-5">
            <?php

            ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


            //$data = "";
            if (isset($_POST['submit'])) {
              $link = $_POST['link'];
              if (empty($link)) {
                echo "<script>alert('Link field are required.')</script>";
              } else {

        $u = $link;
$curl_handle=curl_init();
    curl_setopt($curl_handle, CURLOPT_URL,$u);
    curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Mozilla/5.0');
    curl_setopt($curl_handle, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($curl_handle, CURLOPT_SSL_VERIFYHOST, false);
$newquery = curl_exec($curl_handle);
curl_close($curl_handle);
$newquery_get = htmlentities($newquery);
               
                
               
                if(str_contains($newquery_get, 'wp-admin') || str_contains($newquery_get, 'wp-content')){
                  echo '<div class="alert alert-success"><h1>This site uses WordPress CMS</h1></div>';

                }elseif(str_contains($newquery_get, 'cdn.shopify.com')){
                  echo '<div class="alert alert-success"><h1>This site uses Shopify Store CMS</h1></div>';

                }elseif(str_contains($newquery_get, 'static.wixstatic.com')){
                  echo '<div class="alert alert-success"><h1>This site uses WIX CMS</h1></div>';

                }elseif(str_contains($newquery_get, 'Magento_pagebuilder')){
                  echo '<div class="alert alert-success"><h1>This site uses MAGENTO CMS</h1></div>';

                }elseif(str_contains($newquery_get, 'cdn11.bigcommerce.com')){
                  echo '<div class="alert alert-success"><h1>This site uses BIGCOMMERCE CMS</h1></div>';

                }elseif(str_contains($newquery_get, 'cdn2.hubspot.net')){
                  echo '<div class="alert alert-success"><h1>This site uses  HUBSPOT CMS</h1></div>';

                }elseif(str_contains($newquery_get, 'joomla-script-options new') || str_contains($newquery_get, 'Joomla! - Open Source Content Management')){
                  echo '<div class="alert alert-success"><h1>This site uses  JOOMLA CMS</h1></div>';

                }elseif(str_contains($newquery_get, 'data-drupal-messages-fallback') || str_contains($newquery_get, 'Drupal 9 (https://www.drupal.org)')){
                  echo '<div class="alert alert-success"><h1>This site uses  DRUPAL CMS</h1></div>';

                }
                elseif(str_contains($newquery_get, 'static1.squarespace.com')){
                  echo '<div class="alert alert-success"><h1>This site uses  SQUARESPACE CMS</h1></div>';

               
                }elseif(str_contains($newquery_get, 'weebly-footer') || str_contains($newquery_get, 'weebly.com')){
                  echo '<div class="alert alert-success"><h1>This site uses  WEEBLY CMS</h1></div>';

                }else{
                   echo '<div class="alert alert-danger"><h1>'.$link.' Doesn\'t use a CMS</h1></div>';
                }
                   
                 
               
            }
          }

            ?>
          </div>
        </div>
      </div>
     
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>