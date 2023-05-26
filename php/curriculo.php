<?php require "navbar.php"?>


<div class="container">
    <form id="form" action="action_page.php" method="post">
        <div class="personal-info">
            <p class="title">Dados pessoais</p>
            <div class="grid">
                <label for="fname"><span style="color: red;">*</span>Nome: </label>
                <label for="lname"><span style="color: red;">*</span>Sobrenome:</label>
                <input type="text" name="fname" id="fname">
                <input type="text" name="lname" id="lname">

            </div>

            <label for="data_nasc"><span style="color: red;">*</span>Data de nascimento</label>
            <br>
            <input type="date" name="data_nasc" id="data_nasc" required>


            <br>
            <label for="email"><span style="color: red;">*</span>E-mail:</label>
            <br>
            <input type="email" name="email" id="email" size="45" required>
            <br>

            <label for="tel">Telefone:</label>
            <br>
            <input type="tel" name="tel" id="tel">
            <br>

            <label for="estado_civil">Estado civil</label>
            <br>
            <select name="estado_civil" id="estado_civil">
                <option value="solteiro">Solteiro</option>
                <option value="casado">Casado</option>
                <option value="divorciado">Divorciado</option>
                <option value="viuvo">Viúvo</option>
            </select>
        </div>

        <br>
        <hr>
        <br>

        <div class="academic-info">
            <p class="title">Formação acadêmica</p>
            <div class="grid">
                <label for="instituicao_academica">Instituição:</label>
                <label for="curso">Curso:</label>
                <input type="text" name="instituicao_academica[]" id="instituicao_academica">
                <input type="text" name="curso[]" id="curso">
            </div>
            <div class="grid">
                <label for="data_inicio_academico">Data de início:</label>
                <label for="data_fim_academico">Data de término:</label>
                <input type="date" name="data_inicio_academico[]" id="data_inicio_academico">
                <input type="date" name="data_fim_academico[]" id="data_fim_academico">
            </div>
            <div class="grid">
                <label for="status">Status:</label>
                <label for="turno">Turno:</label>
                <select name="status[]" id="status">
                    <option value="cursando">Cursando</option>
                    <option value="concluido">Concluído</option>
                    <option value="trancado">Trancado</option>
                </select>
                <select name="turno[]" id="turno">
                    <option value="matutino">Matutino</option>
                    <option value="vespertino">Vespertino</option>
                    <option value="noturno">Noturno</option>
                </select>
            </div>
        </div>
        <span style="display: flex; justify-content:end; gap:0.5rem;">
            <button class="btn-add-academic-info" type="button">+</button>
        </span>

        <br>
        <hr>
        <br>

        <div class="professional-exp">
            <p class="title">Experiência profissional</p>
            <div class="grid">
                <label for="empresa">Empresa:</label>
                <label for="cargo">Cargo:</label>
                <input type="text" name="empresa[]" id="empresa">
                <input type="text" name="cargo[]" id="cargo">
            </div>
            <div class="grid">
                <label for="data_inicio_profissional">Data de início:</label>
                <label for="data_fim_profissional">Data de término:</label>
                <input type="date" name="data_inicio_profissional[]" id="data_inicio_profissional">
                <input type="date" name="data_fim_profissional[]" id="data_fim_profissional">
            </div>
            <div class="grid">
                <label for="atividades">Atividades:</label>
                <span style="display: flex; gap: 8px; align-items:center;">
                    <input type="checkbox" name="emprego_atual[]" id="emprego_atual">
                    <p>É meu emprego atual</p>
                </span>
                <textarea name="atividades[]" id="atividades" cols="30" rows="10"></textarea>
            </div> 
        </div>
            <span style="display: flex; justify-content:end;">
                <button class="btn-add-professional-info" type="button">+</button>
            </span>

        <br>
        <hr>
        <br>

        <div class="certification">
            <p class="title">Certificações</p>
            <div class="grid">
                <label for="certificacao">Certificação:</label>
                <label for="instituicao_certificado">Instituição:</label>
                <input type="text" name="certificacao[]" id="certificacao">
                <input type="text" name="instituicao_certificado[]" id="instituicao_certificado">
            </div>
            <div class="grid">
                <label for="data_inicio_certificacao">Data de início:</label>
                <label for="data_fim_certificacao">Data de término:</label>
                <input type="date" name="data_inicio_certificacao[]" id="data_inicio_certificacao">
                <input type="date" name="data_fim_certificacao[]" id="data_fim_certificacao">
            </div>
            <div class="grid">
                <label for="carga_horaria">Carga horária (em horas)</label>
                <span></span>
                <input type="text" inputmode="numeric" name="carga_horaria[]" id="carga_horaria">
            </div>
        </div>
            <span style="display: flex; justify-content:end;">
                <button class="btn-add-certification-info" type="button">+</button>
            </span>
        <br>
        <hr>
        <br>

        <div class="language">
            <p class="title">Idiomas</p>
            <div class="grid">
                <label for="idioma">Idioma:</label>
                <label for="nivel">Nível:</label>
                <input type="text" name="idioma[]" id="idioma">
                <select name="nivel[]" id="nivel">
                    <option value="basico">Básico</option>
                    <option value="intermediario">Intermediário</option>
                    <option value="avancado">Avançado</option>
                </select>
            </div>   
        </div>
        <span style="display: flex; justify-content:end;">
            <button class="btn-add-language-info" type="button">+</button>
        </span>


        <button type="button" class="btn-print">Imprimir</button>
    </form>

</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../js/vanilla-masker.js"></script>
<script src="../js/index.js"></script>





<?php require "footer.php"?>



