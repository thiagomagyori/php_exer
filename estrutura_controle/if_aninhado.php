<?php


//nessa forma ele ex os 2 if se as 2 comparação der true



if (10 > 6) {
 echo "entrou no primeiro if pq deu true <br>";


 if (2 > 1) {
 echo "entrou no segundo if pq deu true";
 }

}

echo"<br>";
echo"<br>";




//vale se atentar é que se o primeiro if der false e o segundo der true ele não entra no segundo 
//pq primeiro ele checa o primeiro se é true
if (10 > 6) { //true
    echo "entrou no terceiro if pq deu true <br>";//entra
   
   //false
    if (2 > 5) {
    echo "entrou no terceiro if pq deu true";// não entra
    }
   
   }

   echo"<br>";
   echo"<br>";

   if (10 > 6) { //true
    echo "entrou no terceiro if pq deu true <br>";//entra
   
   //false
    if (2 > 5) {
    echo "entrou no terceiro if pq deu true";// não entra
    }else 
    {
        echo "entrou no else 2";
    }
   
   }


   echo"<br>";
   echo"<br>";



   if (10 > 16) { //true
    echo "entrou no terceiro if pq deu true <br>";//entra
   
   //false
    if (25 > 5) {
    echo "entrou no terceiro if pq deu true";// não entra
    }else 
    {
        echo "entrou no else 2";
    }
   
   }else {
    echo "entrou no else 1";// só vai ex isso pois o primeiro if deu false ai vem e cai no else dele msm
   }


   echo"<br>";
   echo"<br>";


   //VALE LEMBAR QUE O ESCOPO GLOBAL VALE PARA IF ANINHADO 
   // variaveis declaradas fora do if aninhado vão ser enchergadas dentro dele
   
   
   // ex de if aninhado

$a = 10; // int
$b = 80.2; // float
$c = "teste"; // string

                //ou
if (is_float ($a) || is_int ($a)) {

$mult = $a * 30; // crio uma variavel somo $a x 30 = 300

if($mult > 200) { // se mult for maior que 200 imprima isso
    echo "a variavel mult é maior que 200 valor dela: $mult";
}else {
    echo "o numero não é maior que 200";
}

}else 
{
    echo "Não é um numero!"; //caso a variavel seja uma string vai imprimir isso
}


echo"<br>";
echo"<br>";

                //ou
                if (is_float ($a) || is_int ($a)) {

                    $mult = $a * 2; // crio uma variavel somo $a x 30 = 300
                    
                    if($mult > 200) { // se mult for maior que 200 imprima isso
                        echo "a variavel mult é maior que 200 valor dela: $mult";
                    }else {
                        echo "o numero não é maior que 200";
                    }
                    
                    }else 
                    {
                        echo "Não é um numero!"; //caso a variavel seja uma string vai imprimir isso
                    }



                    echo"<br>";
                    echo"<br>";
                    
                                    //ou
                                    if (is_float ($c) || is_int ($c)) {
                    
                                        $mult = $c * 2; // crio uma variavel somo $a x 30 = 300
                                        
                                        if($mult > 200) { // se mult for maior que 200 imprima isso
                                            echo "a variavel mult é maior que 200 valor dela: $mult";
                                        }else {
                                            echo "o numero não é maior que 200";
                                        }
                                        
                                        }else 
                                        {
                                            echo "Não é um numero!"; //caso a variavel seja uma string vai imprimir isso
                                        }
                    




















?>