# Changelog - JD Dominican Farm

## [20260129] - 2026-01-29

### Añadido
- **Contenedorización**: Creado `Dockerfile` optimizado para PHP 8.1 con Apache.
- **Extensiones PHP**: Instaladas extensiones críticas: `gd`, `zip`, `intl`, `mbstring`, `mysqli`, `pdo_mysql` y `opcache`.
- **Despliegue ECR**: Creado script de PowerShell `deploy-ecr.ps1` con soporte para múltiples perfiles de AWS.
- **Gestión de Versiones**: Implementada variable global `VERSION` en `Constants.php` y vinculada al footer del sitio.
- **Soporte de Entorno**: Añadida lógica en `App.php` para configurar `baseURL` mediante variables de entorno.

### Cambiado
- **Optimización de Imagen**: Configurado `.dockerignore` para excluir archivos innecesarios (`.git`, `node_modules`, etc.).
- **Permisos**: Ajustados permisos de la carpeta `writable` para el usuario `www-data` de Apache en el contenedor.

### Eliminado
- **Limpieza de Proyecto**: Eliminados archivos y carpetas obsoletos:
    - `composer.json` (Librerías gestionadas manualmente).
    - `.ebextensions` y `.platform` (Configuraciones de Elastic Beanstalk).
    - `README-codeigniter.md` y `phpunit.xml.dist` (Archivos por defecto del framework).

### Corregido
- **Acceso ECR**: Resuelto error 403 Forbidden mediante la creación correcta del repositorio en la cuenta `084375576248` y el uso de perfiles de AWS CLI.
