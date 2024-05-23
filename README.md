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

## Requeriments

- Generar una migració amb seeder de 10 aluimnes i 5 cursos d'informàtica, per poder provar la API.

1. Rutes API == 10% ~ 0%
2. Controladors de recursos == 20% ~ 0%
3. Migració de base de dades i seeders == 40% ~ 0%
4. Proves curl (equivalent PostMan) i captures == 30% ~ 0%
5. Codi complet a GitHub (afegiu també .env) == ELIMINATORI