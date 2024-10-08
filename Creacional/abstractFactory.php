
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abstract Factory Method</title>
</head>
<body>  
    <h1>Abstract Factory Method</h1>
    <h2>Patrón de diseño creacional</h2>
<?php 
    
    //Definir interfaz de clase, de mueble Silla
    interface Silla {
        public function tienePatas();

        public function sentarse();
    }

    //Definir interfaz de clase, de mueble Mesas
    interface Mesa {
        public function tienePatas();

        public function apoyarCosas();

    }

    //Definir interfaz de clase, de mueble Sofas
    interface Sofa {
    
        public function cantidadPersonas();

        public function sentarse();

    }

    //Instanciar tipos de Sillas

    class SillaArtDeco implements Silla {
        public function tienePatas(){
            
            return "Silla Art Deco, esta silla NO tiene patas";
        }

        public function sentarse(){
            
            return "Silla Art Deco, SI Puedes sentarte";
        }
    }

    class SillaVectoriana implements Silla {
        public function tienePatas(){
            
            return "Silla Vectoriana, esta silla SI tiene patas";
        }

        public function sentarse(){
            
            return "Silla Vectoriana, SI Puedes sentarte";
        }
    }

    class SillaModerna implements Silla {
        public function tienePatas(){
            
            return "Silla Moderna, esta silla NO tiene patas";
        }

        public function sentarse(){
            
            return "Silla Moderna, NO Puedes sentarte";
        }
    }

    //Instanciar tipos de Mesas

    class MesaArtDeco implements Mesa {
        public function tienePatas(){
            
            return "Mesa Art Deco, esta mesa SI tiene patas";
        }

        public function apoyarCosas(){
            
            return true;
        }
    }

    class MesaVectoriana implements Mesa {
        public function tienePatas(){
            
            return "Mesa Vectoriana, esta mesa SI tiene patas";
        }

        public function apoyarCosas(){
            
            return true;
        }
    }

    class MesaModerna implements Mesa {
        public function tienePatas(){
            
            return "Mesa Moderna, esta mesa SI tiene patas";
        }

        public function apoyarCosas(){
            
            return false;
        }
    }

     //Instanciar tipos de Sofas

    class SofaArtDeco implements Sofa {

        public function cantidadPersonas(){
            return "Se pueden sentar" . 3 . "personas";
        }

        public function sentarse(){
            
            return true;
        }
    }

    class SofaVectoriano implements Sofa {
        

        public function cantidadPersonas(){
            return "Se pueden sentar" . 2 . "personas";
        }

        public function sentarse(){
            
            return true;
        }
    }

    class SofaModerno implements Sofa {
        

        public function cantidadPersonas(){
            return "Se pueden sentar" . 1 . "persona";
        }

        public function sentarse(){
            
            return true;
        }
    }

    //Constructor de Muebles
    interface FabricaMuebles {
        public function crearSilla();
        

        public function crearMesa();
        

        public function crearSofa();
        
    }

    class MueblesArtDeco implements FabricaMuebles {
        public function crearSilla(): Silla {
            
            return new SillaArtDeco();
        }

        public function crearMesa(): Mesa{
            
            return new MesaArtDeco();
        }

        public function crearSofa(): Sofa{
            
            return new SofaArtDeco();
        }
    }

    class MueblesVectorianos implements FabricaMuebles {
        public function crearSilla(): Silla {
            
            return new SillaVectoriana();
        }

        public function crearMesa(): Mesa{
            
            return new MesaVectoriana();
        }

        public function crearSofa(): Sofa{
            
            return new SofaVectoriano();
        }
    }

    class MueblesModernos implements FabricaMuebles {
        public function crearSilla(): Silla {
           
            return new SillaModerna();
        }

        public function crearMesa(): Mesa{
            
            return new MesaModerna();
        }

        public function crearSofa(): Sofa{
            
            return new SofaModerno();
        }
    }
    
    $instanciaMuebleArtDeco = new MueblesArtDeco();
    
    $sillaArtDeco = $instanciaMuebleArtDeco->crearSilla();
     
    echo $sillaArtDeco->tienePatas();
    echo '<br>';
    echo $sillaArtDeco->sentarse();


?>
</body>
</html>
