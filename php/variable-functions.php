<?php



class Foo
{

    public function __construct()
    {
        echo "construct\n";
    }

    function foo(){
        echo "foo\n";
    }

    static function boo(){
        echo "boo\n";
    }

    public function __invoke()
    {
        echo "invoked\n";
    }
}

$c = 'Foo';
$foo = new $c(); // construct
$f = 'foo';
$foo->$f(); // foo
$foo(); // invoked

class Manager{
    public function executeCallable(callable $callable){
        call_user_func($callable);
    }
}

$m = new Manager();
$m->executeCallable(function(){
    echo "hi\n";
}); // hi
$m->executeCallable(array('Foo','boo')); // boo
$m->executeCallable(new Foo()); // construct invoked
$m->executeCallable(new $c()); // construct invoked
$m->executeCallable(array(new $c(), 'foo')); // construct foo
