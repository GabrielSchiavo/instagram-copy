<?php
// Gera os cards do feed 
for ($i=1; $i <= 10; $i++) {
   echo'<article class="card mb-4">
   <div class="card-header card-header_feed">
       <div><img width="32" height="32" class="rounded-circle" src="https://picsum.photos/56" alt="Foto de perfil de usuário"></div>
       <div class="card_username">@dapessoa123</div>

       <div class="dropdown ms-auto dropend">
         <button class="btn btn-secondary" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
           <svg aria-label="Mais opções" fill="#262626" height="24" role="img" viewBox="0 0 24 24" width="24"><circle cx="12" cy="12" r="1.5"></circle><circle cx="6.5" cy="12" r="1.5"></circle><circle cx="17.5" cy="12" r="1.5"></circle></svg>
         </button>
         <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
           <li><a class="dropdown-item" href="#"><b>Denunciar</b></a></li>
           <li><a class="dropdown-item" href="#"><b>Deixar de seguir</b></a></li>
           <li><a class="dropdown-item" href="#">Ir para a publicação</a></li>
           <li><a class="dropdown-item" href="#">Contas marcadas</a></li>
           <li><a class="dropdown-item" href="#">Compartilhar em...</a></li>
           <li><a class="dropdown-item" href="#">Copiar link</a></li>
           <li><a class="dropdown-item" href="#">Incorporar</a></li>
           <li><a class="dropdown-item" href="#">Cancelar</a></li>
         </ul>
       </div>

   </div>
   <div class="card-body card-body_feed">
       <img src="https://picsum.photos/614" class="card-img-top" alt="">
   </div>
   <div class="card-footer">
     <ul class="list-group list-group-horizontal">
       <li class="list-group-item"><a href="#"><svg aria-label="Curtir" fill="#262626" height="24" role="img" viewBox="0 0 48 48" width="24"><path d="M34.6 6.1c5.7 0 10.4 5.2 10.4 11.5 0 6.8-5.9 11-11.5 16S25 41.3 24 41.9c-1.1-.7-4.7-4-9.5-8.3-5.7-5-11.5-9.2-11.5-16C3 11.3 7.7 6.1 13.4 6.1c4.2 0 6.5 2 8.1 4.3 1.9 2.6 2.2 3.9 2.5 3.9.3 0 .6-1.3 2.5-3.9 1.6-2.3 3.9-4.3 8.1-4.3m0-3c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5.6 0 1.1-.2 1.6-.5 1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z"></path></svg></a></li>
       <li class="list-group-item"><a href="#"><svg aria-label="Comentar" fill="#262626" height="24" role="img" viewBox="0 0 48 48" width="24"><path clip-rule="evenodd" d="M47.5 46.1l-2.8-11c1.8-3.3 2.8-7.1 2.8-11.1C47.5 11 37 .5 24 .5S.5 11 .5 24 11 47.5 24 47.5c4 0 7.8-1 11.1-2.8l11 2.8c.8.2 1.6-.6 1.4-1.4zm-3-22.1c0 4-1 7-2.6 10-.2.4-.3.9-.2 1.4l2.1 8.4-8.3-2.1c-.5-.1-1-.1-1.4.2-1.8 1-5.2 2.6-10 2.6-11.4 0-20.6-9.2-20.6-20.5S12.7 3.5 24 3.5 44.5 12.7 44.5 24z" fill-rule="evenodd"></path></svg></a></li>
       <li class="list-group-item"><a href="#"><svg aria-label="Compartilhar publicação" fill="#262626" height="24" role="img" viewBox="0 0 48 48" width="24"><path d="M47.8 3.8c-.3-.5-.8-.8-1.3-.8h-45C.9 3.1.3 3.5.1 4S0 5.2.4 5.7l15.9 15.6 5.5 22.6c.1.6.6 1 1.2 1.1h.2c.5 0 1-.3 1.3-.7l23.2-39c.4-.4.4-1 .1-1.5zM5.2 6.1h35.5L18 18.7 5.2 6.1zm18.7 33.6l-4.4-18.4L42.4 8.6 23.9 39.7z"></path></svg></a></li>
     </ul>
   </div>
</article>';
}
