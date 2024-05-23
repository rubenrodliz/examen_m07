# Examen M07

## Enunciat

El nostre centre educatiu està immers en la creació d'un aplicatiu de gestió dels alumnes.
Ens planteja crear una API CRUD de gestió d'estudiants amb Laravel.

Es generarà una base de dades en sqlite3 en el directori **API CRUD** de gestió dels estudiants amb Laravel.

## Taules de la base de dades

### Students

- id: integer
- name: string
- email: string
- birthDate: date
- course_id: integer

### Course

- id: integer
- name: string
- price: float

## Requests de la API

- GET /api/students
- POST /api/students
- GET /api/students/{id}
- PUT /api/students/{id}
- DELETE /api/students/{id}

