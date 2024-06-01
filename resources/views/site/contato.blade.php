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
      <div class="carousel-indicators ">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('img/contato.jpg') }}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Chocolates</h5>
            <p>Avaliando alguns chocolates que já provei.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ asset('img/contato2.jpg') }}" class="d-block w-100" alt="...">
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
    <div class="container text-center mt-4 ">
      <div class="row align-items-center ">
        <div class="col-md-10 offset-md-1 ">
          
       

          <div class="container mt-5 form-container ">
          
          <form action="{{ route('site.contato') }}" method="post" >
            @csrf
    <p class="text-justify Descubra titulo2">Ficou com Dúvida? Entre em contato conosco!</p><br><br>
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite seu nome">
    </div>
    <div class="mb-3">
        <label for="telefone" class="form-label">Telefone</label>
        <input type="tel" id="telefone" name="telefone" class="form-control" placeholder="Digite seu telefone">
    </div>
    <div class="mb-3">
        <label for="endereco" class="form-label">Endereço</label>
        <input type="text" id="endereco" name="endereco" class="form-control" placeholder="Digite seu endereço">
    </div>
    <div class="mb-3">
        <label for="sexo" class="form-label">Sexo</label>
        <select id="sexo" name="sexo" class="form-select">
            <option value="" disabled selected>Selecione</option>
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
            <option value="outro">Outro</option>
        </select>
    </div>
    <button type="submit" class="btn btn-orange">Enviar</button>
        </form>
    </div>

        </div>
      </div>
    </div>
    <br><br><br>
    @endsection
