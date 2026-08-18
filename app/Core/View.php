<?php

declare(strict_types=1);

namespace App\Core;

class View
{
    private string $viewsPath;
    private string $layout = 'layouts/base';
    private array $sections = [];
    private ?string $currentSection = null;

    public function __construct(?string $viewsPath = null)
    {
        $this->viewsPath = $viewsPath ?? dirname(__DIR__) . '/Views';
    }

    public function render(string $view, array $params = []): void
    {
        $viewFile = $this->viewsPath . '/' . str_replace('.', '/', $view) . '.php';

        if (!file_exists($viewFile)) {
            throw new \RuntimeException("View [{$view}] not found at {$viewFile}");
        }

        $layoutFile = $this->viewsPath . '/' . $this->layout . '.php';

        $content = $this->renderFile($viewFile, $params);

        $content = $this->processSections($content);

        if (file_exists($layoutFile)) {
            $output = $this->renderFile($layoutFile, array_merge($params, ['content' => $content]));
        } else {
            $output = $content;
        }

        echo $output;
    }

    public function renderContent(string $content, array $params = []): void
    {
        $layoutFile = $this->viewsPath . '/' . $this->layout . '.php';

        if (file_exists($layoutFile)) {
            echo $this->renderFile($layoutFile, array_merge($params, ['content' => $content]));
        } else {
            echo $content;
        }
    }

    public function setLayout(string $layout): void
    {
        $this->layout = $layout;
    }

    public function getLayout(): string
    {
        return $this->layout;
    }

    private function renderFile(string $file, array $params = []): string
    {
        extract($params, EXTR_SKIP);
        ob_start();
        include $file;
        return ob_get_clean();
    }

    private function processSections(string $content): string
    {
        $this->sections = [];

        $pattern = "/@section\(['\"](\w+)['\"]\)(.*?)(@endsection)/s";
        $content = preg_replace_callback($pattern, function ($matches) {
            $name = $matches[1];
            $this->sections[$name] = trim($matches[2]);
            return '';
        }, $content);

        $content = preg_replace_callback(
            '/\{\{content\}\}/',
            function () {
                return $this->sections['content'] ?? '';
            },
            $content
        );

        return $content;
    }

    public function section(string $name): void
    {
        $this->currentSection = $name;
        ob_start();
    }

    public function endSection(): void
    {
        if ($this->currentSection !== null) {
            $this->sections[$this->currentSection] = ob_get_clean();
            $this->currentSection = null;
        }
    }

    public function getSections(): array
    {
        return $this->sections;
    }

    public function getViewsPath(): string
    {
        return $this->viewsPath;
    }
}
