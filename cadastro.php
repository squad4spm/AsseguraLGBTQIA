<?php include("header.php"); ?>
<?php include("menu.php"); ?>

<section id="formulario_cadastro">
       <div class="container-cadastro">
           <header>Cadastro</header>
           <div class="barra-progresso">
               <div class="passo">
                    <p>Nome</p>
                    <div class="bullet">
                        <span>1</span>
                    </div>
                    <div class="check fas fa-check"></div>
               </div>
               <div class="passo">
                <p>Contato</p>
                <div class="bullet">
                    <span>2</span>
                </div>
                <div class="check fas fa-check"></div>
               </div>
               <div class="passo">
                <p>Nascimento</p>
                <div class="bullet">
                    <span>3</span>
                </div>
                <div class="check fas fa-check"></div>
               </div>
               <div class="passo">
                <p>Enviar</p>
                <div class="bullet">
                    <span>4</span>
                </div>
                <div class="check fas fa-check"></div>
               </div>
           </div> 
           <div class="formulario">
               <form action="#">
                    <div class="pagina slide">
                        <div class="titulo">Informações Básicas:</div>
                        <div class="fild">
                            <div class="label">Primeiro Nome</div>
                            <input type="text">
                        </div>
                        <div class="fild">
                            <div class="label">Último Nome</div>
                            <input type="text">
                        </div>
                        <div class="fild proximobtn">
                            <button>Próximo</button>
                        </div>
                    </div>

                    <div class="pagina">
                        <div class="titulo">Contato:</div>
                        <div class="fild">
                            <div class="label">E-mail</div>
                            <input type="text">
                        </div>
                        <div class="fild">
                            <div class="label">Telefone</div>
                            <input type="number">
                        </div>
                        <div class="fild btns" >
                            <button class="volt-1 volt">Voltar</button>
                            <button class="prox-1 prox">Próximo</button>
                        </div>
                    </div>

                    <div class="pagina">
                        <div class="titulo">Data de Nascimento</div>
                        <div class="fild">
                            <div class="label">Nacimento</div>
                            <input type="text">
                        </div>
                        <div class="fild">
                            <div class="label">Gênero</div>
                            <select>
                                <option>Homem</option>
                                <option>Mulher</option>
                                <option>Outros</option>
                            </select>
                        </div>
                        <div class="fild btns" >
                            <button class="volt-2 volt">Voltar</button>
                            <button class="prox-2 prox">Próximo</button>
                        </div>
                    </div>

                    <div class="pagina">
                        <div class="titulo">Detalhes de Login: </div>
                        <div class="fild">
                            <div class="label">Usuário</div>
                            <input type="text">
                        </div>
                        <div class="fild">
                            <div class="label">Senha</div>
                           <input type= "password">
                        </div>
                        <div class="fild btns" >
                            <button class="volt-3 volt">Voltar</button>
                            <button class="submit">Enviar</button>
                        </div>
                    </div>

               </form>
           </div>
       </div>
    </section>

<?php include("conteudoFooter.php"); ?>
<?php include("footer.php"); ?>
