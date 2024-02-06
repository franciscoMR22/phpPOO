<?php 
    require_once("Operacion.php");
    require_once("OperacionesBasicas.php");

    class Calcular implements Operacion, OperacionesBasicas{ //Colocamos el nombre de la interface
        public function raizCuadrada(float $numero):float{
            $total = sqrt($numero);
            return $total;                                      /*Es similar a una clase abstracta, hay que redefinir en el archivo a ocupar */
        }
        public function potencia(int $numero, int $potencia):int{
            $total = pow($numero,$potencia);
            return $total;
        }

        public function op_basicas(float $cant1, float $cant2, string $operacion):float{
                if($operacion =="+"){
                    $total = $cant1 + $cant2;
                }else if($operacion =="-"){
                    $total = $cant1 - $cant2;
                }else if($operacion =="/"){
                    $total = $cant1 / $cant2;
                }else if($operacion == "*"){
                    $total = $cant1 * $cant2;
                }else{
                    echo "No es válida esa operación";
                }
                return $total;
            }
        }


    ?>