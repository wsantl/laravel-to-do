# Lista de Tarefas

Aplicação web para gerenciar tarefas com **Laravel**, **Vue.js** e **Tailwind CSS**.

## Pré-requisitos
- PHP >= 8.2
- Composer
- Node.js >= 18.x, npm >= 9.x
- Git

## Instalação

1. **Clonar**
   ```bash
   git clone https://github.com/wsantl/laravel-to-do.git
   cd laravel-to-do

2. **Ambiente**
   ```bash
   cp .env.example .env
   touch database/database.sqlite

3. **Dependências**
   ```bash
   composer install
   npm install
   npm install -D @tailwindcss/postcss@latest postcss@latest autoprefixer@latest

4. **Chave**
   ```bash
   php artisan key:generate

5. **Migrações**
   ```bash
   php artisan migrate

6. **Rodar projeto**
   ```bash
   php artisan serve
   npm run dev

**#### Acessar ####**
    
http://localhost:8000 (Página inicial)
   
http://localhost:8000/login (login)


**Caso haja problemas na instalação das dependências, siga os passos abaixo:**

abra o arquivo php.ini
procure as seguintes linhas:

    ;extension=fileinfo
    ;extension=zip
    ;extension=pdo_sqlite


e remova o ";" do início da linha.
salve e feche o arquivo.
   
   

   
