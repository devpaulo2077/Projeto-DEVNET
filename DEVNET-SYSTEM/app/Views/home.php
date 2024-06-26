<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= base_url('assets/img/logo.png') ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        .carousel-item img {
            height: 50vh;
            object-fit: cover;
        }
        .carousel {
            max-width: 100vw; 
            margin: auto; 
        }
        #number-count{
            font-size: 4em;
        }
    </style>
    <title>DEV.NET</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="<?= site_url('/') ?>">DEV.NET <i class="bi bi-boxes"></i></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?= site_url('/') ?>">Início</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= site_url('feed') ?>" >Feed</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Perfil
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="<?= site_url('seu_perfil') ?>"><i class="bi bi-person-circle"></i> Seu perfil</a></li>
                  <li><a class="dropdown-item" href="<?= site_url('anunciando') ?>"><i class="bi bi-newspaper"></i> Anunciar</a></li>
                  <li><a class="dropdown-item" href="<?= site_url('/cadastro') ?>"><i class="bi bi-person-plus-fill"></i> Novo perfil</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="<?= site_url('sair') ?>"><i class="bi bi-box-arrow-left"></i> Sair</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true"><?= $nome ?></a>
              </li>
            </ul>
            <?= form_open('feedPesquisa', array('class' => 'd-flex', 'novalidate' => '')) ?>
              <input class="form-control me-2" type="search" name="campo-pesquisa" placeholder="Busque por tecnologias" aria-label="Search">
              <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
            <?= form_close()?>
          </div>
        </div>
      </nav>
      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?= base_url('assets/img/intro.png') ?>" class="d-block w-100" alt="plataforma">
          </div>
          <div class="carousel-item">
            <img src="<?= base_url('assets/img/sobre.png') ?>" class="d-block w-100" alt="receba oportunidades">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div class="container text-center">
        <div class="row">
          <div class="col">
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                      Preciso ter uma conta para anunciar meus serviços?
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Sim, para publicar seu perfil e compartilhar aqui na plataforma, você precisa se cadastrar.</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                      Como posso entrar em contato com o desenvolvedor?
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Na descrição da publicação vão existir muitas informações e inclusive seu contato.</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                      O pagamento é pela plataforma?
                    </button>
                  </h2>
                  <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Não, o pagamento é feito em particular com os usuários, porém, a plataforma mantém um rigoroso processo de análise para evitar situações de má intenção.</div>
                  </div>
                </div>
              </div>
          </div>
          <div class="col">
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th>Números de usuários</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td id="number-count"><?= count($numberUsers) ?></td>
                    </tr>
                </tbody>
              </table>
          </div>
        </div>
      </div>
</body>
</html>
