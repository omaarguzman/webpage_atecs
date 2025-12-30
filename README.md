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
  docker exec -it webBlog-app bash (entrar al ssh para php)
  chmod 755 -R html
  chown www-data:www-data -R html
  cd html 
  composer install
  npm install
  apt install nano
  nano /etc/apache2/sites-available/000-default.conf
    (agregar public a la propiedad DocumentRoot)
    
  crear archivo .env

  npm run dev (para levantar el proyecto)
```

Entrar a la base de datos

```bash
  docker exec -it webBlog-mysql mysql -u root -p (pass root)
```

Importar base de datos

```bash
  docker exec -i webBlog-mysql mysql -u root -proot web < web.sql (pass root)
```

Exportar base de datos

```bash
  docker exec -i webBlog-mysql mysql -u root -proot web > web.sql (pass root)
```

Crear nuevos modelos en livewire, components y forms

```bash
  php artisan krlove:generate:model Post --table-name=post (cambiar los nombres)
  php artisan make:livewire CreatePost (cambiar los nombres)
  php artisan livewire:form PostForm (Cambiar los nombres)
```

Crear migrations
``` bash
  php artisan migrate
```
