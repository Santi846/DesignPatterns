
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factory Method</title>
</head>
<body>  
    <h1>Factory Method</h1>
    <h2>Patrón de diseño creacional</h2>
<?php 
    
    //definir la interfaz
    interface Transporte {
        public function entrega();
    }

    print_r("Interfaz declarada");

    class Camion implements Transporte {
        public function entrega() {
          echo '<br>';
          return "Entrega por tierra en una caja";
        }
    }

    class Barco implements Transporte {
        public function entrega() {
          echo '<br>';
          return "Entrega por mar en un contenedor";
        }
    }

    //Constructor de clases, a partir de interfaces
    abstract class FabricaTransporte {
        abstract public function crearTransporte(): Transporte;
    }

    //Constructor de instancia, de cada clase, validada por interfaz
    class FrabricaBarco extends FabricaTransporte {
        //generar nueva instancia de interfaz
        public function crearTransporte(): Transporte {
            //generar nueva instancia de clase, a partir de interfaz
            return new Barco();
        }
    }

    class FabricaCamion extends FabricaTransporte {
        public function crearTransporte(): Transporte {
            return new Camion();
        }
    }

    //Dejar en una variable la generacion del constructor la validacion de interfaz
    $instanciaBarco = new FrabricaBarco();
    //Generar una nueva clase, previamente validada contra la interfaz
    $barco1 = $instanciaBarco->crearTransporte();
    //Llamar al metodo de individual de la clase instanciada
    echo $barco1->entrega(); 

    $instanciaCamion = new FabricaCamion();
    $camion1 = $instanciaCamion->crearTransporte();
    echo $camion1->entrega();   

?>
</body>
</html>
