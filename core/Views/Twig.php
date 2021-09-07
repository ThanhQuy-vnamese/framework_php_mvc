<?php
declare(strict_types=1);

namespace App\Core\Views;

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use Twig\Loader\FilesystemLoader;
use Twig\TemplateWrapper;

class Twig {
    public Environment $twig;

    public function __construct($pathToView, array $options = [])
    {
        $loader = new FilesystemLoader($pathToView);
        $twig = new Environment($loader, $options);
        $this->twig = $twig;
    }

    /**
     * @throws RuntimeError
     * @throws SyntaxError
     * @throws LoaderError
     */
    public function render(string $templateName, array $params = []): string
    {
        $template = $templateName . '.twig';
        return $this->twig->render($template, $params);
    }

    /**
     * @throws SyntaxError
     * @throws RuntimeError
     * @throws LoaderError
     */
    public function load(string $templateName): TemplateWrapper
    {
        $template = $templateName . '.twig';
        return $this->twig->load($template);
    }
}
