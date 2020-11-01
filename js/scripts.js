function exibirCategoria(categoria) {
    let elementos = document.getElementsByClassName('box_produto');
    console.log(elementos);
    for (var i = 0; i < elementos.length; i++) {
        console.log(elementos[i].id);
        if (categoria == elementos[i].id) {
            elementos[i].style = "display:block";
        } else {
            elementos[i].style = "display:none";
        }

    }
}

let exibirTodos = () => {
    let elementos = document.getElementsByClassName('box_produto');

    for (var i = 0; i < elementos.length; i++) {
        elementos[i].style = "display:block";
    }
};


let destaque = (imagem) => {
    //console.log(imagem);
    if (imagem.width == 150) {
        imagem.width = 200;
    } else {
        imagem.width = 150;
    }

};

function carregar_saudacao(){
    data = new Date();
    hora = data.getHours();

    if(hora < 12){
      document.getElementById("msg_abertura").innerHTML = "Bom dia!!! Seja Bem vindo(a)";
    } else if(hora < 18){
      document.getElementById("msg_abertura").innerHTML = "Boa tarde!!! Seja Bem vindo(a)";
    } else{
      document.getElementById("msg_abertura").innerHTML = "Boa noite!!! Seja Bem vindo(a)";
    }
  }