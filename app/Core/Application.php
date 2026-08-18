<?php

declare(strict_types=1);

namespace App\Core;

use Throwable;

class Application
{
    public Container $container;
    public Router $router;
    public View $view;
    public Request $request;
    public Response $response;
    public Session $session;

    public function __construct()
    {
        $this->container = new Container();
        $this->request   = new Request();
        $this->response  = new Response();
        $this->session   = new Session();
        $this->view      = new View();
        $this->router    = new Router($this->container);

        $this->registerBindings();
    }

    public function run(): void
    {
        try {
            $this->router->loadRoutes();
            $this->router->dispatch($this->request);
        } catch (Throwable $e) {
            $handler = new ExceptionHandler();
            $handler->render($this->request, $e);
        }
    }

    public function container(): Container
    {
        return $this->container;
    }

    public function router(): Router
    {
        return $this->router;
    }

    public function view(): View
    {
        return $this->view;
    }

    private function isDebug(): bool
    {
        return filter_var($_ENV['APP_DEBUG'] ?? '0', FILTER_VALIDATE_BOOLEAN);
    }

    private function registerBindings(): void
    {
        $this->container->set('app', $this);
        $this->container->set('request', $this->request);
        $this->container->set('response', $this->response);
        $this->container->set('router', $this->router);
        $this->container->set('view', $this->view);
        $this->container->set('session', $this->session);
        $this->container->set('validator', fn() => new Validator());
        $this->container->set('database', fn() => Database::getInstance());
    }
}
