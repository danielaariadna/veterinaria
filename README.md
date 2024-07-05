# Página para gestión de una Veterinaria/Centro de adopción hecha para la materia Tópicos Avanzados de Tecnologías Web<br>

:blossom: PHP <br>
:blossom: MVC CODEIGNITER <br>

:exclamation: **A tener en cuenta**<br>
La página NO es responsive, es un proyecto para backend y en el momento que hice la página aún no tenía muchas herramientas para el front, por lo que podrás encontrar muchos errores en esa parte. Puede llegar a ser útil para algún desarrollador/a frontend que quiera re-hacerlo, el backend funciona perfecto y dentro está el volcado sql.

**Consigna:**<br>

# Mi Veterinaria

Implemente, aplicando el patrón MVC, una aplicación web denominada “Mi Veterinaria” que permite realizar altas, bajas, modificaciones y mostrar información de:

- **Mascotas**: Nombre, Raza, Nro. Registro, Edad, Fecha de Alta, Fecha de Defunción.
- **Amos**: Nombre y Apellido, Dirección, Teléfono, Fecha de Alta.
- **Médicos Veterinarios**: Nombre y Apellido, Especialidad, Teléfono personal, Fecha de Ingreso, Fecha de Egreso (para indicar los casos en que el médico deje de trabajar en Mi Veterinaria).

## Relaciones

- Una mascota puede haber tenido varios amos a lo largo de su vida y un amo puede tener o haber tenido varias mascotas. ¿Cómo puede representar esta restricción?
- Un veterinario puede atender a varias mascotas y una mascota puede ser o haber sido atendida por más de un veterinario.
- La relación amo-mascota puede finalizar por dos motivos: 
  - Venta de la mascota
  - Fallecimiento de la mascota

## Se Pide

- Implementar el modelo para mascotas, amos y veterinarios.
- Implementar las vistas: Menú principal, Altas, Bajas, Modificaciones y Mostrar.
- En la vista mostrar se deben considerar cinco opciones:
  1. Mascotas
  2. Amos
  3. Veterinarios
  4. Dado un amo (seleccionado de una lista de amos), mostrar todas las mascotas que tiene o ha tenido
  5. Dada una mascota (seleccionada de una lista de mascotas) mostrar todos los amos que ha tenido (asuma que una mascota solo puede tener un amo a la vez).
- En la vista Alta, deberá permitir registrar un par Amo-Mascota. Si ambos ya están cargados, solo se deberá cargar la relación Amo-Mascota, en caso contrario, previamente se deberá dar de alta el amo y/o la mascota. En el caso de los veterinarios, deberá registrar los datos personales y especialidad de un nuevo médico veterinario.
- La vista Baja eliminará la relación Amo-Mascota y se indicará el motivo: Venta o fallecimiento. En el último caso, se registrará en los datos de la mascota la fecha de fallecimiento y la fecha de fin en la relación Amo-Mascota. En caso de venta solo se registrará esta última fecha. Para el caso de la baja de un veterinario, se registrará la fecha de fin de la relación contractual con la veterinaria del médico.
- La vista Modificación solo permitirá actualizar los datos de un amo, una mascota o un veterinario.
- Implementar el Controlador que permita realizar las tareas descriptas previamente.

## Criterios de Evaluación

- Correcta utilización del patrón MVC en CodeIgniter.
- Funcionalidades de “Mi Veterinaria”.
- Incorporación de datos correctos en los campos de la vista Alta.
- Interfaz de usuario.
- Entrega en tiempo y forma.
