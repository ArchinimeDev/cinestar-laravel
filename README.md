<div align="center">

# 🎬 Cinestar API

**API REST para la gestión de una cadena de cines, construida con Laravel 12.**

[![Laravel](https://img.shields.io/badge/Laravel-12.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net)
[![Sanctum](https://img.shields.io/badge/Sanctum-4.0-4f6df5?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com/docs/sanctum)
[![License](https://img.shields.io/badge/License-MIT-22c55e?style=for-the-badge)](LICENSE)

[![Estado](https://img.shields.io/badge/Estado-En_Desarrollo-yellow?style=flat-square)]()
[![API](https://img.shields.io/badge/API-REST-blue?style=flat-square)]()
[![PRs](https://img.shields.io/badge/PRs-Welcome-brightgreen?style=flat-square)]()

*Sistema backend para consultar cines, carteleras, funciones y gestionar reservas.*

</div>

---

## 📖 Descripción

**Cinestar API** es el backend de un sistema de gestión para una cadena de cines. Está construido sobre **Laravel 12** y expone una **API REST** consumible por cualquier cliente (web, móvil o escritorio).

El objetivo del proyecto es centralizar toda la información del negocio cinematográfico —sedes, películas, salas, funciones, horarios y tickets— bajo una arquitectura limpia, escalable y segura mediante **Laravel Sanctum** para la autenticación por tokens.

> ⚠️ **Estado actual:** proyecto en fase temprana de desarrollo. La estructura base de Laravel está configurada y se está comenzando a construir la lógica de dominio.

---

## ✨ Características Previstas

| Módulo | Descripción | Estado |
|---|---|---|
| 🏢 **Cines** | Listado y gestión de sedes | 🚧 En desarrollo |
| 🎥 **Películas** | Catálogo con información detallada | ⏳ Pendiente |
| 🕒 **Funciones** | Horarios y programación por cine | ⏳ Pendiente |
| 💺 **Salas** | Distribución de asientos por sala | ⏳ Pendiente |
| 🎟️ **Tickets** | Reserva y compra de entradas | ⏳ Pendiente |
| 👤 **Usuarios** | Registro y autenticación con Sanctum | ✅ Base lista |
| 🔐 **Autenticación API** | Tokens de acceso con Laravel Sanctum | ✅ Configurado |

---

## 🛠️ Stack Tecnológico

- **Framework:** Laravel 12
- **Lenguaje:** PHP 8.2+
- **Autenticación:** Laravel Sanctum 4.0
- **Base de datos:** MySQL / PostgreSQL / SQLite
- **Gestor de dependencias:** Composer
- **Testing:** PHPUnit

---

## 📂 Estructura del Proyecto

```
cinestar-laravel/
│
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── CinestarController.php         # Controlador web
│   │       └── api/
│   │           └── CinestarController.php     # Controlador API
│   └── Models/
│       └── User.php
│
├── routes/
│   ├── api.php            # Rutas de la API (GET /cines)
│   ├── web.php            # Rutas web
│   └── console.php
│
├── database/
│   ├── migrations/        # Migraciones de la BD
│   └── seeders/
│
├── config/                # Configuración del framework
├── public/                # Punto de entrada (index.php)
├── resources/             # Vistas (Blade)
├── tests/                 # Pruebas unitarias y de feature
│
├── .env.example
├── composer.json
├── artisan
└── README.md
```

---

## 🚀 Instalación y Configuración

### Requisitos previos

- PHP **8.2** o superior
- Composer
- MySQL / PostgreSQL (o SQLite para desarrollo rápido)
- Node.js y NPM (opcional, para el frontend)

### Pasos

1. **Clona el repositorio:**
   ```bash
   git clone https://github.com/ArchinimeDev/cinestar-laravel.git
   cd cinestar-laravel
   ```

2. **Instala las dependencias de PHP:**
   ```bash
   composer install
   ```

3. **Copia el archivo de entorno y genera la clave:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Configura tu base de datos** en el archivo `.env`:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=cinestar
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5. **Ejecuta las migraciones:**
   ```bash
   php artisan migrate
   ```

6. **Inicia el servidor de desarrollo:**
   ```bash
   php artisan serve
   ```

   La API estará disponible en: **`http://127.0.0.1:8000`**

---

## 🔌 Endpoints de la API

| Método | Endpoint | Descripción | Estado |
|---|---|---|---|
| `GET` | `/api/cines` | Obtiene el listado de cines | ✅ Implementado |
| `POST` | `/api/register` | Registro de usuario | ⏳ Pendiente |
| `POST` | `/api/login` | Inicio de sesión (devuelve token) | ⏳ Pendiente |
| `POST` | `/api/logout` | Cierre de sesión | ⏳ Pendiente |
| `GET` | `/api/peliculas` | Catálogo de películas | ⏳ Pendiente |
| `GET` | `/api/funciones` | Funciones por cine y fecha | ⏳ Pendiente |

### Ejemplo de respuesta

**`GET /api/cines`**
```json
{
  "data": [
    {
      "id": 1,
      "nombre": "Cinestar Salaverry",
      "direccion": "Av. Salaverry 2456, Jesús María",
      "ciudad": "Lima"
    }
  ],
  "message": "Registros encontrados"
}
```

---

## 🗺️ Roadmap

- [x] Configuración inicial de Laravel 12
- [x] Instalación y configuración de Laravel Sanctum
- [x] Endpoint básico `GET /api/cines`
- [ ] Modelo y migración de `Cine`
- [ ] Modelo y migración de `Pelicula`
- [ ] Modelo y migración de `Sala` y `Funcion`
- [ ] CRUD completo de cada entidad
- [ ] Autenticación de usuarios con tokens
- [ ] Reserva de tickets
- [ ] Documentación con Swagger / OpenAPI
- [ ] Tests unitarios y de integración
- [ ] Despliegue en producción

---

## 🧪 Testing

Ejecuta la suite de pruebas con:

```bash
php artisan test
```

o con PHPUnit directamente:

```bash
./vendor/bin/phpunit
```

---

## 🤝 Contribuciones

Las contribuciones son bienvenidas. Para contribuir:

1. Haz **Fork** del repositorio
2. Crea una rama: `git checkout -b feature/nueva-funcionalidad`
3. Haz commit: `git commit -m "Añade nueva funcionalidad"`
4. Sube los cambios: `git push origin feature/nueva-funcionalidad`
5. Abre un **Pull Request**

Por favor, asegúrate de seguir las convenciones de código de **PSR-12** y de incluir tests cuando aplique.

---

## 📄 Licencia

Este proyecto está bajo la licencia **MIT**. Consulta el archivo [LICENSE](LICENSE) para más detalles.

---

## 👤 Autor

**ArchinimeDev**

[![GitHub](https://img.shields.io/badge/GitHub-ArchinimeDev-181717?style=for-the-badge&logo=github&logoColor=white)](https://github.com/ArchinimeDev)

---

<div align="center">

### ⭐ Si te gusta el proyecto, dale una estrella en GitHub

**Hecho con ❤️ y mucho café ☕ usando Laravel**

</div>
