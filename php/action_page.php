<?php 
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $data_nasc = $_POST['data_nasc'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $estado_civil = $_POST['estado_civil'];
    $instituicao_academica = $_POST['instituicao_academica'];
    $curso = $_POST['curso'];
    $data_inicio_academico = $_POST['data_inicio_academico'];
    $data_fim_academico = $_POST['data_fim_academico'];
    $status = $_POST['status'];
    $turno = $_POST['turno'];
    $empresa = $_POST['empresa'];
    $cargo = $_POST['cargo'];
    $data_inicio_profissional = $_POST['data_inicio_profissional'];
    $data_fim_profissional = $_POST['data_fim_profissional'];
    $atividades = $_POST['atividades'];
    $carga_horaria = $_POST['carga_horaria'];
    $certificado = $_POST['certificacao'];
    $instituicao_certificado = $_POST['instituicao_certificado'];
    $idioma = $_POST['idioma'];
    $nivel = $_POST['nivel'];

    if($tel == ""){
        $tel = "Não informado";
    } 
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de currículos V0.0.1</title>
    <meta name="description" content="Simples gerador de curriculo utilizando PHP como linguagem back-end">
    <script src="https://kit.fontawesome.com/62c44247f4.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.3.0/paper.css">
    <link rel="stylesheet" href="../css/style-print.css">
    <style>@page { size: A4 }</style>
</head>
<body class="A4">
    <section class="sheet padding-10mm">
        <div class="container">
            <h1 style="text-align: center;">Currículo</h1>
            <div class="personal-data">
                <p class="title-personal" >Dados pessoais</p>
                <?php 
                    $today = date('Y');

                    echo "<p class='full-name'> $fname $lname</p>";
                    echo "<p class='data-nasc'><b>Data de nascimento: </b>" . date('d/m/Y',strtotime($data_nasc)) . "  <b>Idade: </b>" . 
                    $today - date('Y', strtotime($data_nasc)) ."  <b>Estado Civil:</b> " . ucfirst($estado_civil) . "</p>";
                    echo "<p class='tel'><b>Telefone: </b>" . $tel ."</p>";
                ?>
            </div>
            <div class="academic-data">
                <p class="title-academic">Formação acadêmica</p>
                 <?php
                    for($i = 0; $i < count($curso); $i++){
                        echo "<ul><li><p>". $curso[$i] . " - " . $instituicao_academica[$i] . " ⏐ " . date('Y', strtotime($data_inicio_academico[$i])) . " - " .  date('Y', strtotime($data_fim_academico[$i])) .  " ⏐ " . ucfirst($status[$i]) . " ⏐ " . 
                        ucfirst($turno[$i]) ."</p></li></ul>";
                    }
                 ?>
            </div>
            <div class="profissional-data">
                <p class="title-profissional">Experiência profissional</p>
                <?php 
                    for($i = 0; $i < count($empresa); $i++){
                        echo "<ul><li><p>". $empresa[$i] . " - " . $cargo[$i] . " ⏐ " . date('Y', strtotime($data_inicio_profissional[$i])) . 
                        " - " . date('Y', strtotime($data_fim_profissional[$i])) .  " ⏐ " . ucfirst($atividades[$i]) ."</p></li></ul>";
                    }
                ?>
            </div>
            <div class="certificate-data">
                <p class="title-certificate">Certificações</p>
                <?php 
                    for($i = 0; $i < count($certificado); $i++){
                        echo "<ul><li><p>". $certificado[$i] . " - " . $instituicao_certificado[$i] . " ⏐ " . " Carga horária: ". $carga_horaria[$i] . " Horas" . "</p></li></ul>";
                    }
                ?>
            </div>
            <div class="language-data">
                <p class="title-language">Idiomas</p>
                <?php 
                    for($i = 0; $i < count($idioma); $i++){
                        echo "<ul><li><p>". ucfirst($idioma[$i]) . " - " . $nivel[$i] . "</p></li></ul>";
                    }
                ?>
            </div>
            
            

        </div>
    </section>

    <script>
        window.print();
    </script>
    
</body>

