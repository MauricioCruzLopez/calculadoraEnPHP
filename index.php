<?php
class calculadora{
    public function suma($numeroUno,$numeroDos){
        return $numeroUno + $numeroDos;
    }
    public function resta($numeroUno,$numeroDos){
        $resultadoDeLaOperacion=$numeroUno - $numeroDos;
        return $numeroUno - $numeroDos;
    }
    public function multiplicacion($numeroUno,$numeroDos){
        return $numeroUno * $numeroDos;
    }
    public function dividir($numeroUno,$numeroDos){
            return $numeroUno / $numeroDos;
        return "mathError";
    }
    public function cuadrado($numeroUno){
        return $numeroUno * $numeroUno;
    }

    public function evaluarDatosSiEstanBienONo($operacion,$numeroUno,$numeroDos){
        if (!$numeroUno==null && !$numeroDos==null && !$operacion==null) return true;
        return false;
        if ($operacion === "div" && $numeroDos == 0) return false;
    }
    public function calculaSegunLaOperacion($operacion,$numeroUno,$numeroDos){
        if ($operacion === "sum") return "El resultado de $numeroUno + $numeroDos = " . $this->suma($numeroUno,$numeroDos);
        if ($operacion === "rest") return "El resultado de $numeroUno - $numeroDos = " . $this->resta($numeroUno,$numeroDos);
        if ($operacion === "mul") return "El resultado de $numeroUno x $numeroDos = " . $this->multiplicacion($numeroUno,$numeroDos);
        if ($operacion === "div") return "El resultado de $numeroUno / $numeroDos = " . $this->dividir($numeroUno,$numeroDos);
        if ($operacion === "cuad") return "El resultado de $numeroUno^2 = " . $this->cuadrado($numeroUno);
    }
    public function calculadora($operacion,$numeroUno,$numeroDos){
        if ($this->evaluarDatosSiEstanBienONo($operacion,$numeroUno,$numeroDos)) return $this->calculaSegunLaOperacion($operacion,$numeroUno,$numeroDos);
        return "Datos en la url están mal o nulos"; 
    }
}

$numeroUno = $_GET["numer1"];
$numeroDos = $_GET["numer2"];
$operacion = $_GET["operacion"];

$operacion1 = new calculadora();
echo $operacion1->calculadora($operacion,$numeroUno,$numeroDos);
