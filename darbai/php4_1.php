<?php

class zmogus {
    
    public $vardas;
    public $pavarde;
    
    public function pasisveikinimas1() {
        return 'Labas, aš esu ' . $this -> vardas . ' ' . $this -> pavarde . '<br>';
    }
        
    public function pasisveikinimas2() {
        return 'Sveikutis, aš esu ' . $this -> vardas . ' ' . $this -> pavarde . '<br>';
    }
}

$Jonas = new zmogus();
$Petras = new zmogus();

$Jonas -> vardas = "Jonas";
$Jonas -> pavarde ="Jonaitis";

$Petras -> vardas = "Petras";
$Petras -> pavarde = "Petraitis";

echo $Jonas -> pasisveikinimas1();
echo $Petras -> pasisveikinimas2();

?>