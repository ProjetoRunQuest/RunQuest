//iniciando o swipper
var swiper = new Swiper(".slide-content", {
    slidesPerView: 1,
    spaceBetween: 30,
    slidesPerGroup: 1,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    //Em dispositivos maiores que 800px, essa será a configuração
    breakpoints:{
      800: {
        slidesPerView: 3,
        slidesPerGroup: 1,
      },
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

//Adicionando um botão para redirecionamento
function redirecionar(valor){
  let botao = document.getElementsByClassName('botao-banner');

  if(botao[0].value == valor){
    window.location.href = 'motorista/motorista.php';
  }else{
    window.location.href = 'passageiro/passageiro.php';
  }
}


