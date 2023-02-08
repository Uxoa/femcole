# FemCole

With this innovative pedagogical application, school teachers can create students and give them marks for each of their trimesters!

In addition, students can consult their grades and get information about their average so that they can get their elbows in more or less 
***

## Table of contents
* [Team Members](#team-members)
* [Screenshots](#screenshots)
* [Technologies](#stacks)
* [Installation](#how-to-install-this-project)
* [Tests](#tests)
* [Methodology](#methodology)
* [Next Steps](#next-steps)

***

## Team Members

| Name | Role | <img src="https://github.com/Yelose/Yelose/blob/main/img/github.png" width="30px" height="30px"> |
| :--- | :---: | :---: |
| Paloma Babot |  Scrum Master | https://github.com/Uxoa |
| Adriana Aguilar |  Product Owner | https://github.com/adrianaguilaruiz |
| Ana Rueda | Developer | https://github.com/anaruedaguiu |
| Beatriz de Ávila | Developer | https://github.com/Beadeavila |
| Esther de Luque | Developer | https://github.com/EstherAma |
| Paula Ramírez | Developer| https://github.com/pagudelo884 |

***

## Screenshots



***

## Stacks

- HTML 5
- CSS 3
- BootStrap 5
- PHP 8.1.10
- Laravel Framework 9.44.0
- MySQL
- DrawSQL
***

## How to install this project

You will need a text editor and perform the following steps:

1. Clone the project
```bash
  git clone https://github.com/Uxoa/femcole
```

2. Go to the project directory
```bash
  cd femcole
```

3. Start MySQL service and create a MySQL database named "femcoledb"

4. Create in the text editor an .env file by copying the contents of .env.example and modify the database name (laravel by femcoledb)

5. Install dependencies
```bash
  npm install
```
```bash
  composer install
```

6. Activate the server and keep this terminal open
```bash
  npm run dev
```

7. Run the PHP server and keep this terminal open
```bash
  php artisan serve
```

8. Migrate database
```bash
  php artisan migrate:fresh --seed
```

***

## Tests
To run the tests, execute the following command(s)
```bash
  php artisan test
```
<img width="259" alt="Screenshot test" src="">

```bash
  vendor/bin/phpunit tests
```

<img width="370" alt="Screenshot test" src="">

***

## Methodology
- TDD
- Agile with Scrum
- Mob and pair programming
***

## Next Steps
