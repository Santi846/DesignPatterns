
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factory Method</title>
</head>
<body>
<?php 

    interface Transporte {
        public function entrega();
    }

    print_r("Interfaz declarada");
    echo '<br>';

    class Camion implements Transporte {
        public function entrega() {
          echo "Entrega por tierra en una caja";
          echo '<br>';
        }
    }

    class Barco implements Transporte {
        public function entrega() {
          echo "Entrega por mar en un contenedor";
          echo '<br>';
        }
    }

    $barco = new Barco();
    $barco->entrega();

    $camion = new Camion();
    $camion->entrega();
?>
</body>
</html>
