<?php

$html_template = '<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport " content="width=device-width, initial-scale=1.0">
        <title>Greeter</title>
    </head>

    <body onload=""></body>
        <form action="" method="post">
            <input type="text" value="{VALUE_NAME}" placeholder="Name" name="name" id="name">&nbsp;&nbsp;&nbsp;
            <input type="text" value="{VALUE_SURNAME}" placeholder="Surname" name="surname" id="surname"><br><br>
            <input type="submit" value="Greet">
        </form>
    </body>
</html>';

echo $html_template;

$input_name = (array_key_exists('nombre', $_POST)) ? $_POST['nombre'] : "";
$input_surname = (array_key_exists('apellido',$_POST)) ? $_POST['apellido'] : "";

$html_output = str_replace("{VALUE_NAME}", $input_name, $html_template);
$html_output = str_replace("{VALUE_SURNAME}", $input_surname, $html_output);

echo $html_output;

$greeter_link = "http://localhost/py_api/greeter.py?name=" . $input_name . "&surname=" . $input_surname;
$greeter_data = file_get_contents($greeter_link);

echo"<br><br>" . $greeter_data;

?>