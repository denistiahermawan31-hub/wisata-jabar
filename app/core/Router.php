<?php
// =========================================================
// Router.php — front controller sederhana
// Format URL: index.php?url=controller/method/param1/param2
// Contoh    : /destinasi/detail/3  -> DestinasiController->detail(3)
// =========================================================
class Router
{
    public function dispatch(string $url)
    {
        $url = trim($url, '/');
        $segments = $url === '' ? [] : explode('/', $url);

        $controllerName = !empty($segments[0]) ? ucfirst($segments[0]) . 'Controller' : 'HomeController';
        $method         = $segments[1] ?? 'index';
        $params         = array_slice($segments, 2);

        $controllerFile = __DIR__ . '/../controllers/' . $controllerName . '.php';

        if (!file_exists($controllerFile)) {
            $controllerName = 'HomeController';
            $method = 'notFound';
            $controllerFile = __DIR__ . '/../controllers/HomeController.php';
        }

        require_once $controllerFile;
        $controller = new $controllerName();

        if (!method_exists($controller, $method)) {
            $method = 'notFound';
        }

        call_user_func_array([$controller, $method], $params);
    }
}
