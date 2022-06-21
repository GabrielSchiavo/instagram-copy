<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Instagram Feed</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://www.instagram.com/static/images/ico/favicon.ico/36b3ee2d91ed.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"/>
    <link rel="stylesheet" href="assets/css/main.css">
  </head>

  <body>
    <header>
      <nav class="navbar fixed-top navbar-expand-md">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="https://www.instagram.com/static/images/web/mobile_nav_type_logo-2x.png/1b47f9d0e595.png" width="102" alt="Logo do aplicativo Instagram"/>
          </a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="d-flex pesquisa">
              <input class="form-control" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
            </form>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                  <svg aria-label="Página inicial" fill="currentColor" height="22" role="img" viewBox="0 0 48 48" width="22"><path d="M45.5 48H30.1c-.8 0-1.5-.7-1.5-1.5V34.2c0-2.6-2.1-4.6-4.6-4.6s-4.6 2.1-4.6 4.6v12.3c0 .8-.7 1.5-1.5 1.5H2.5c-.8 0-1.5-.7-1.5-1.5V23c0-.4.2-.8.4-1.1L22.9.4c.6-.6 1.6-.6 2.1 0l21.5 21.5c.3.3.4.7.4 1.1v23.5c.1.8-.6 1.5-1.4 1.5z"></path></svg>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <svg aria-label="Messenger" fill="currentColor" height="22" role="img" viewBox="0 0 48 48" width="22"><path d="M36.2 16.7L29 22.2c-.5.4-1.2.4-1.7 0l-5.4-4c-1.6-1.2-3.9-.8-5 .9l-6.8 10.7c-.7 1 .6 2.2 1.6 1.5l7.3-5.5c.5-.4 1.2-.4 1.7 0l5.4 4c1.6 1.2 3.9.8 5-.9l6.8-10.7c.6-1.1-.7-2.2-1.7-1.5zM24 1C11 1 1 10.5 1 23.3 1 30 3.7 35.8 8.2 39.8c.4.3.6.8.6 1.3l.2 4.1c0 1 .9 1.8 1.8 1.8.2 0 .5 0 .7-.2l4.6-2c.2-.1.5-.2.7-.2.2 0 .3 0 .5.1 2.1.6 4.3.9 6.7.9 13 0 23-9.5 23-22.3S37 1 24 1zm0 41.6c-2 0-4-.3-5.9-.8-.4-.1-.8-.2-1.3-.2-.7 0-1.3.1-2 .4l-3 1.3V41c0-1.3-.6-2.5-1.6-3.4C6.2 34 4 28.9 4 23.3 4 12.3 12.6 4 24 4s20 8.3 20 19.3-8.6 19.3-20 19.3z"></path></svg>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <svg aria-label="Encontrar pessoas" fill="currentColor" height="22" role="img" viewBox="0 0 48 48" width="22"><path clip-rule="evenodd" d="M24 0C10.8 0 0 10.8 0 24s10.8 24 24 24 24-10.8 24-24S37.2 0 24 0zm0 45C12.4 45 3 35.6 3 24S12.4 3 24 3s21 9.4 21 21-9.4 21-21 21zm10.2-33.2l-14.8 7c-.3.1-.6.4-.7.7l-7 14.8c-.3.6-.2 1.3.3 1.7.3.3.7.4 1.1.4.2 0 .4 0 .6-.1l14.8-7c.3-.1.6-.4.7-.7l7-14.8c.3-.6.2-1.3-.3-1.7-.4-.5-1.1-.6-1.7-.3zm-7.4 15l-5.5-5.5 10.5-5-5 10.5z" fill-rule="evenodd"></path></svg>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <svg aria-label="Feed de atividades" fill="currentColor" height="22" role="img" viewBox="0 0 48 48" width="22"><path d="M34.6 6.1c5.7 0 10.4 5.2 10.4 11.5 0 6.8-5.9 11-11.5 16S25 41.3 24 41.9c-1.1-.7-4.7-4-9.5-8.3-5.7-5-11.5-9.2-11.5-16C3 11.3 7.7 6.1 13.4 6.1c4.2 0 6.5 2 8.1 4.3 1.9 2.6 2.2 3.9 2.5 3.9.3 0 .6-1.3 2.5-3.9 1.6-2.3 3.9-4.3 8.1-4.3m0-3c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5.6 0 1.1-.2 1.6-.5 1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z"></path></svg>
                </a>
              </li>
              <li class="nav-item dropdown">
                <span class="nav-link" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img loading="lazy width="22" height="22" class="rounded-circle" src="https://picsum.photos/56" alt="Foto de perfil de usuário"/></span>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                  <li>
                    <a class="dropdown-item mb-1" href="#"><svg class="me-2" aria-label="Perfil" fill="#262626" height="16" role="img" viewBox="0 0 32 32" width="16"><path d="M16 0C7.2 0 0 7.1 0 16c0 4.8 2.1 9.1 5.5 12l.3.3C8.5 30.6 12.1 32 16 32s7.5-1.4 10.2-3.7l.3-.3c3.4-3 5.5-7.2 5.5-12 0-8.9-7.2-16-16-16zm0 29c-2.8 0-5.3-.9-7.5-2.4.5-.9.9-1.3 1.4-1.8.7-.5 1.5-.8 2.4-.8h7.2c.9 0 1.7.3 2.4.8.5.4.9.8 1.4 1.8-2 1.5-4.5 2.4-7.3 2.4zm9.7-4.4c-.5-.9-1.1-1.5-1.9-2.1-1.2-.9-2.7-1.4-4.2-1.4h-7.2c-1.5 0-3 .5-4.2 1.4-.8.6-1.4 1.2-1.9 2.1C4.2 22.3 3 19.3 3 16 3 8.8 8.8 3 16 3s13 5.8 13 13c0 3.3-1.2 6.3-3.3 8.6zM16 5.7c-3.9 0-7 3.1-7 7s3.1 7 7 7 7-3.1 7-7-3.1-7-7-7zm0 11c-2.2 0-4-1.8-4-4s1.8-4 4-4 4 1.8 4 4-1.8 4-4 4z"></path></svg> Perfil</a>
                  </li>
                  <li>
                    <a class="dropdown-item mb-1" href="#"><svg class="me-2" aria-label="Salvos" fill="#262626" height="16" role="img" viewBox="0 0 32 32" width="16"><path d="M28.7 32c-.4 0-.8-.2-1.1-.4L16 19.9 4.4 31.6c-.4.4-1.1.6-1.6.3-.6-.2-.9-.8-.9-1.4v-29C1.8.7 2.5 0 3.3 0h25.4c.8 0 1.5.7 1.5 1.5v29c0 .6-.4 1.2-.9 1.4-.2.1-.4.1-.6.1zM4.8 3v23.9l9.4-9.4c.9-.9 2.6-.9 3.5 0l9.4 9.4V3H4.8z"></path></svg> Salvos</a>
                  </li>
                  <li>
                    <a class="dropdown-item mb-1" href="#"><svg class="me-2" aria-label="Configurações" fill="#262626" height="16" role="img" viewBox="0 0 32 32" width="16"><path d="M31.2 13.4l-1.4-.7c-.1 0-.2-.1-.2-.2v-.2c-.3-1.1-.7-2.1-1.3-3.1v-.1l-.2-.1v-.3l.5-1.5c.2-.5 0-1.1-.4-1.5l-1.9-1.9c-.4-.4-1-.5-1.5-.4l-1.5.5H23l-.1-.1h-.1c-1-.5-2-1-3.1-1.3h-.2c-.1 0-.1-.1-.2-.2L18.6.9c-.2-.5-.7-.9-1.2-.9h-2.7c-.5 0-1 .3-1.3.8l-.7 1.4c0 .1-.1.2-.2.2h-.2c-1.1.3-2.1.7-3.1 1.3h-.1l-.1.2h-.3l-1.5-.5c-.5-.2-1.1 0-1.5.4L3.8 5.7c-.4.4-.5 1-.4 1.5l.5 1.5v.5c-.5 1-1 2-1.3 3.1v.2c0 .1-.1.1-.2.2l-1.4.7c-.6.2-1 .7-1 1.2v2.7c0 .5.3 1 .8 1.3l1.4.7c.1 0 .2.1.2.2v.2c.3 1.1.7 2.1 1.3 3.1v.1l.2.1v.3l-.5 1.5c-.2.5 0 1.1.4 1.5l1.9 1.9c.3.3.6.4 1 .4.2 0 .3 0 .5-.1l1.5-.5H9l.1.1h.1c1 .5 2 1 3.1 1.3h.2c.1 0 .1.1.2.2l.7 1.4c.2.5.7.8 1.3.8h2.7c.5 0 1-.3 1.3-.8l.7-1.4c0-.1.1-.2.2-.2h.2c1.1-.3 2.1-.7 3.1-1.3h.1l.1-.1h.3l1.5.5c.1 0 .3.1.5.1.4 0 .7-.1 1-.4l1.9-1.9c.4-.4.5-1 .4-1.5l-.5-1.5V23l.1-.1v-.1c.5-1 1-2 1.3-3.1v-.2c0-.1.1-.1.2-.2l1.4-.7c.5-.2.8-.7.8-1.3v-2.7c0-.5-.4-1-.8-1.2zM16 27.1c-6.1 0-11.1-5-11.1-11.1S9.9 4.9 16 4.9s11.1 5 11.1 11.1-5 11.1-11.1 11.1z"></path></svg> Configurações</a>
                  </li>
                  <li>
                    <a class="dropdown-item mb-1" href="login.php"><svg class="me-2" aria-label="Trocar de conta" fill="#262626" height="16" role="img" viewBox="0 0 32 32" width="16"><path d="M10.3 10.7c0-.8-.7-1.5-1.5-1.5H4.9C7.2 5.4 11.4 3 16 3c3.6 0 7 1.5 9.5 4.1.5.6 1.5.6 2.1.1.6-.6.6-1.5.1-2.1-3-3.2-7.3-5-11.7-5C10.7 0 6 2.5 3 6.7V3.5C3 2.7 2.3 2 1.5 2S0 2.7 0 3.5v7.2c0 .8.7 1.5 1.5 1.5h7.3c.8 0 1.5-.6 1.5-1.5zm20.2 9.1h-7.2c-.8 0-1.5.7-1.5 1.5s.7 1.5 1.5 1.5h3.8C24.8 26.6 20.6 29 16 29c-3.6 0-7-1.5-9.5-4.1-.5-.6-1.5-.6-2.1-.1-.6.6-.6 1.5-.1 2.1 3 3.2 7.3 5 11.7 5 5.3 0 10-2.5 13-6.7v3.2c0 .8.7 1.5 1.5 1.5s1.5-.7 1.5-1.5v-7.2c0-.8-.7-1.4-1.5-1.4z"></path></svg>Trocar de conta</a>
                  </li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li>
                    <a class="dropdown-item" href="login.php">Sair</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <main>
      <section id="feed" class="">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <div class="card mb-4 stories">
                <div class="story text-center">
                    <img src="https://picsum.photos/56" width="56" height="56" alt="Foto de perfil do usuário">
                    <div class="username">@dapessoa123</div>
                </div>
                <div class="story text-center">
                    <img src="https://picsum.photos/56" width="56" height="56" alt="Foto de perfil do usuário">
                    <div class="username">@dapessoa123</div>
                </div>
                <div class="story text-center">
                    <img src="https://picsum.photos/56" width="56" height="56" alt="Foto de perfil do usuário">
                    <div class="username">@dapessoa123</div>
                </div>
              </div>
              <?php
              include "gerar_feed.php" 
              ?>
            </div>

            <div class="card col-4 card_sugestao">
              <div class="row card-header card-header_feed">

                <div class="col-3">
                  <button><img width="60" height="60" class="rounded-circle" src="https://picsum.photos/56" alt="Foto de perfil de usuário"></button>
                </div>

                <div class="col-7">@dapessoa123</div>

                <div class="col-2">
                  <button class="btn_mudar" onclick="window.location.href='login.php'">Mudar</button>
                </div>
              </div>

              <div class="card-body card-body_feed">
                <div class="row card-title">
                  <div class="col-9">
                    Sugestões para você
                  </div>

                  <div class="div_col-3 col-3">
                    <button class="btn_ver_tudo ms-auto">Ver tudo</button>
                  </div>
                </div>

                <ul class="list-group">
                  <li class="list-group-item">
                    <div class="row">
                      <div class="col-2">
                        <img class="rounded-circle" src="https://picsum.photos/32" alt="">
                      </div>
                      <div class="col-7 nome_sugestao">
                        @dapessoa124
                      </div>
                      <button class="col-3 ms-auto btn_seguir">Seguir</button>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="row">
                      <div class="col-2">
                        <img class="rounded-circle" src="https://picsum.photos/32" alt="">
                      </div>
                      <div class="col-7 nome_sugestao">
                        @dapessoa125
                      </div>
                      <button class="col-3 ms-auto btn_seguir">Seguir</button>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="row">
                      <div class="col-2">
                        <img class="rounded-circle" src="https://picsum.photos/32" alt="">
                      </div>
                      <div class="col-7 nome_sugestao">
                        @dapessoa126
                      </div>
                      <button class="col-3 ms-auto btn_seguir">Seguir</button>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="row">
                      <div class="col-2">
                        <img class="rounded-circle" src="https://picsum.photos/32" alt="">
                      </div>
                      <div class="col-7 nome_sugestao">
                        @dapessoa127
                      </div>
                      <button class="col-3 ms-auto btn_seguir">Seguir</button>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="row">
                      <div class="col-2">
                        <img class="rounded-circle" src="https://picsum.photos/32" alt="">
                      </div>
                      <div class="col-7 nome_sugestao">
                        @dapessoa128
                      </div>
                      <button class="col-3 ms-auto btn_seguir">Seguir</button>
                    </div>
                  </li>
                </ul>
                
                <p class="card-text mt-4">COPYRIGHT ©</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
