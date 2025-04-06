# 🎨 Bladefy

**Bladefy** es una colección moderna y reutilizable de componentes Blade para Laravel, inspirada en la simplicidad y flexibilidad de Bootstrap. Diseñada para acelerar tu desarrollo frontend sin salir de Laravel.

---

## 🚀 Características

- ✅ Componentes Blade reutilizables y personalizables
- 💨 Inspirados en Bootstrap para facilitar estilos conocidos
- ⚙️ Fácil de instalar y configurar
- 🧩 Estructura modular y escalable
- 🛠️ Compatible con Laravel 10+ y Bootstrap 5

---

## 📦 Instalación y configuración

1. Consulta los requisitos previos (Laravel 10+ y Bootstrap 5).

2. Este paquete publica un archivo **config/bladefy.php**. Si ya tienes un archivo con ese nombre, debes renombrarlo o eliminarlo.

3. En el **composer.json** de tu proyecto raíz, agrega:

```bash

   "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/migcube1/bladefy.git"
        }
    ]

```

4. Instala el paquete a través de composer :

```bash

    composer require migcube1/bladefy:dev-master

```

5. Debes publicar el provedor de servicios de Bladefy : 

```bash

    php artisan vendor:publish --provider="Migcube1\Bladefy\BladefyServiceProvider"

```
6. Verifica que los assets hayan sido publicados correctamente, asegúrate de que los siguientes archivos y directorios se encuentren en tu proyecto:

    * **app/View/Components/Ui/**  – Contiene los componentes Blade del paquete.
    * **config/bladefy.php** – Archivo de configuración del paquete.
    * **resources/views/components/ui/** – Contiene las vistas Blade del paquete.

## Autor ✒️

- **Miguel Angel Leyva Bejarano** - _Desarrollador_ - [migcube1](https://github.com/migcube1)


## Licencia 📄

Este proyecto está bajo la Licencia MIT License - mira el archivo [LICENSE](LICENSE) para detalles.