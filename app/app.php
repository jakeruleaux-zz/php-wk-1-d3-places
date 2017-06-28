<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Places.php";

    session_start();

    if (empty($_SESSION['list_of_cities'])) {
        $_SESSION['list_of_cities'] = array();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

     $app->get("/", function() use ($app) {
        return $app['twig']->render('cities.html.twig', array('cities' => Places::getAll()));
    });

    $app->post("/cities", function() use ($app) {
        $cities = new Places($_POST['cities'], $_POST['length'], $_POST['people']);
        $cities->save();
        return $app['twig']->render('create_cities.html.twig', array('new_city' => $cities));
    });

    $app->post("/delete_cities", function() use ($app) {
        Places::deleteAll();
        return $app['twig']->render('delete_cities.html.twig');
});
    return $app;
?>
