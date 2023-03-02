# Prueba técnica

Prueba para el puesto de desarrollador Full Stack.

## Configuración de la base de datos

Para configurar la conexión a la base de datos, sigue los siguientes pasos:

1. Abre el archivo `.env` en la carpeta `backend` de la prueba.
2. Busca la línea que comienza con `DATABASE_URL=` y modifícala con los parámetros de conexión a tu propia base de datos. Por ejemplo:

DATABASE_URL=mysql://user:password@host/db_name?serverVersion=8&charset=utf8mb4

3. Guarda los cambios en el archivo `.env`.
   En la carpeta backend:
4. Ejecuta el comando `composer install`.
5. Ejecuta el comando `php bin/console doctrine:database:create`.
6. Ejecuta el comando `php bin/console doctrine:migrations:migrate`.

## Iniciar el servidor

Para iniciar el servidor sigue los siguientes pasos:

1. Abre una terminal en la carpeta `backend` de la prueba.
2. Ejecuta el comando `symfony server:start` para iniciar el servidor.

El servidor web estará en `http://127.0.0.1:8000`.

## Iniciar el frontend

Para iniciar el frontend de React, sigue los siguientes pasos:

1. Abre una terminal en la carpeta `frontend` de la prueba.
2. Ejecuta el comando `npm install` para instalar las dependencias de Node.js necesarias para el proyecto.
3. Ejecuta el comando `npm run dev` para iniciar el servidor de desarrollo de React.

La página principal de la prueba estará en `http://localhost:5173`.