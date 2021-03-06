**Внедрение зависимостей** (англ. **Dependency Injection, DI**) - процесс предоставления внешней зависимости программному компоненту.
Является специфичной формой "инверсии управления" (англ. **Inversion of control, IoC**), когда она применяется к управлению
зависимостями.

На самом деле этот шаблон мы уже использовали в наших примерах. Мы объявляли зависимость класса,
через типизирование аргумента конструктора:

    class MySuperClass
    {
        private $myClass;
        
        public function __construct(MyClass $class)
        {
            $this->myClass = $class;
        }
    }

Если Класс использует некоторый набор параметров настроек, которые могут меняться, и его работа зависит от этих
параметров, то они должны устанавливаться не в классе, а за его пределами.
Таким образом каждый раз при изменении параметров настроек, Вы не должны лезть в код класса, чтобы изменить их.

Если посмотреть в тест, мы увидим что мы тестируем только класс **`Worker`**. Он зависит от интерфейса **`BurgerInterface`**.
Если бы мы за хардкодили зависимость прямо в конструкторе:

    public function __construct()
    {
        $this->myClass = new MyClass();
    }

Для тестирования нам нужно:
* реализовать интерфейс;
* протестировать класс реализации;
* протестировать класс Worker.

Так как мы используем **DI** мы можем просто замокать объект типа **`BurgerInterface`**. Это даст нам уверенность
в работоспособности именно нашего класса **`Worker`**, без каких либо других.