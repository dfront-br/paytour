# Instruções

## Instalando o projeto

Abra um terminal no diretorio desejado e clone esse repositório em seu ambiente, usando o comando:

```
$ git clone https://github.com/dfront-br/paytour.git paytour
```

Em seguida entre no diretorio do projeto:

```
$ cd paytour
```

Execute o comando para instalação dos pacotes

```
$ composer install
```

Copie o arquivo env e defina suas variaveis locais

```
$ cp .env.example .env
```

## Configurando o ambiente

Abra o arquivo ".env" que vc acabou de criar e parametrize com suas informações

-   database

```
DB_CONNECTION=
DB_HOST=            //default 127.0.0.1
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

-   servidor de email

```
MAIL_MAILER=smtp
MAIL_HOST=
MAIL_PORT=
MAIL_USERNAME=
MAIL_PASSWORD=
MAIL_ENCRYPTION=
MAIL_FROM_ADDRESS=
MAIL_FROM_NAME="${APP_NAME}"  //default nome do projeto
```

## Rodando a aplicação

Após configurar os informações do seu banco de dados, corra as migrações para criar as tabelas no banco de dados

```
$ php artisan key:generate
$ php artisan migrate --seed
```

\*obs. você precisa rodar os seeds pois ele gera a tabela que tem relação com os niveis de escolaridade.

Após rodar as migrações suba o servidor do artisan.

```
$ php artisan serve
```

Acesse a url principal do projeto eserá redirecionado para o formulario de envio.

Qualquer dúvida, por favor entre em contato comigo por email thiago.digitalfront@gmail.com

Obrigado pela oportunidade.
