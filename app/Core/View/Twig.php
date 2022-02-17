<?php
declare(strict_types=1);

namespace App\Core\View;

use App\Core\Auth\Authentication;
use App\Core\Helper\Helper;
use App\Core\Session;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use Twig\Loader\FilesystemLoader;
use Twig\TemplateWrapper;
use Twig\TwigFunction;
use const App\Core\Helper\PREFIX_PUBLIC;

class Twig {
    public Environment $twig;

    public function __construct($pathToView, array $options = [])
    {
        $loader = new FilesystemLoader($pathToView);
        $twig = new Environment($loader, $options);

        $twig->addFunction($this->addCreateLinkFunction());
        $twig->addFunction($this->addRedirectFunction());
        $twig->addGlobal('helper', new Helper());
        $twig->addGlobal('Auth', new Authentication());
        $twig->addGlobal('Session', new Session());
        $this->twig = $twig;
    }

    public function addGlobalFunction($name, $value) {
        $this->twig->addGlobal($name, $value);
    }

    public function addCreateLinkFunction() {
        $function = new TwigFunction('createLink', function ($path = '') {
            $requestUrl = $_SERVER['REQUEST_URI'];
            $pos = strpos($requestUrl, PREFIX_PUBLIC);
            if (!$pos) {
                $pathPublic = '/public';
            } else {
                $pathPublic = substr($requestUrl, 0, $pos + strlen('/public'));
            }
            $http = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? 'https://' : 'http://';
            $host = $_SERVER['HTTP_HOST'];
            return $http . $host . $pathPublic . '/' . $path;
        });
        return $function;
    }


    public function addRedirectFunction() {
        $function = new TwigFunction('redirect', function ($path = '') {
            $requestUrl = $_SERVER['REQUEST_URI'];
            $pos = strpos($requestUrl, PREFIX_PUBLIC);
            if (!$pos) {
                $pathPublic = '';
            } else {
                $pathPublic = substr($requestUrl, 0, $pos + strlen('/public'));
            }
            $http = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? 'https://' : 'http://';
            $host = $_SERVER['HTTP_HOST'];
            return $http . $host . $pathPublic . '/' . $path;
        });
        return $function;
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
