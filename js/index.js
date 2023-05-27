//faz a mascara do numero de telefone
VMasker(document.querySelector("#tel")).maskPattern("(99) 99999-9999")

//faz a mascara para aceitar apenas numeros
VMasker(document.querySelector("#carga_horaria")).maskNumber()

//funcao para adicionar os campos de formacao academica, profissional, certificacao e idioma
$(document).ready(function() {
    $(".btn-add-academic-info").on("click", () => {
        $(".academic-info").after(`<br><div class='grid'><label for='instituicao'>Instituição:</label><label for='curso'>Curso:</label><input type='text' name='instituicao_academica[]' id='instituicao'><input type='text' name='curso[]' id='curso'></div><div class='grid'><label for='data_inicio_academico'>Data de início:</label><label for='data_fim_academico'>Data de término:</label><input type='date' name='data_inicio_academico[]' id='data_inicio_academico'><input type='date' name='data_fim_academico[]' id='data_fim_academico'></div><div class='grid'><label for='status'>Status:</label><label for='turno'>Turno:</label><select name='status[]' id='status'><option value='cursando'>Cursando</option><option value='concluido'>Concluído</option><option value='trancado'>Trancado</option></select><select name='turno[]' id='turno'><option value='matutino'>Matutino</option><option value='vespertino'>Vespertino</option><option value='noturno'>Noturno</option></select></div>`)
    })

    $(".btn-add-professional-info").on("click", () => {
        $(".professional-exp").after(`<br><div class='grid'><label for='empresa'>Empresa:</label><label for='cargo'>Cargo:</label><input type='text' name='empresa[]' id='empresa'><input type='text' name='cargo[]' id='cargo'></div><div class='grid'><label for='data_inicio_profissional'>Data de início:</label><label for='data_fim_profissional'>Data de término:</label><input type='date' name='data_inicio_profissional[]' id='data_inicio_profissional'><input type='date' name='data_fim_profissional[]' id='data_fim_profissional'></div><div class='grid'><label for='atividades'>Atividades:</label><span style='display: flex; gap: 8px; align-items:center;'><input type='checkbox' name='emprego_atual[]' id='emprego_atual' onchange='checaEmpregoAtualCheckbox()'><p>É meu emprego atual</p></span><textarea name='atividades[]' id='atividades' cols='30' rows='10'></textarea></div> `)
    })

    $(".btn-add-certification-info").on("click", () => {
        $(".certification").after(`<br><div class='certification'><div class='grid'><label for='certificacao'>Certificação:</label><label for='instituicao_certificado'>Instituição:</label><input type='text' name='certificacao[]' id='certificacao'><input type='text' name='instituicao_certificado[]' id='instituicao_certificado'></div><div class='grid'><label for='data_inicio_certificacao[]'>Data de início:</label><label for='data_fim_certificacao[]'>Data de término:</label><input type='date' name='data_inicio_certificacao[]' id='data_inicio_certificacao'><input type='date' name='data_fim_certificacao[]' id='data_fim_certificacao'></div><div class='grid'><label for='carga_horaria'>Carga horária</label><span></span><input type='number' name='carga_horaria[]' id='carga_horaria'></div></div>`)
    })

    $(".btn-add-language-info").on("click", () => {
        $(".language").after(`<div class='grid'><label for='idioma'>Idioma:</label><label for='nivel'>Nível:</label><input type='text' name='idioma[]' id='idioma'><select name='nivel[]' id='nivel'><option value='basico'>Básico</option><option value='intermediario'>Intermediário</option><option value='avancado'>Avançado</option></select></div> `)
    })

    //faz a validação dos campos obrigatórios
    $(".btn-print").on("click", () => {
        let isFirstNameEmpty
        let isLastNameEmpty
        let isEmailEmpty
        let isBirthDateEmpty

        isFirstNameEmpty = $("#fname").val() == "" ? true : false
        isLastNameEmpty = $("#lname").val() == "" ? true : false
        isEmailEmpty = $("#email").val() == "" ? true : false
        isBirthDateEmpty = $("#birth-date").val() == "" ? true : false

        if(isFirstNameEmpty == false && isLastNameEmpty == false && isEmailEmpty == false && isBirthDateEmpty == false) {
            $("#form").submit()
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Preencha os dados obrigatórios!',
              })
        }  
    })

})

checaEmpregoAtualCheckbox = () => {
    
    if($("#emprego_atual").prop("checked") == true){
        $("#data_fim_profissional").attr("disabled", true)
        console.log("marcado")
    } else {
        $("#data_fim_profissional").attr("disabled", false)
        console.log("desmarcado")

    }
}



















