@extends('layouts.layout')
@section('title', 'Home')

@section('main')
    <section class="section_home">
        <h1>Olá
            @if (Auth::check())
                {{ auth()->user()->name }}
            @endif
        </h1>
    </section>


    <header class="menu">
      <div class="menu__cabecalho">
          <h1 class="cabechalho__titulo"></h1>
          <!--<h2 class="cabechalho__subtitulo">conheça o mundo B.on</h2>-->
      </div>
    </header>
	
	
    <main class="main">

      <div class="main__arrow">
        <a href="#"><i class="fa-solid fa-arrow-up"></i></a>
      </div>

      <section class="main__icons">
          
          <div style="display: flex;height: 5px;width: 100%;">
              <div style="width: 100%; heigth: 2px; background-color: rgb(22,101,146);"></div>
              <div style="width: 100%; heigth: 2px; background-color: #e0794c;"></div>
          </div>
          
         <div style="text-align:center;margin: 5em 0;">
             <h2 style="font-size: 3em;">BENEFÍCIOS DE SER B.ON</h2>
         </div>

        <div class="icons__divisao">
          <ul class="icons__divisao__ordem">
       <!-- Slider main container -->
        <div class="swiper" style="display: flex;overflow-x: hidden;">
          <!-- Additional required wrapper -->            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          <div class="swiper-wrapper" style="display: flex;">
            <!-- Slides -->
            <div class="swiper-slide">
               <li class="icons__divisao__ordem__lista">
              <img class="icons__divisao__ordem__lista__imagem" src="{{ asset('images/new_imagens/figura-1.png') }}" alt="Figura de Investimento">
              <h2 class="icons__divisao__ordem__lista__titulo">Investimento Inicial Baixo e Sem risco</h2>
            </li>
            </div>
            <div class="swiper-slide">
              <li class="icons__divisao__ordem__lista">
              <img class="icons__divisao__ordem__lista__imagem" src="{{ asset('images/new_imagens/figura-2.png') }}" alt="Figura de Margem de Lucro Inicial de 55%">
              <h2 class="icons__divisao__ordem__lista__titulo">Margem de Lucro Inicial de 55%</h2>
            </li>
            </div>
            <div class="swiper-slide">
            <li class="icons__divisao__ordem__lista">
              <img class="icons__divisao__ordem__lista__imagem" src="{{ asset('images/new_imagens/figura-3.png') }}" alt="Figura de Dropshipping Sua Loja Virtual">
              <h2 class="icons__divisao__ordem__lista__titulo">Dropshipping Sua Loja Virtual</h2>
            </li>
            </div>
            <div class="swiper-slide">
            <li class="icons__divisao__ordem__lista">
              <img class="icons__divisao__ordem__lista__imagem" src="{{ asset('images/new_imagens/figura-4.png') }}" alt="Figura de Faça Seu Horário">
              <h2 class="icons__divisao__ordem__lista__titulo">Faça Seu Horário</h2>
            </li>
            </div>
            <div class="swiper-slide">
            <li class="icons__divisao__ordem__lista">
              <img class="icons__divisao__ordem__lista__imagem" src="{{ asset('images/new_imagens/figura-5.png') }}" alt="Figura de Formar Sua Rede de Distribuidores">
              <h2 class="icons__divisao__ordem__lista__titulo">Formar Sua Rede de Distribuidores</h2>
            </li>
            </div>
            <div class="swiper-slide">
         <li class="icons__divisao__ordem__lista">
              <img class="icons__divisao__ordem__lista__imagem" src="{{ asset('images/new_imagens/figura-6.png') }}" alt="Figura de Ferramentas e Materiais de Apoio">
              <h2 class="icons__divisao__ordem__lista__titulo">Ferramentas e Materiais de Apoio</h2>
            </li>
            </div>
            <div class="swiper-slide">
            <li class="icons__divisao__ordem__lista">
              <img class="icons__divisao__ordem__lista__imagem" src="{{ asset('images/new_imagens/figura-7.png') }}" alt="Figura de Cadastro Instantâneo">
              <h2 class="icons__divisao__ordem__lista__titulo">Cadastro Instantâneo</h2>
            </li>
            </div>
            <div class="swiper-slide">
            <li class="icons__divisao__ordem__lista">
              <img class="icons__divisao__ordem__lista__imagem" src="{{ asset('images/new_imagens/figura-8.png') }}" alt="Figura de Redes Sociais e I.D. Visual Utilizável">
              <h2 class="icons__divisao__ordem__lista__titulo">Redes Sociais e I.D. Visual Utilizável</h2>
            </li>
            </div>
            <div class="swiper-slide">
            <li class="icons__divisao__ordem__lista">
              <img class="icons__divisao__ordem__lista__imagem" src="{{ asset('images/new_imagens/figura-9.png') }}" alt="Figura de Treinamentos">
              <h2 class="icons__divisao__ordem__lista__titulo">Treinamentos</h2>
            </li>
            </div>
            <div class="swiper-slide">
            <li class="icons__divisao__ordem__lista">
              <img class="icons__divisao__ordem__lista__imagem" src="{{ asset('images/new_imagens/figura-10.png') }}" alt="Figura de Incentivos">
              <h2 class="icons__divisao__ordem__lista__titulo">Incentivos</h2>
            </li>
            </div>
            <div class="swiper-slide">
            <li class="icons__divisao__ordem__lista">
              <img class="icons__divisao__ordem__lista__imagem" src="{{ asset('images/new_imagens/figura-13.png') }}" alt="Figura de Universidade Corporativa">
              <h2 class="icons__divisao__ordem__lista__titulo">Universidade Corporativa</h2>
            </li>
            </div>
            <div class="swiper-slide">
            <li class="icons__divisao__ordem__lista">
              <img class="icons__divisao__ordem__lista__imagem" src="{{ asset('images/new_imagens/figura-12.png') }}" alt="Figura de Suporte do Departamento de Marketing B.on">
              <h2 class="icons__divisao__ordem__lista__titulo">Suporte do Departamento de Marketing B.on</h2>
            </li>
            </div>
          </div>
                      <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <!-- If we need pagination -->
          <div class="swiper-pagination"></div>
          </ul>
        </div>

      </section>
      
      	<section>
    	    <div class="_form_3"></div><script src="https://bonoficial.activehosted.com/f/embed.php?id=3" type="text/javascript" charset="utf-8"></script>
    	</section>
	

      <section class="main__tecnologias">
        <div class="tecnologias__container">
          <figure class="tecnologias__container__imagem">
            <img src="{{ asset('images/new_imagens/esquerdo.webp') }}" alt="Modelo escrito Tecnologia Bon Infravermelho Longo">
          </figure>
          <div class="tecnologias__container__link">
            <a href="https://comprebon.com/publico/Distribuidor/DistribuidoresCadastro/formulario" class="tecnologias__container__link__tag">Clique aqui para se cadastrar e saber mais</a>
          </div>
          <figure class="tecnologias__container__imagem">
            <img src="{{ asset('images/new_imagens/direito.webp') }}" alt="Modelo escrito Tecnologia Antiviral">
          </figure>
        </div>
      </section>
      
       <section class="main__conheca">
            <div style="text-align: center; margin: 2em 0;">
              <h1 style="font-size: 3em; text-transform: uppercase;">Conheça a B.on</h1>
            </div>
        <div class="conheca__container">
          <div class="conheca__container__conteudo">
            <p class="conheca__container__conteudo__paragrafo">A B.ON já nasce com a experiência de mais de 20 anos no mercado têxtil do Grupo Rosa Maria Liotto & Cia Ltda especializada em private label no segmento na linha fitness e moda esportiva.</p>
            <p class="conheca__container__conteudo__paragrafo">Localizada no município de Brusque – SC, com um parque fabril de 8.400 m², gerando mais de 150 empregos diretos e 500 indiretos, e capacidade produtiva de 300 mil peças/mês</p>
            <p class="conheca__container__conteudo__paragrafo">Contamos hoje com mais de 1200 distribuidores que representam a B.ON em mais de 14 países, e uma cartela de de mais de 220 referências de produtos produzidos, e qualificados com a qualidade B.ON que transforma a vida de quem os usa.</p>
          </div>
          

          <div class="conheca__container__video">
              
            <video class="conheca__container__video__frame" controls>
                <source src="{{ asset('videos/videoInstitucional.mp4') }}" type="video/mp4">
                Seu navegador Não Suporta o Formato do video
            </video>

          </div>

        </div>
      </section>
      
    <section class="main__perguntas">
        <h2 class="perguntas__titulo">Dúvidas<i class="fa-solid fa-question"></i></h2>
        <div class="perguntas__container">
          <ul class="perguntas__container__ordem">
            <li class="perguntas__container__ordem__lista">
              <button class="perguntas__container__ordem__lista__pergunta">Como faço para me cadastrar na <strong>B.ON</strong> e ser um distruibuidor:</button>
              <p class="perguntas__container__ordem__lista__resposta">Clique no botão: QUERO EMPREENDER, no topo do nosso site. Preencha o formulário com os dados solicitados e selicione um distribuidor mais próximo de você. PRONTO! Você receberá a ligação da Equipe comercial da B.ON, em breve, entrará em contato para passar mais informações e dirimir suas dúvidas.</p>
            </li>
            <li class="perguntas__container__ordem__lista">
              <button class="perguntas__container__ordem__lista__pergunta">Qual a margem de lucro da <strong>B.ON</strong>?</button>
              <p class="perguntas__container__ordem__lista__resposta">Empreendedores B.ON ganham inicialmente 55%. Quando se tornam distribuidor Master, a margem de lucro pode chegar até 148%.</p>
            </li>
            <li class="perguntas__container__ordem__lista">
              <button class="perguntas__container__ordem__lista__pergunta">O que eu preciso para ser um distribuidor <strong>B.ON</strong>? </button>
              <p class="perguntas__container__ordem__lista__resposta">Ser maior de 18 ou emancipado por casamento ou juízo; Ter um CNPJ/MEI; Preencher o cadastro em nosso site; Comprar um kit inicial de R$ 1.500,00.</p>
            </li>
            <li class="perguntas__container__ordem__lista">
              <button class="perguntas__container__ordem__lista__pergunta">Posso comprar para uso próprio ou apenas revender? 
              </button>
              <p class="perguntas__container__ordem__lista__resposta">Todo distribuidor pode comprar os produtos para uso próprio ou para revenda.</p>
            </li>
          </ul>
          <ul class="perguntas__container__ordem">
            <li class="perguntas__container__ordem__lista">
              <button class="perguntas__container__ordem__lista__pergunta">Quanto custa para se tornar um distruibuidor <strong>B.ON</strong>:</button>
              <p class="perguntas__container__ordem__lista__resposta">Para ter todos os benefícios da B.ON, você precisa investir inicialmente R$1.500,00 em produtos B.ON da sua escolha. Esse valor pode ser dividido em até 5x no cartão de crédito.</p>
            </li>
            <li class="perguntas__container__ordem__lista">
              <button class="perguntas__container__ordem__lista__pergunta">Quais são as vantagens em ser um distruibuidor <strong>B.ON</strong>?</button>
              <p class="perguntas__container__ordem__lista__resposta">
                Você poderá ter seu próprio negócio com um baixo investimento. Mais de duzentos produtos que entregam bem-estar para os clientes; A B.ON já é uma empresa consolidada no mercado, estamos presentes em mais de 18 países. Você terá todo suporte para vendas, desde treinamentos semanais on-line até uma plataforma exclusiva de aprendizagem com inúmeros cursos disponíveis</p>
            </li>
            <li class="perguntas__container__ordem__lista">
              <button class="perguntas__container__ordem__lista__pergunta">Já fiz meu cadastro e já falei com um empreendedor. Como faço para fazer minha primeira compra? </button>
              <p class="perguntas__container__ordem__lista__resposta">Seu Kit Inicial pode ser adquirido diretamente na plataforma de compra B.ON: comprebon.com</p>
            </li>
            <li class="perguntas__container__ordem__lista">
              <div class="tecnologias__container__link">
                <a href="https://comprebon.com/publico/Distribuidor/DistribuidoresCadastro/formulario" class="tecnologias__container__link__tag">Clique aqui para se cadastrar e saber mais</a>
              </div>
            </li>
          </ul>
        </div>
      </section>
      
      <section class="main__produtos">
        <div class="produtos__container">

          <div class="produtos__container__catalogo">
            <h3 class="produtos__container__catalogo__titulo">acesse nossa loja <a href="https://comprebon.com/loja/">comprebon.com</a> e conheça todos os nossos produtos</h3>
            <figure class="produtos__container__catalogo__fig">
              <a href="https://comprebon.com/loja/" target="_blank" rel="noopener noreferrer"><img class="produtos__container__catalogo__imagem" src="{{ asset('images/new_imagens/footer-image.webp') }}" alt="Foto da Loja Virtual Bon"></a>
            </figure>
          </div>

          <div class="produtos__container__catalogo produtos__container__borda">
            <h3 class="produtos__container__catalogo__titulo__segundo">Baixe nosso catálogo completo e veja um mundo de produtos <strong class="produtos__container__catalogo__titulo__strong">B.ON</strong> </h3>
            <figure class="produtos__container__catalogo__fig">
              <a href="{{ asset('images/new_imagens/catalogo.pdf') }}" download>
                <img class="produtos__container__catalogo__imagem" src="{{ asset('images/new_imagens/capa.webp') }}" alt="Imagem da capa do catalogo">
              </a>
            </figure>
          </div>
        </div>
      </section> 

    </main>

    <footer class="footer">
      <div class="footer__container">
        <h2 class="footer__container__titulo">b.on - tecnologia de vestir</h2>
        <h3 class="footer__container__subtitulo">todos os direitos reservados</h3>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
      const swiper = new Swiper('.swiper', {
          loop: true,
          slidesPerView: 5,
          breakpoints: {
            1024: {
              slidesPerView: 2,
            },
            1728: {
              slidesPerView: 3,
            },
          },
          pagination: {
              el: '.swiper-pagination',
              type: 'bullets',
          },  navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev',
          },
            observer: true,
          observeParents: true,
      });
      swiper.update();
      
      document.getElementById("_form_3_submit").addEventListener("click", () => {
          document.querySelector(".tecnologias__container").scrollIntoView({
              behavior: "smooth",
          })
      })

        </script>
    <script src="{{ asset('js/script.js') }}"></script> 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    @endsection

</body>
</html>
