<?php

//codigo del metodo rest

$url = 'http://localhost/api/service.php';

//create a new cURL resource
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($ch);
if (curl_errno($ch)) {
	echo 'Error:'.curl_error($ch);
}
curl_close($ch);

$obj_php = json_decode($result);

//var_dump($obj_php);

?>
<script type="text/javascript">

 window.onload = function() {



        var misDatos =
<?php
echo $result;
?>;

        var x  = "";
        misDatos.forEach(
            function(data){

                  x += "<div id='item' class='item'>";
                  x += "<span class='nombre'>"+ data.nombre + "</span>";
                  x += "<br />";
                  x += "<span class='descripción'>"+ data.descripcion + "</span>";
                  x += "<br />";
                  x += "<span class='dias'>"+ data.dias + "</span>";
                  x += "<br />";
                  x += "</div>";
            }
        );

        console.log(x);

        document.getElementById("datos").innerHTML = x;
}
</script>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Api</title>
    </head>
    <body>
        <div id="datos">

        </div>
    </body>
</html>