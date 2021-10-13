<?php

declare(strict_types=1);

namespace Abstract;

abstract class Field
{
    public function __construct(protected string $name){}
    abstract public function render(): string;
}

class Text extends Field
{
    public function render(): string
    {
        return <<<HTML
        <input type="text" name="{$this->name}"/>
        HTML;
    }
}

// new Field() Error: abstract class are not instantiable

$t = new Text('name');
var_dump($t);
var_dump($t->render());

