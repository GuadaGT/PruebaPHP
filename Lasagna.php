<?php
    //Establecemos primero la clase.
    class Lasagna 
    {
        //En esta primera función establecemos el tiempo que estará en el horno la lasagna.
        public static function tiempoCocina() 
        {
            return 40;
        }
        //Aquí establecemos una función que nos indique cuánto tiempo le queda en el horno.
        public function tiempoRestante($tiempoActual) 
        {
            $tiempoEsperado = $this->tiempoCocina();
            if ($tiempoActual >= $tiempoEsperado) 
            {
                return 0;
            } 
            else 
            {
                return $tiempoEsperado - $tiempoActual;
            }
        }
        //Establecemos una una función que nos indique el tiempo total de preparación según el número de capas que vaya a tener nuestra lasagna.
        public function tiempoTotalPreparacion($numCapas) 
        {
            return $numCapas * 2;
        }
        //Establecemos una función que indique cuánto tiempo tardaremos en hacer la lasagna entre el tiempo de preparación y el tiempo de cocción.
        public function tiempoTranscurrido($numCapas, $horno) 
        {
            $tiempoPreparacion = $this->tiempoTotalPreparacion($numCapas);
            return $tiempoPreparacion + $horno;
        }
        //Por último establecemos una función que nos indique con una señal que nuestra lasagna esté lista.
        public function alarma() 
        {
            return "Ding!";
        }
    }
    //Establecemos un ejemplo de la clase.
    $tiempo = new Lasagna();
        echo "Tiempo aproximado de cocina: " . $tiempo->tiempoCocina() . "\n";
        echo "Tiempo restante: " . $tiempo->tiempoRestante(30) . "\n";
        echo "Tiempo total de preparación: " . $tiempo->tiempoTotalPreparacion(4) . "\n";
        echo "Tiempo total transcurrido: " . $tiempo->tiempoTranscurrido(5, 20) . "\n";
        echo $tiempo->alarma() . "\n";
?>