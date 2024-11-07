# API de Posts

Esta es una API simple para gestionar posts en una aplicación web. Permite realizar operaciones CRUD (crear, leer, actualizar, eliminar) sobre los posts, así como obtener la cantidad de posts y obtener los posts por categoría.

## Requisitos previos

Antes de ejecutar este proyecto, asegúrate de tener instalados los siguientes programas en tu máquina:

- **PHP 8.0 o superior**: La API está construida con Laravel, que requiere PHP.
- **Composer**: El gestor de dependencias de PHP.
- **Base de datos MySQL**: La aplicación utiliza MySQL como base de datos para almacenar los posts.
- **Node.js y NPM**: Para correr el servidor de desarrollo si es necesario para el frontend.
- **Postman o cualquier cliente API**: Para hacer solicitudes HTTP a la API.

## Instalación

Sigue estos pasos para instalar y ejecutar el proyecto en tu máquina local.

### 1. Clonar el repositorio

Primero, clona el repositorio desde GitHub en tu máquina local:

```bash
git clone https://github.com/tu_usuario/tu_repositorio.git
2. Instalar dependencias de PHP
Accede al directorio del proyecto y usa Composer para instalar las dependencias del backend:

bash
Copiar código
cd tu_repositorio
composer install
3. Configurar el archivo .env
Copia el archivo .env.example a un archivo .env:

bash
Copiar código
cp .env.example .env
Luego, abre el archivo .env y configura los parámetros de tu base de datos. Deberás agregar las credenciales de tu base de datos MySQL (nombre de la base de datos, usuario, contraseña, etc.):

env
Copiar código
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_de_tu_base_de_datos
DB_USERNAME=tu_usuario_mysql
DB_PASSWORD=tu_contraseña_mysql
4. Generar la clave de la aplicación
Laravel requiere una clave única para encriptar datos. Puedes generar esta clave ejecutando:

bash
Copiar código
php artisan key:generate
5. Migrar la base de datos
Para crear las tablas necesarias en la base de datos, ejecuta las migraciones de Laravel:

bash
Copiar código
php artisan migrate
6. Iniciar el servidor de desarrollo
Ahora, puedes iniciar el servidor de desarrollo de Laravel:

bash
Copiar código
php artisan serve
Esto iniciará el servidor en http://127.0.0.1:8000.

7. Probar la API
Puedes usar Postman o cualquier cliente de API para probar las rutas de la API. Las principales rutas son:

POST /api/posts: Crear un nuevo post.

Cuerpo de la solicitud (JSON):
json
Copiar código
{
  "title": "Título del post",
  "content": "Contenido del post",
  "category_id": 1
}
GET /api/posts: Obtener todos los posts.

GET /api/posts/category/{categoryId}: Obtener posts por categoría.

GET /api/posts/count: Contar el número total de posts.

GET /api/posts/category/{categoryId}/count: Contar el número de posts por categoría.

8. Token de Autenticación (opcional)
Si estás usando Sanctum para autenticación, puedes crear un token de acceso con la ruta /api/login para realizar solicitudes autenticadas.

Ejemplo de Login
Envía una solicitud POST a /api/login con las credenciales de usuario:

json
Copiar código
{
  "email": "usuario@ejemplo.com",
  "password": "tu_contraseña"
}
Si las credenciales son correctas, recibirás un token que puedes usar en las solicitudes:

json
Copiar código
{
  "token": "tu_token_aqui"
}
9. Variables de Entorno
Asegúrate de tener las siguientes variables de entorno configuradas en tu archivo .env:

APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:xxxxxxxxxxxxxxxxxxxxxx
APP_DEBUG=true
APP_URL=http://localhost
10. Dependencias de NPM (si aplicable)
Si tienes un frontend (por ejemplo, en Vue.js o React), puede que necesites instalar las dependencias de Node.js. Ejecuta:

bash
Copiar código
npm install
Luego, ejecuta el servidor de desarrollo:

bash
Copiar código
npm run dev
Contribuciones
¡Las contribuciones son bienvenidas! Si deseas contribuir a este proyecto, por favor sigue estos pasos:

Forkea el repositorio.
Crea una rama para tus cambios (git checkout -b feature/nueva-funcionalidad).
Realiza los cambios necesarios y realiza un commit (git commit -am 'Agrega nueva funcionalidad').
Envía tu pull request.
Licencia
Este proyecto está licenciado bajo la Licencia MIT.

markdown
Copiar código

### Explicación del archivo `README.md`:

1. **Requisitos previos**: Asegúrate de que las personas que descarguen el proyecto tengan todas las herramientas necesarias instaladas en su máquina.

2. **Instrucciones de instalación**: Paso a paso sobre cómo clonar el repositorio, instalar dependencias y configurar el archivo `.env`.

3. **Rutas de la API**: Proporciona ejemplos de cómo interactuar con la API, incluyendo la creación de posts, la obtención de todos los posts y cómo contar los posts.

4. **Autenticación con Sanctum**: Explica cómo usar el token de autenticación para interactuar con la API de forma segura.

5. **Contribuciones**: Incluye una sección sobre cómo otros desarrolladores pueden contribuir al proyecto.

Con este archivo `README.md`, los usuarios pueden entender rápidamente cómo descargar, configurar y ejecutar tu API en sus máquinas.





