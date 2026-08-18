<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Core\Container;
use App\Core\View;
use App\Core\Response;
use App\Core\Session;
use App\Core\Validator;

class Controller
{
    protected Container $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    protected function view(string $view, array $params = []): void
    {
        /** @var View $viewRenderer */
        $viewRenderer = $this->container->get('view');
        $viewRenderer->render($view, $params);
    }

    protected function json(mixed $data, int $code = 200): void
    {
        /** @var Response $response */
        $response = $this->container->get('response');
        $response->json($data, $code);
    }

    protected function redirect(string $url, int $code = 302): void
    {
        /** @var Response $response */
        $response = $this->container->get('response');
        $response->redirect($url, $code);
    }

    protected function with(string $key, mixed $value): void
    {
        /** @var Session $session */
        $session = $this->container->get('session');
        $session->flash($key, $value);
    }

    protected function validate(array $data, array $rules): array
    {
        /** @var Validator $validator */
        $validator = $this->container->get('validator');
        return $validator->validate($data, $rules);
    }
}
