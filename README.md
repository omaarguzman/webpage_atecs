# Dinamic web

Clonar el repo

```bash
  git clone [url]
```

Para iniciar el proyeto se requiere Docker

```bash
  docker-compose up --build (solo la primera vez)
  docker-compose up (levantar el contenedor las siguientes veces)
  docker-compose down (bajar el contenedor)
```

Una vez el contenedor levantado entrar al ssh

```bash
  docker exec -it webBlog-php bash (entrar al ssh para php)
  npm run dev (para levantar el proyecto)
```

Entrar a la base de datos

```bash
  docker exec -it webBlog-mysql mysql -u root -p (pass root)
```

Crear nuevos modelos en livewire y components

```bash
  php artisan krlove:generate:model Post --table-name=post (cambiar los nombres)
  php artisan make:livewire CreatePost (cambiar los nombres)
```
