
//Quando coloco height 100%, não funciona por algum motivo, portanto:
hero = $(".hero-capa");
alturaDaTela =  (screen.height * 0.85) + "px";

hero.css("height", alturaDaTela);


//hover effect
capa = $(".capa");
capa.hover(function(){
  $(this).addClass("efeito-hover");
}, function(){
  $(this).removeClass("efeito-hover");
});
