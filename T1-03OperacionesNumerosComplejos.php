<?php
class Complex {
    public $real;
    public $imag;

    function __construct($r, $i) {
        $this->real = $r;
        $this->imag = $i;
    }

    function __toString() {
        $signo = ($this->imag < 0) ? '' : '+';
        return "{$this->real}{$signo}{$this->imag}i";
    }

    function suma($z) {
        return new Complex($this->real + $z->real, $this->imag + $z->imag);
    }

    function resta($z) {
        return new Complex($this->real - $z->real, $this->imag - $z->imag);
    }

    function multiplicar($z) {
        $re = $this->real * $z->real - $this->imag * $z->imag;
        $im = $this->real * $z->imag + $this->imag * $z->real;
        return new Complex($re, $im);
    }

    function dividir($z) {
        $den = pow($z->real, 2) + pow($z->imag, 2);
        if ($den == 0) return 'Indefinida (división por cero)';
        $re = ($this->real * $z->real + $this->imag * $z->imag) / $den;
        $im = ($this->imag * $z->real - $this->real * $z->imag) / $den;
        return new Complex(round($re, 2), round($im, 2));
    }
}

function operacionesComplejosHTML($a, $b) {
    echo "<h4>3. Operaciones con números complejos</h4>";
    echo "<p><strong>Valores asignados:</strong> a = $a, b = $b</p>";
    echo "<h4>— Procedimiento —</h4>";
    echo "<p>
    <strong>a</strong> y <strong>b</strong> son números complejos con parte real e imaginaria.<br>
    Se aplican las fórmulas específicas para suma, resta, multiplicación y división.<br>
    En la división se racionaliza utilizando el conjugado de b en el denominador.
    </p>";

    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<thead><tr><th>Operación</th><th>Expresión</th><th>Resultado</th></tr></thead><tbody>";

    $suma = $a->suma($b);
    echo "<tr><td>Suma (a + b)</td><td>($a) + ($b)</td><td>$suma</td></tr>";

    $resta = $a->resta($b);
    echo "<tr><td>Resta (a - b)</td><td>($a) − ($b)</td><td>$resta</td></tr>";

    $producto = $a->multiplicar($b);
    echo "<tr><td>Multiplicación (a × b)</td><td>($a) × ($b)</td><td>$producto</td></tr>";

    $division = $a->dividir($b);
    echo "<tr><td>División (a ÷ b)</td><td>($a) ÷ ($b)</td><td>$division</td></tr>";

    echo "</tbody></table>";
}
// a = 3 + 2i  y para b = 1 − 4i
operacionesComplejosHTML(new Complex(3, 2), new Complex(1, -4));
?>
