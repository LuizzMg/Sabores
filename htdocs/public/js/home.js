function calcular() {
       
        let a = parseFloat(document.getElementById('valor_a').value);
        let b = parseFloat(document.getElementById('valor_b').value);
        let sinal = document.getElementById('sinal').value;
        resultado = "";

        if (isNaN(a) || isNaN(b)) {
        resultado = "Insira os valores";

        }else {
          if(sinal === "+") {
            resultado = a+b;
          } else {
            if(sinal === "-"){
              resultado = a-b;
            } else {
              if(sinal === "*"){
                resultado = a*b;
              } else {
                if(sinal = "/" && b === 0 || a === 0){
                  resultado = "Não existe divisão por 0";
                } else {
                  resultado = a/b;
                }
              }
            }
          }
        }

         if(resultado === 67) {
            resultado = "Aura!";
           } else {
            resultado = resultado;
           }

        document.getElementById('saida').innerHTML = resultado;
    }