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
          <img src="{{ asset('img/somos.jpg') }}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Chocolates</h5>
            <p>Descubra um pouco mais sobre a nossa história.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ asset('img/fabrica.jpg') }}" class="d-block w-100" alt="...">
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
        <div class="col-md-10 offset-md-1">
          <p class="text-justify Descubra titulo2">CHOCOTEST - Empresa Fictícia</p>
          <p class="text-justify gray-text">A ChocoTest é uma empresa inovadora dedicada a explorar e testar os mais diversos sabores de chocolate. Fundada em 2020 por um grupo de entusiastas do chocolate, a ChocoTest se destaca no mercado por sua abordagem científica e criativa. Localizada no coração de uma vibrante cidade cosmopolita, a empresa combina tecnologia de ponta com a paixão pela arte de fazer chocolate.</p>
          <p class="text-justify gray-text">Na ChocoTest, um time de especialistas em alimentos, químicos e degustadores profissionais trabalha incansavelmente para desenvolver novos sabores e combinações de chocolate. Utilizando um rigoroso processo de análise sensorial, a equipe avalia cada aspecto dos chocolates, desde a textura até o sabor e o aroma. Cada novo produto é submetido a testes de qualidade e preferências do consumidor antes de ser lançado no mercado.</p>
          <p class="text-justify gray-text">A empresa também se orgulha de sua responsabilidade social e sustentabilidade. Todos os ingredientes utilizados são de origem ética e sustentável, apoiando comunidades locais e promovendo práticas agrícolas responsáveis. Além disso, a ChocoTest oferece programas de capacitação para agricultores e pequenos produtores de cacau, ajudando a melhorar suas técnicas e aumentar sua renda. </p>
          <p class="text-justify gray-text">Com uma visão de futuro promissora, a ChocoTest continua a buscar inovações no mundo do chocolate, oferecendo experiências sensoriais únicas e inesquecíveis para seus clientes. Seja um chocolate com toque exótico de especiarias ou uma mistura surpreendente de frutas tropicais, cada produto da ChocoTest promete uma viagem de sabores que encanta e surpreende o paladar.</p>
        </div>
      </div>
    </div>
    <br><br><br>
    @endsection