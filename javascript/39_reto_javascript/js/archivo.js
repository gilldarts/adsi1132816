window.addEventListener('load', inicio, false);

    function numAleatorio (min, max) {
      var numero = Math.floor(Math.random() * (max - min + 1) + min);
      return numero;
    }

    function inicio () 
    {
      document.getElementById('opcionUsuario').addEventListener('change', seleccion, false);
      document.getElementById('reglas').addEventListener('click', reglas, false);
    }

    function seleccion () 
    {
      var opcionUsuario = document.getElementById('opcionUsuario');
      var opciones = ["Piedra", "Papel", "Tijera"];


      var ganador;
      var opcionMaquina = numAleatorio(0, 2);
      var opcionUsuario = opcionUsuario.value;
      
      if(opciones[opcionUsuario] == opciones[opcionMaquina]) 
      { 
        ganador = "Empate!"; 
        var puntos = parseInt(document.getElementById('empate').innerHTML);
        puntos += parseInt(1);
        document.getElementById('empate').innerHTML = puntos;
      }else
      { 
        if( (opciones[opcionUsuario] == opciones[0] && opciones[opcionMaquina] == opciones[2]) || 

          (opciones[opcionUsuario] == opciones[1] && opciones[opcionMaquina] == opciones[0]) ||  

          (opciones[opcionUsuario] == opciones[2] && opciones[opcionMaquina] == opciones[1]))
        {
          ganador = "Ganaste!";
          var puntos = parseInt(document.getElementById('usuario').innerHTML);
          puntos += parseInt(1);
          document.getElementById('usuario').innerHTML = puntos;
        }
        else
        {
          ganador = "Perdiste! :(";
          var puntos = parseInt(document.getElementById('maquina').innerHTML);
          puntos += parseInt(1);
          document.getElementById('maquina').innerHTML = puntos;
        }
      } 

      var resultado = document.getElementById('resultado');
      resultado.innerHTML = "<b class='ganador'>"      +ganador+ "</b><br />" + 
                  "<b>Elegiste: </b>"        +opciones[opcionUsuario]+ "<br />" + 
                  "<b>La máquina eligio: </b>" +opciones[opcionMaquina];

      /*copiar el text del option hacia el text del label*/ 
      var select = document.getElementById('opcionUsuario');
      document.getElementById('label').innerHTML = select.options[select.selectedIndex].text;
    }

    function reglas () 
    {
      alert("Reglas para jugar: \n 1. Tijeras cortan papel \n 2. Papel tapa a piedra \n 3. Piedra aplasta a tijeras"); 
    }