# Instagram Copy
<p align="left">
    <img src="https://img.shields.io/badge/Status-Conclu%C3%ADdo-brightgreen?style=for-the-badge"/>
    <img src="https://img.shields.io/github/license/GabrielSchiavo/instagram-copy?color=blue&style=for-the-badge"/>
</p>

Cópia do website do Instagram para fins de estudo, este projeto foi realizado durante as aulas.

## :hammer: Funcionalidades do projeto
- `Formulário de cadastro de usuário`: formulário para o cadastro de novos usuários, com criptografia de senha no banco de dados.
- `Sistema de login`: sistema para o usuário poder fazer login na sua conta criada.
- `Função sair da conta`: função para o usuário se desconectar da conta.


![Página Login](https://user-images.githubusercontent.com/84607831/174880413-5adbf93f-265d-418d-80ce-c1e00ed5fa0e.png)
![Página Feed](https://user-images.githubusercontent.com/84607831/174880424-aa3e03a3-9f7c-4d3f-b57f-c5967acbd856.png)

## :file_folder: Acesso ao projeto
Você pode [acessar o código fonte do projeto](https://github.com/GabrielSchiavo/instagram-copy) ou [baixá-lo](https://github.com/GabrielSchiavo/instagram-copy/archive/refs/heads/master.zip).

## 	:hammer_and_wrench: Abrir e rodar o projeto
Após baixar o projeto, você pode abrir com o Visual Studio Code. Para o projeto funcionar você deve ter configurado em seu PC:
* PHP - Versão >=8.1.4
* XAMPP
* Banco de Dados MySQL

Após configurar todas essas ferramentas, nos arquivos do projeto edite as configurações de conexão do banco de dados no arquivo connect_db.php localizado em /database para as suas configurações escolhidas durante a instalação do MySQL.

Agora importe as configurações do banco de dados no MySQL, utilizando o arquivo DB_insta_copy.sql, localizado na raiz do projeto.

Depois copie a pasta do projeto renomeando-a para "instagram_copy" e cole na pasta htdocs do XAMPP, normalmente localizada em C:\xampp\htdocs.

Agora é digitar a seguinte URL: "http://localhost/instagram_copy/login.php" em seu navegador e o projeto está pronto para ser usado. 

## :heavy_check_mark: Tecnologias utilizadas
* `PHP - 8.1.4`
* `MySQL`
* `HTML 5`
* `CSS 3`
* `XAMPP`
* `Bootstrap - 5.1.0`
