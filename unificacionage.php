<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Principal Edad</title>
</head>
<body>

<div class="tittle">
    <h2>Ingresa una edad! (1-120).</h2>
    <h4>Pero antes selecciona una condicional</h4>
    <h3>1: IF <br> 2: Switch Case</h3>
</div>

<div class="formu">
    <form name="formularioEdad" method="post" action="<?php echo $_SERVER['PHP_SELF']?>">

        <br/>
        
        Introduzca el condicional: <input type="text" name="opcion" value="">
        
        <br/> <br/>
        
        Introduzca la edad: <input type="text" name="age" value="">
        
        <br/><br/>
        
        <input value="Enviar" type="submit" name="submit"/>
        
    </form>
    </div>

    <div class="Resultado">

    <?php

if(isset($_POST['submit'])){
$opcion = $_POST['opcion'];
$age = $_POST['age'];

//$edad = 110;
if($opcion ==1){

    echo"<p>Elegiste la opcion 1 If elseif Correctamente!.</p>";
    $edad=$age;
if ($edad == 1){
    print "Eres un BEBE!";
}
elseif (($edad >= 2 ) and ($edad <= 12 )){
     echo "Eres un NIÑO!";
}
elseif (($edad >= 13 ) and ($edad <= 17)){
    echo "Eres un Adolescente!";
}
elseif (($edad >= 18) and $edad <= 64){
    echo "Eres un ADULTO!";
}
elseif ($edad >= 65 and $edad <= 90){
    echo "Eres un ANCIANO!";
}
elseif ($edad >= 91 and $edad <= 120){
    echo "Eres una LEYENDA!";
}elseif ($edad >120){
    echo "Fuera del RANGO!.";
}
}
elseif($opcion==2){

    echo "<br/> Elegiste la opcion 2 Switch Case Correctamente!." . "<br><br>";

    switch ($age) {
        case 0:
            echo "No EXISTES";
            break;
        case 1:
            echo "Eres un BEBE!";
            break;
        case 2:
            echo "Eres un NIÑO";
            break;
        case 3:
            echo "Eres un NIÑO";
            break; 
        case 4:
            echo "Eres un NIÑO";
            break;
        case 5:
            echo "Eres un NIÑO";
            break;
        case 6:
            echo "Eres un NIÑO";
            break;
        case 7:
            echo "Eres un NIÑO";
            break;
        case 8:
            echo "Eres un NIÑO";
            break;
        case 9:
            echo "Eres un NIÑO";
            break;       
        case 10:
            echo "Eres un NIÑO";
            break;
        case 11:
            echo "Eres un NIÑO";
            break;
        case 12:
            echo "Eres un ADOLESCENTE!";
            break;
        case 13:
            echo "Eres un ADOLESCENTE!!";
            break;
        case 14:
            echo "Eres un ADOLESCENTE!";
            break;
        case 15:
            echo "Eres un ADOLESCENTE!";
            break; 
        case 16:
            echo "Eres un ADOLESCENTE!";
            break;
        case 17:
            echo "Eres un ADOLESCENTE!";
            break;
        case 18:
            echo "Eres un ADULTO!";
            break;
        case 19:
            echo "Eres un ADULTO!";
            break;
        case 20:
            echo "Eres un ADULTO!";
            break;
        case 21:
            echo "Eres un ADULTO!";
            break;       
        case 22:
            echo "Eres un ADULTO!";
            break;
        case 23:
            echo "Eres un ADULTO!";
            break;
        case 24:
            echo "Eres un ADULTO!";
            break;
    
        case 25:
            echo "Eres un ADULTO!!";
            break;
        case 26:
            echo "Eres un ADULTO!";
            break;
        case 27:
            echo "Eres un ADULTO!";
            break; 
        case 28:
            echo "Eres un ADULTO!";
            break;
        case 29:
            echo "Eres un ADULTO!";
            break;
        case 30:
            echo "Eres un ADULTO!";
            break;
        case 31:
            echo "Eres un ADULTO!";
            break;
        case 32:
            echo "Eres un ADULTO!";
            break;
        case 33:
            echo "Eres un ADULTO!";
            break;       
        case 34:
            echo "Eres un ADULTO!";
            break;
        case 35:
            echo "Eres un ADULTO!";
            break;
        case 36:
            echo "Eres un ADULTO!";
            break;
        case 37:
            echo "Eres un ADULTO!!";
            break;
        case 38:
            echo "Eres un ADULTO!";
            break;
        case 39:
            echo "Eres un ADULTO!";
            break; 
        case 40:
            echo "Eres un ADULTO!";
            break;
        case 41:
            echo "Eres un ADULTO!";
            break;
        case 42:
            echo "Eres un ADULTO!";
            break;
        case 43:
            echo "Eres un ADULTO!";
            break;
        case 44:
            echo "Eres un ADULTO!";
            break;
        case 45:
            echo "Eres un ADULTO!";
            break;       
        case 46:
            echo "Eres un ADULTO!";
            break;
        case 47:
            echo "Eres un ADULTO!";
            break;
        case 48:
            echo "Eres un ADULTO!";
            break;
        case 49:
            echo "Eres un ADULTO!!";
            break;
        case 50:
            echo "Eres un ADULTO!";
            break;
        case 51:
            echo "Eres un ADULTO!";
            break; 
        case 52:
            echo "Eres un ADULTO!";
            break;
        case 53:
            echo "Eres un ADULTO!";
            break;
        case 54:
            echo "Eres un ADULTO!";
            break;
        case 55:
            echo "Eres un ADULTO!";
            break;
        case 56:
            echo "Eres un ADULTO!";
            break;
        case 57:
            echo "Eres un ADULTO!";
            break;       
        case 58:
            echo "Eres un ADULTO!";
            break;
        case 59:
            echo "Eres un ADULTO!";
            break;
        case 60:
            echo "Eres un ADULTO!";
            break;
        case 61:
            echo "Eres un ADULTO!!";
            break;
        case 62:
            echo "Eres un ADULTO!";
            break;
        case 63:
            echo "Eres un ADULTO!";
            break; 
        case 64:
            echo "Eres un ADULTO!";
            break;
        case 65:
            echo "Eres un ADULTO!";
            break;
        case 66:
            echo "Eres un ANCIANO!";
            break;
        case 67:
            echo "Eres un ANCIANO!";
            break;
        case 68:
            echo "Eres un ANCIANO!";
            break;
        case 69:
            echo "Eres un ANCIANO!";
            break;       
        case 70:
            echo "Eres un ANCIANO!";
            break;
        case 71:
            echo "Eres un ANCIANO!";
            break;
        case 72:
            echo "Eres un ANCIANO!";
            break;
        case 73:
            echo "Eres un ANCIANO!";
            break;       
        case 74:
            echo "Eres un ANCIANO!";
            break;
        case 75:
            echo "Eres un ANCIANO!";
            break;
        case 76:
            echo "Eres un ANCIANO!";
            break;
        case 77:
            echo "Eres un ANCIANO!!";
            break;
        case 78:
            echo "Eres un ANCIANO!";
            break;
        case 79:
            echo "Eres un ANCIANO!";
            break; 
        case 80:
            echo "Eres un ANCIANO!";
            break;
        case 81:
            echo "Eres un ANCIANO!";
            break;
        case 82:
            echo "Eres un ANCIANO!";
            break;
        case 83:
            echo "Eres un ANCIANO!";
            break;
        case 84:
            echo "Eres un ANCIANO!";
            break;
        case 85:
            echo "Eres un ANCIANO!";
            break;       
        case 86:
            echo "Eres un ANCIANO!";
            break;
        case 87:
            echo "Eres un ANCIANO!";
            break;
        case 88:
            echo "Eres un ANCIANO!";
            break;
        case 89:
            echo "Eres un ANCIANO!";
            break;
        case 90:
            echo "Eres un ANCIANO!";
            break;
        case 91:
            echo "Eres una LEYENDA!";
            break; 
        case 92:
            echo "Eres una LEYENDA!";
            break;
        case 93:
            echo "Eres una LEYENDA!";
            break;
        case 94:
            echo "Eres una LEYENDA!";
            break;
        case 9:
            echo "Eres una LEYENDA!";
            break;
        case 96:
            echo "Eres una LEYENDA!";
            break;
        case 97:
            echo "Eres una LEYENDA!";
            break;       
        case 98:
            echo "Eres una LEYENDA!";
            break;
        case 99:
            echo "Eres una LEYENDA!";
            break;
        case 100:
            echo "Eres una LEYENDA!";
            break;
        case 101:
            echo "Eres una LEYENDA!";
            break;
        case 102:
            echo "Eres una LEYENDA!";
            break;
        case 103:
            echo "Eres una LEYENDA!";
            break; 
        case 104:
            echo "Eres una LEYENDA!";
            break;
        case 109:
            echo "Eres una LEYENDA!";
            break;
        case 110:
            echo "Eres una LEYENDA!";
            break;
        case 107:
            echo "Eres una LEYENDA!";
            break;
        case 108:
            echo "Eres una LEYENDA!";
            break;
        case 109:
            echo "Eres una LEYENDA!";
            break;       
        case 110:
            echo "Eres una LEYENDA!";
            break;
        case 111:
            echo "Eres una LEYENDA!";
            break;
        case 112:
            echo "Eres una LEYENDA!";
            break;
        case 113:
            echo "Eres una LEYENDA!";
            break;
        case 114:
            echo "Eres una LEYENDA!";
            break;
        case 115:
            echo "Eres una LEYENDA!";
            break;
        case 116:
            echo "Eres una LEYENDA!";
            break;
        case 117:
            echo "Eres una LEYENDA!";
            break;       
        case 118:
            echo "Eres una LEYENDA!";
            break;
        case 119:
            echo "Eres una LEYENDA!";
            break;
        case 120:
            echo "Eres una LEYENDA!";
            break;
    
            
        default:
            echo "Fuera del Rango!";
    }
    
}else{
    echo "<br/> Solo se admiten los numeros 1 y 2 en CONDICIONAL!";
}
}
?>

    </div>
</body>
</html>
