# AppDev Lab – GitHub Collaboration Practice

Practice repo for rehearsing our GitHub collaboration exam. Stack: **PHP + MySQL** backend, **HTML/CSS/JS** frontend.

## Team

| Role | Name | GitHub Username |
|---|---|---|
| Lead | | |
| Backend | | |
| Backend | | |
| Frontend | | |
| Frontend | | |

## Setup

1. Install [XAMPP](https://www.apachefriends.org/) (or any Apache + PHP + MySQL stack).
2. Start Apache and MySQL.
3. Put this project folder inside `htdocs/`.
4. Import `database.sql` via phpMyAdmin (creates the `appdev_lab_practice` database + `tasks` table).
5. Open `http://localhost/appdev-lab-practice/public/`

## Project structure

```
config/db.php      → MySQL connection (shared by all API files)
api/*.php           → backend endpoints (create, read, update, delete)
public/             → frontend (index.html, css/, js/app.js)
database.sql        → schema + sample data
```

## Guides

- **`CONTRIBUTING.md`** — branching, commit message rules, PR process. Read this before pushing anything.
- **`EXAM_PRACTICE_GUIDE.md`** — tonight's step-by-step rehearsal and who builds what.
