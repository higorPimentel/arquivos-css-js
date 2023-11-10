
function acessa_segundo_elemento_arry() {

/*
exemplo HTML
<div style="padding: 15px 0 0 0;" class="imgs">
        <img src="https://www.planura.mg.leg.br/imagens/teste.jpg/image">
        <img src="https://img.freepik.com/fotos-gratis/conceito-de-ciberespaco-manual-do-webinar-de-links-de-seo_53876-124928.jpg">
</div>
*/  

    // ALTERA O ATRIBUTO SRC DE IMAGEM DO PRIMEIRO BLOCO, SELECIONANDO PELO ELEMENTO DO ARRAY
        
    containerImg = document.getElementsByClassName('imgs');

    primBlocoImg =  containerImg[0].querySelector('img:nth-child(2)');
    primBlocoImg.src = 'https://img.freepik.com/free-photo/transparent-glass-bubble-with-like-icon-inside-it-isolated-transparent-background_125540-4147.jpg?t=st=1699645006~exp=1699645606~hmac=92018a534beadcbf5ad2eac08e48846f7ec68e4a1b27c00ab652e2f948e5682a'

   

}