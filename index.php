<?php

interface IComponent
{
    public function operation();
}

class ConcreteComponent implements IComponent
{
    public function operation()
    {
        echo "Operation";
    }
}

abstract class Decorator  implements IComponent
{
    protected $component;
    public function __construct(IComponent $component)
    {
        $this->component=$component;
    }
    public abstract function operation();
}

class ConcreteDecoratorA extends Decorator
{
    public function __construct(IComponent $component)
    {
        parent::__construct($component);
    }
    public function operation()
    {
        $this->component->operation();
        echo 'Concrete decorator A';
    }
}

class ConcreteDecoratorB extends Decorator
{
    public function __construct(IComponent $component)
    {
        parent::__construct($component);
    }
    public function operation()
    {
        $this->component->operation();
        echo 'Concrete decorator B';
    }
}

        $component = new ConcreteComponent();
        $component->operation();
        echo "\n";
        $decoratorA = new ConcreteDecoratorA($component);
        $decoratorA->operation();
        echo "\n";
        $decoratorB = new ConcreteDecoratorB($component);
        $decoratorB->operation();
