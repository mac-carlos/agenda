<p align="center">
    <img src="assets/image.png" width="500px">
</p>

Agenda é uma aplicação simples em php, html e css com banco de dados em mysql criada utilizando o framework [Laravel](https://laravel.com/).

## Eixos Solicitados (telas)

### Cadastro dos dados pessoais do contato

- [x] Nome
- [x] CPF (único)
- [x] E-mail (único)
- [x] Data de nascimento (correção de formato)

#### Diferenciais modafoca

- [ ] Criar os tipos das colunas do banco de dados da maneira mais adequada ao tipo de dado salvo (**???**)
- [ ] Validar se o CPF é um número válido no backend

### Cadastro de endereços do contato

- [x] Seletor
- [x] CEP
- [x] Rua
- [x] Número
- [x] Bairro
- [x] Cidade
- [x] Estado (seletor)
- [x] Edição de dados

#### Diferenciais modafoca

- [x] Ao digitar o CEP o sistema vai consultar via Ajax a API [viacep](http://viacep.com.br/), e carregar automaticamente os dados de: rua, bairro, cidade e estado, sendo necessário o usuário somente inserir o número;

### Cadastrar telefones

- [x] Seletor
- [x] Telefone comercial (único)
- [x] Telefone residencial (único)
- [x] Celular (único e obrigatório)
- [x] Edição de dados

#### Diferenciais modafoca

- [ ] Aplicar blur ou keyup nos números de telefone

### Consultar os contatos

- [x] Busca do tipo ```%like%```
- [x] Carregar dados da pesquisa resultante

## Instalação (self-hosted)

### Pré-instalação

#### Instalando o Laravel

> Windows 10

Para gerir as dependêcias instalaremos dois aplicativos [XAMPP](https://www.apachefriends.org/pt_br/index.html) (para o mysql, apache e php) e [Composer](https://getcomposer.org/) (dependências do php).

Certifique-se que a pasta do php está no Path e então basta rodar o seguinte comando.

```bash
composer global require laravel/installer
```

Assim podemos seguir para a intalação do sistema.

### Instalação do Sistema

```bash
git clone https://github.com/mac-carlos/agenda.git

cd agenda

composer install
```

No *XAMPP Control Panel* ative as opções **Apache** e **MySQL** 

Abra seu navegador e navege até ```localhost/phpmyadmin/```

Na barra lateral da esquerda clique em novo e no campo "Nome da base de dados" crie uma DB chamada ```contatos```

Na pasta do projeto faça uma cópia do arquivo ```.env.example``` com o nome de ```.env```.

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=contatos // Substitua esse trecho em .env
DB_USERNAME=root
DB_PASSWORD=
```

no terminal da pasta escreva

```bash
php artisan key:generate

php artisan migrate

php artisan server
```

E pronto, o programa está configurado. 

> Vá ao local-host ```127.0.0.1:8000``` para ver a aplicação.

*(Em caso de dúvidas siga [este tutorial](https://www.youtube.com/watch?v=KrsicG8gfVg))*

## Autor

Feito com ❤️  e muito ☕  por [Carlos Queiroz](https://mac-carlos.github.io/).

## Licença 

Este é um projeto open-source e está sobre a [Licença MIT](LICENSE). 
