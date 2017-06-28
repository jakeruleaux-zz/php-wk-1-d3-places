<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Places.php";

    $app = new Silex\Application();

     $app->get("/", function() {
        return "
        <!DOCTYPE html>
        <html>
        <head>
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
            <title>Places I've Been</title>
        </head>
        <body>
            <div class='container'>
                <h1>Where have you visited?</h1>
                <form action='/view_cities'>
                    <div class='form-group'>
                      <label for='city'>Enter a city you've been to:</label>
                      <input id='city' name='city' class='form-control' type='text'>
                    </div>
                    <button type='submit' class='btn-success'>Enter</button>
                </form>
            </div>
        </body>
        </html>
        ";
    });

    $app->get("/view_cities", function() {
    $my_city = new Places($_GET['city']);
        $output = "<p>You have been to " . $my_city . "!";
    }
    return $output;
});
    return $app;
?>
