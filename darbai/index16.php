<?php

$ceu = array( "Italija"=>"Roma", 
             "Liuksemburgas"=>"Liuksemburgas", 
             "Belgija"=> "Briuselis", 
             "Danija"=>"Kopenhaga", 
             "Suomija"=>"Helsinkis", 
             "Prancūzija" => "Paryžius", 
             "Slovakija"=>"Bratislava", 
             "Slovenija"=>"Liublijana", 
             "Vokietija" => "Berlynas", 
             "Graikija" => "Atėnai", 
             "Airija"=>"Dublinas", 
             "Nyderlandai"=>"Amsterdamas", 
             "Portugalija"=>"Lisabona", 
             "Ispanija"=>"Madridas", 
             "Švedija"=>"Stokholmas", 
             "Didžioji Britanija"=>"Londonas", 
             "Kipras"=>"Nikosija", 
             "Lietuva"=>"Vilnius", 
             "Čekija"=>"Praha", 
             "Estija"=>"Talinas", 
             "Vengrija"=>"Budapeštas", 
             "Latvija"=>"Ryga", 
             "Malta"=>"Valeta", 
             "Austrija" => "Viena", 
             "Bulgarija" => "Sofija", 
             "Rumunija" => "Bukareštas", 
             "Lenkija"=>"Varšuva") ;
arsort($ceu);

foreach ($ceu as $country => $capital){
    echo "$country &nbsp" . $capital;
    echo "<br>";
}
echo "<br>";

foreach ($ceu as $country => $capital) {
    echo "$country - $capital<br>";
}

?>