<?php

class Router
{
    public function run(string $url, array $routes)
    {
        $url = parse_url($url);
        $path = $url['path'];
        if (false === array_key_exists($path, $routes)) {
            return null;
        }
        $callback = $routes[$path];
        $callback();
    }
}