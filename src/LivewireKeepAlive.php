<?php

namespace Livewire;

class LivewireKeepAlive
{
    // This simulates extending Illuminate/Routing/Controller
    public function getMiddleware()
    {
        return [[
            'middleware' => 'web',
            'options' => [],
        ]];
    }

    public function __invoke()
    {
        return response(200);
    }
}
