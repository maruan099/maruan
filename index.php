<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        class mecanica {
            
        // El constructor
            public function __construct($pieza,$precio){
                $this->pieza =$pieza;
                $this->precio =$precio;
            }            
        //Metodes

            public function getPrecio(){

        // Retornem el atribut preu
                return $this->precio;
            }
            
           public function getPieza(){

        // Retornem el atribut pieza
                return $this->pieza;
            }	            
            
           public function getInfo(){

        // Retornem informació
                return $this->info;
            }	       
            
           public function Fantasma(){
            }	              
        } 
        ?>
    </body>
</html>
