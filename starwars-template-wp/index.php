<?php
    /**
     * Main - Header
     * 
     * @package Star Wars
     */

    get_header(); 
?>
        <main>
            <section id="sobre" class="sobre-sw"><!--Sobre-->
                <div class="container-sw">
                    <div class="row">
                        <div class="col s12 m6 l6 xl6"><!--Imagem-->
                            <img src="wp-content/themes/starwars-template-wp/img/img-sw-sobre.png" class="responsive-img" alt="Star Wars">
                        </div>
                        <div class="col s12 m6 l6 xl6"><!--Texto-->
                            <h2 class="center-align">Sobre o Filme</h2>
                            <p>Lorem ipsum dolor sit amet, cum ne omnes delectus. An pro mutat tractatos, 
                            eu quo debitis intellegam. Vis nulla epicurei ad, his animal mediocritatem et. 
                            Mei te periculis percipitur interpretaris, eu partem putant eos, ut fierent singulis 
                            ius. Ei per stet intellegat consectetuer. Lorem ipsum dolor sit amet, cum ne 
                            omnes delectus. An pro mutat tractatos, eu quo debitis intellegam. Vis nulla 
                            epicurei ad, his animal mediocritatem et. Mei te periculis percipitur interpretaris, 
                            eu partem putant eos, ut fierent singulis ius. Ei per stet intellegat consectetuer. 
                            Lorem ipsum dolor sit amet, cum ne omnes delectus. An pro mutat tractatos, 
                            eu quo debitis intellegam. Vis nulla epicurei ad, his animal mediocritatem 
                            et. Mei te periculis percipitur interpretaris, eu partem putant eos, ut 
                            fierent singulis ius. Ei per stet intellegat consectetuer.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section id="noticias" class="noticias-sw">
                <div class="container-sw">
                    <div class="row">
                        <h2 class="center-align">Notícias</h2>
                        <div class="col s12 m4 l4 xl4">
                            <a href="#">
                                <figure  class="text-noticias-sw grow">
                                    <img class="responsive-img" src="wp-content/themes/starwars-template-wp/img/sw-noticias.png">
                                    <figcaption>Lorem ipsum dolor sit amet, cum ne omdelectus</figcaption>
                                    <span>By: Karen Rocha</span>
                                </figure>
                            </a>
                        </div>
                        <div class="col s12 m4 l4 xl4">
                            <a href="#">
                                <figure class="text-noticias-sw grow">
                                    <img class="responsive-img" src="wp-content/themes/starwars-template-wp/img/sw-noticias.png">
                                    <figcaption>Lorem ipsum dolor sit amet, cum ne omdelectus</figcaption>
                                    <span>By: Karen Rocha</span>
                                </figure>
                            </a>
                        </div>
                        <div class="col s12 m4 l4 xl4">
                            <a href="#">
                                <figure  class="text-noticias-sw grow">
                                    <img class="responsive-img" src="wp-content/themes/starwars-template-wp/img/sw-noticias.png">
                                    <figcaption>Lorem ipsum dolor sit amet, cum ne omdelectus</figcaption>
                                    <span>By: Karen Rocha</span>
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section id="contato" class="contato-sw"><!--Contato-->
                <div class="container-sw">
                    <div class="row">
                        <div class="col s12 m6 l6 xl6">
                            <div class="row">
                                <form class="col s12">
                                    <h2 class="left-align">Contato</h2>
                                    <div class="input-field col s12">
                                        <input placeholder="Nome" id="first_name" type="text" class="validate">  
                                    </div>
                                    <div class="input-field col s12">
                                        <input placeholder="Email" id="email" type="email" class="validate">  
                                        <span class="helper-text" data-error="Incorreto" data-success="Ok"> </span>
                                    </div>
                                    <div class="input-field col s12">
                                        <input placeholder="Telefone" id="tel" type="tel" class="validate">  
                                    </div>
                                    <div class="input-field col s12">
                                        <textarea id="textarea1" class="materialize-textarea" placeholder="Escreva Aqui Uma Mensagem" rows="3" ></textarea>
                                    </div>
                                    <div class="col s6 right-align offset-s6">
                                        <button class="btn waves-effect waves-light btn-form-sw" type="submit" name="action">Enviar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col s12 m6 l6 xl6 margem-list-sw">
                            <ul class="list-contato-sw">
                                <li>
                                    <i class="material-icons">location_on</i>
                                    <span>Lorem ipsum dolor sit amet, cum ne omnes delectus</span>
                                </li>
                                <li>
                                    <i class="material-icons">drafts</i>
                                    <span>contato@contato.com.br</span>
                                </li>
                                <li>
                                    <i class="material-icons">phone</i>
                                    <span>9 9999-9999</span>
                                </li>
                            </ul>
                            <h3>Nossas Redes</h3><!--Redes Sociais-->
                            <ul class="list-social-sw">
                                <li class="facebook-sw">
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 96.124 96.123" style="enable-background:new 0 0 96.124 96.123;" xml:space="preserve">
                                            <g>
                                                <path d="M72.089,0.02L59.624,0C45.62,0,36.57,9.285,36.57,23.656v10.907H24.037c-1.083,0-1.96,0.878-1.96,1.961v15.803   c0,1.083,0.878,1.96,1.96,1.96h12.533v39.876c0,1.083,0.877,1.96,1.96,1.96h16.352c1.083,0,1.96-0.878,1.96-1.96V54.287h14.654   c1.083,0,1.96-0.877,1.96-1.96l0.006-15.803c0-0.52-0.207-1.018-0.574-1.386c-0.367-0.368-0.867-0.575-1.387-0.575H56.842v-9.246   c0-4.444,1.059-6.7,6.848-6.7l8.397-0.003c1.082,0,1.959-0.878,1.959-1.96V1.98C74.046,0.899,73.17,0.022,72.089,0.02z" fill="#FFFFFF"/>
                                            </g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g<g></g>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -47 512.00203 512" width="30px" height="30px">
                                            <path d="m191.011719 419.042969c-22.140625 0-44.929688-1.792969-67.855469-5.386719-40.378906-6.335938-81.253906-27.457031-92.820312-33.78125l-30.335938-16.585938 32.84375-10.800781c35.902344-11.804687 57.742188-19.128906 84.777344-30.597656-27.070313-13.109375-47.933594-36.691406-57.976563-67.175781l-7.640625-23.195313 6.265625.957031c-5.941406-5.988281-10.632812-12.066406-14.269531-17.59375-12.933594-19.644531-19.78125-43.648437-18.324219-64.21875l1.4375-20.246093 12.121094 4.695312c-5.113281-9.65625-8.808594-19.96875-10.980469-30.777343-5.292968-26.359376-.863281-54.363282 12.476563-78.851563l10.558593-19.382813 14.121094 16.960938c44.660156 53.648438 101.226563 85.472656 168.363282 94.789062-2.742188-18.902343-.6875-37.144531 6.113281-53.496093 7.917969-19.039063 22.003906-35.183594 40.722656-46.691407 20.789063-12.777343 46-18.96875 70.988281-17.433593 26.511719 1.628906 50.582032 11.5625 69.699219 28.746093 9.335937-2.425781 16.214844-5.015624 25.511719-8.515624 5.59375-2.105469 11.9375-4.496094 19.875-7.230469l29.25-10.078125-19.074219 54.476562c1.257813-.105468 2.554687-.195312 3.910156-.253906l31.234375-1.414062-18.460937 25.230468c-1.058594 1.445313-1.328125 1.855469-1.703125 2.421875-1.488282 2.242188-3.339844 5.03125-28.679688 38.867188-6.34375 8.472656-9.511718 19.507812-8.921875 31.078125 2.246094 43.96875-3.148437 83.75-16.042969 118.234375-12.195312 32.625-31.09375 60.617187-56.164062 83.199219-31.023438 27.9375-70.582031 47.066406-117.582031 56.847656-23.054688 4.796875-47.8125 7.203125-73.4375 7.203125zm0 0" fill="#FFFFFF"/>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 169.063 169.063" style="enable-background:new 0 0 169.063 169.063;" xml:space="preserve">
                                            <g>
                                                <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752   c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407   c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752   c17.455,0,31.656,14.201,31.656,31.655V122.407z" fill="#FFFFFF"/>
                                                <path d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561   C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561   c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" fill="#FFFFFF"/>
                                                <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78   c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78   C135.661,29.421,132.821,28.251,129.921,28.251z" fill="#FFFFFF"/>
                                            </g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                        </svg>         
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>    
            </section>
        </main>
        <?php get_sidebar(); ?>
        <?php get_footer(); ?>