# Programação Orientada a Objetos (POO) com PHP

## Conceitos: Classes Abstratas, Herança, Polimorfismo, Interface, Tipos de Relacionamento entre Classes

## Classes Abstratas

Definição: Uma classe abstrata é uma classe que não pode ser instanciada diretamente. Ela serve como um modelo para outras classes e pode conter métodos abstratos (sem implementação) e métodos concretos (com implementação).

### Exemplo em PHP:

```php
<?php
abstract class Animal {
    abstract public function fazerSom(); // Método abstrato

    public function dormir() {
        echo "Dormindo...";
    }
}

class Cachorro extends Animal {
    public function fazerSom() {
        echo "Latindo...";
    }
}

$cachorro = new Cachorro();
$cachorro->fazerSom(); // Saída: Latindo...
$cachorro->dormir(); // Saída: Dormindo...
?>
```

## Herança

Definição: Herança é um mecanismo que permite que uma classe (subclasse) herde atributos e métodos de outra classe (superclasse). Isso promove a reutilização de código e a hierarquia de classes.

### Exemplo em PHP:

```php
<?php
class Veiculo {
    public $marca;

    public function buzinar() {
        echo "Buzinando...";
    }
}

class Carro extends Veiculo {
    public $portas;
}

$carro = new Carro();
$carro->marca = "Toyota";
$carro->portas = 4;
$carro->buzinar(); // Saída: Buzinando...
?>
```

## Polimorfismo

Definição: Polimorfismo permite que objetos de diferentes classes sejam tratados como objetos de uma classe comum. Existem dois tipos principais: polimorfismo de sobrecarga (compile-time) e polimorfismo de substituição (runtime).

### Exemplo em PHP:

```php
<?php
class Animal {
    public function fazerSom() {
        echo "Som genérico...";
    }
}

class Gato extends Animal {
    public function fazerSom() {
        echo "Miando...";
    }
}

$animal = new Gato();
$animal->fazerSom(); // Saída: Miando...
?>
```

## Interface

Definição: Uma interface é um contrato que define um conjunto de métodos que uma classe deve implementar. Diferente das classes abstratas, as interfaces não podem conter implementação de métodos.

### Exemplo em PHP:

```php
<?php
interface Movel {
    public function mover();
}

class Carro implements Movel {
    public function mover() {
        echo "Carro se movendo...";
    }
}

$carro = new Carro();
$carro->mover(); // Saída: Carro se movendo...
?>
```

## Tipos de Relacionamento entre Classes

Definição: Existem vários tipos de relacionamento entre classes, incluindo associação, agregação e composição.

* Associação: Relacionamento onde uma classe está ligada a outra. Pode ser unidirecional ou bidirecional.

    ```php
    <?php
    class Pessoa {
        public $endereco;
    }
    ?>
    ```

* Agregação: Tipo de associação onde uma classe é parte de outra, mas pode existir independentemente.

    ```php
    <?php
    class Departamento {
        public $professores = [];
    }
    ?>
    ```

* Composição: Tipo de associação onde uma classe é parte de outra e não pode existir independentemente.

    ```php
    <?php
    class Carro {
        private $motor;

        public function __construct() {
            $this->motor = new Motor();
        }
    }
    ?>
    ```

# Atividades Práticas

### 1. **Implementar uma classe abstrata**: Crie uma classe abstrata `Forma` com um método abstrato `calcularArea()`. Implemente classes concretas `Circulo` e `Retangulo` que estendem `Forma`.

### 2. **Demonstrar herança**: Crie uma hierarquia de classes com `Veiculo`, `Carro` e `Moto`. Adicione atributos e métodos relevantes.

### 3. **Exemplificar polimorfismo**: Crie uma classe `Animal` com um método `fazerSom()`. Implemente subclasses `Cachorro` e `Gato` que sobrescrevem `fazerSom()`.

### 4. **Utilizar interfaces**: Crie uma interface `Voavel` com um método `voar()`. Implemente a interface em classes `Passaro` e `Aviao`.

### 5. **Relacionamentos entre classes**: Crie exemplos de associação, agregação e composição entre classes `Pessoa`, `Endereco`, `Departamento` e `Professor`.

