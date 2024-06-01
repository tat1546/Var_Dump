@extends('site.layout')

@section('conteudo')
  <div class="container-fluid text-center">
    <nav class="navbar navbar-expand-lg navbar-custom w-100">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">CHOCOTEST</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{ route('site.home') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('site.somos') }}">Quem Somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('site.contato') }}">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <div id="carouselExampleCaptions" class="carousel slide w-100">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('img/algo.jpg') }}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Chocolates</h5>
            <p>Avaliando alguns chocolates que já provei.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ asset('img/choc.jpg') }}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Chocolates</h5>
           
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <br><br><br>
    
    <div class="container text-center mt-4">
      <div class="row align-items-center">
        <div class="col-md-6">
          <p class="text-justify Descubra titulo">Dreams - Mil folhas</p>
          <p class="text-justify gray-text">o Dreams Mil Folhas. Esta novidade é uma combinação perfeita entre o sabor refinado do chocolate e a delicadeza do tradicional mil folhas francês. Com camadas finas e crocantes de massa folhada, intercaladas por um delicioso creme, tudo envolvido por uma generosa cobertura de chocolate ao leite da melhor qualidade, o Dreams Mil Folhas promete proporcionar uma experiência única e inesquecível. É o presente ideal para quem deseja se deliciar com um doce sofisticado e irresistível, transformando qualquer momento em uma ocasião especial.</p>
          
        </div>
        <div class="col-md-6">
          <img src="{{ asset('img/cacau2.jpg') }}" alt="Descrição da Imagem" class="img-fluid rounded" width="400">
        </div>
      </div>
    </div>
    <br>
    <div class="container text-center mt-4">
      <div class="row align-items-center">
        <div class="col-md-6">
        <img src="{{ asset('img/cacau3.jpg') }}" alt="Descrição da Imagem" class="img-fluid rounded" width="400">
        </div>
        <div class="col-md-6">
        <p class="text-justify Descubra titulo">Hershey's - Cappuccino</p>
          <p class="text-justify gray-text">Hershey's Cappuccino é uma deliciosa combinação do sabor tradicional do chocolate Hershey's com o toque suave e aromático do cappuccino. Este produto oferece uma experiência única e sofisticada, perfeita para os amantes de café e chocolate. A cremosidade do chocolate se mistura harmoniosamente com o sabor marcante do cappuccino, criando uma explosão de sabores a cada mordida. Ideal para uma pausa no meio do dia ou para acompanhar um momento relaxante, o Hershey's Cappuccino é uma opção irresistível para quem busca um doce diferenciado e saboroso. </p>
          
        
        </div>
      </div>
    </div>
    <br>
    <div class="container text-center mt-4">
      <div class="row align-items-center">
        <div class="col-md-6">
          <p class="text-justify Descubra titulo">Hershey's - Special Dark</p>
          <p class="text-justify gray-text">Hershey's Special Dark é a escolha perfeita para os amantes de chocolate que apreciam um sabor mais intenso e sofisticado. Feito com chocolate meio amargo de alta qualidade, o Hershey's Special Dark proporciona uma experiência rica e marcante, destacando as notas profundas do cacau. Este chocolate é conhecido por seu equilíbrio entre a doçura e a intensidade, oferecendo um prazer único a cada pedaço. O Hershey's Special Dark é versátil e satisfaz até os paladares mais exigentes. </p>
         
        </div>
        <div class="col-md-6">
          <img src="{{ asset('img/cacau4.jpg') }}" alt="Descrição da Imagem" class="img-fluid rounded" width="400">
        </div>
      </div>
    </div>

    <br><br><br><br>

    @endsection