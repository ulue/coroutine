<?php

return [
    \ZanPHP\Coroutine\Contract\Async::class => "\\Zan\\Framework\\Foundation\\Contract\\Async",
    \ZanPHP\Coroutine\Contract\Resource::class => "\\Zan\\Framework\\Foundation\\Contract\\Resource",
    \ZanPHP\Coroutine\Exception\ParallelException::class => "\\Zan\\Framework\\Foundation\\Exception\\ParallelException",
    \ZanPHP\Coroutine\Context::class => "\\Zan\\Framework\\Utilities\\DesignPattern\\Context",
    \ZanPHP\Coroutine\Event::class => "\\Zan\\Framework\\Foundation\\Coroutine\\Event",
    \ZanPHP\Coroutine\EventChain::class => "\\Zan\\Framework\\Foundation\\Coroutine\\EventChain",
    \ZanPHP\Coroutine\Multi::class => "\\Zan\\Framework\\Foundation\\Coroutine\\Parallel",
    \ZanPHP\Coroutine\Parallel::class => "\\Zan\\Framework\\Foundation\\Coroutine\\SysCall",
    \ZanPHP\Coroutine\Scheduler::class => "\\Zan\\Framework\\Foundation\\Coroutine\\Scheduler",
    \ZanPHP\Coroutine\Signal::class => "\\Zan\\Framework\\Foundation\\Coroutine\\Signal",
    \ZanPHP\Coroutine\SysCall::class => "\\Zan\\Framework\\Foundation\\Coroutine\\SysCall",
    \ZanPHP\Coroutine\Task::class => "\\Zan\\Framework\\Foundation\\Coroutine\\Task",
    \ZanPHP\Coroutine\TaskId::class => "\\Zan\\Framework\\Foundation\\Coroutine\\TaskId",
];