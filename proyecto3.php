<html>
	<head>
		<title> Ejemplo de switch </title>
	</head>

	<body>
		Ejemplo de uso de switch
		<br></br>

		<?php 
		  $dia=5;
		  switch ($dia) {
		  	case 1:    //bloque 1
		  	echo "El dia es lunes ";
		  	break;
		        case 2:   //bloque 2
		  	    echo "el dia martes";
		  	    break;
		  	        case 3:   //bloque 3
		  	        echo "el dia miercoles";
		  	        break;
		  	            case 4:   //bloque 4
		  	            echo "el dia jueves";
		  	            break;
		  	                case 5:  //bloque 5
		  	                echo "el dia viernes";
		  	                break;
		  	                    case 6:  //bloque 6
		  	                    echo "el dia sabado";
		  	                    break;
		  	                        case 7: //bloque 7
		  	                        echo "el dia domingo";
		  	                        break; 
		            case 8:   //bloque 8
                         echo "la variable otro valor";
	                        echo "distinto a los dias de la semana";		
		  }
		      	?>



	</body>
</html>