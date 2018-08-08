<?php
    // Recebendo a url da api de apis publicas
    $url = "https://api.publicapis.org/entries";
    // Rexuperando os dados do json
    $json = file_get_contents($url);
    // Decodificando os dados
    $files = json_decode($json);
    // Recuperando as apis
    $apis = $files->entries;
?>
<!-- // Incluindo um html para a exibição das api's -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./resources/css/materialize.min.css">
</head>
<body>
<div class="container">
    <div class="row">
    <h1>List of publics API's</h1>
                <div class='col s12 m12 l12'>
                    <div class='card z-depth-5 black darken-1'>
                        <div class='card-content white-text'>
                        <table>
                        <thead>
                          <tr>
                              <th>API Name</th>
                              <th>Description</th>
                              <th>ILink</th>
                          </tr>
                        </thead>
                        <?php 
                            foreach ($apis as $api) {
                            echo "
                                <tbody>
                                     <td> $api->API </td>
                                     <td>$api->Description</td>
                                     <td><a href='$api->Link'>Link</td></a>
                                </tbody>
                            ";
                            }
                        ?>
                      </table>
                 </div>
            </div>
         </div>
    </div>
</div>
        <script src="./resources/js/materialize.min.js"></script>
</body>
</html>