<?php
declare(strict_types=1);
namespace App\Controller;


use App\Core\Container;
use App\Core\View;

interface ControllerInterface {
public function __construct(Container $container, View $view);
    public function render();
}

