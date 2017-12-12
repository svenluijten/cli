<?php

require __DIR__.'/autoload.php';

/*
|--------------------------------------------------------------------------
| Run The Console Application
|--------------------------------------------------------------------------
|
| When we run the console application, the current CLI command will be
| executed in this console and the response sent back to a terminal
| or another output device for the developers. Here goes nothing!
|
*/

$container = new class extends LaravelZero\Framework\Container {
    /**
     * @return string
     */
    public function getNamespace(): string
    {
        return 'ResumeCli';
    }
};

(new LaravelZero\Framework\Application($container))->run();
