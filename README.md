# Gerador de currículos 📋

Trabalho desenvolvido por Vinicius Hissayoshi Nishida (RA 09038971) para obtenção de nota para a disciplina de Fundamentos de programação para Internet ministrada pelo Professor Carlos Eduardo Simões Pelegrin na Universidade Paranaense (UNIPAR), curso Sistemas de Informação.

## Estrutura de pastas 📁

- **css**
    - Contém as folhas de estilo em cascata (CSS) utilizadas em todo o projeto.

    - Foi utilizado um arquivo CSS no formato CDN, no caso, `paper.css`, nada mais do que uma folha de estilo para gerar páginas no formato A4

- **img**
    - Contém a imagem utilizada como icone do site (fav-icon).

- **js**
    - Contém os arquivos Javascript:

        - `index.js`  *Scripts utilizados para fazer a validação dos dados no formulário e adicionar novos campos dinamicamente.*  

        - `vannila-masker.js` *Biblioteca utilizada para fazer a máscara em certos campos, como número de telefone e campos somente numéricos.*

    - Foram utilizadas outras bibliotecas, porém, no formato CDN, como:
        - `SweetAlert2` *Biblioteca que altera os alertas padrões do navegador*
        - `JQuery 3.7.0` *Biblioteca Javascript para agilizar no desenvolvimento da aplicação*   
        - `Font Awesome` *Biblioteca utilizada para adicionar icones diversos* 

- **php**  
    - Contém os arquivos PHP:

        - `about.php` *Página com os dados do acadêmico e principais tecnologias utilizadas.* 

        - `action_page.php` *Página que vai processar os dados oriundos do formulário, e no fim, gerar o currículo para impressão.*  

        - `curriculo.php` *Página que contém o formulário.*

        - `footer.php` *Página que contém o rodapé do site.* 

        - `index.php` *Este arquivo é a Home-Page do site.*

        - `navbar.php` *Página que contém a barra de navegação do site* 