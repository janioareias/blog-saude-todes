// Seletores das imagens
const foto01 = document.querySelector('.foto01');
const foto02 = document.querySelector('.foto02');
const foto03 = document.querySelector('.foto03');

// Função para limpar as imagens
function limparImagens() {
  // Define as imagens padrão para as variáveis imagem1, imagem2 e imagem3
  const imagem1 = 'src/default.jpg';
  const imagem2 = 'src/default.jpg';
  const imagem3 = 'src/default.jpg';

  // Define as imagens padrão para as classes .foto01, .foto02 e .foto03
  foto01.src = imagem1;
  foto02.src = imagem2;
  foto03.src = imagem3;
}

// Adiciona o evento de clique ao botão de limpar
botaoLimpar.addEventListener('click', limparImagens);


window.addEventListener('load', function() {
    var fotos = document.querySelectorAll('.foto01, .foto02, .foto03');
    var novaImagem = document.querySelector('.nova-imagem');
    var novoTitulo = document.querySelector('.novo-titulo');
    var novoTexto = document.querySelector('.novo-texto');
    
    novaImagem.addEventListener('change', function() {
      for (var i = 0; i < fotos.length; i++) {
        fotos[i].src = URL.createObjectURL(novaImagem.files[0]);
      }
    });
    
    novoTitulo.addEventListener('input', function() {
      var titulo = this.value;
      var titulos = document.querySelectorAll('.titulo');
      for (var i = 0; i < titulos.length; i++) {
        titulos[i].textContent = titulo;
      }
    });
    
    novoTexto.addEventListener('input', function() {
      var texto = this.value;
      var textos = document.querySelectorAll('.texto');
      for (var i = 0; i < textos.length; i++) {
        textos[i].textContent = texto;
      }
    });
  });
  
