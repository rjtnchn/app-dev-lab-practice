## Step 1 — Everyone clones and sets up locally

```bash
git clone https://github.com/<lead-username>/appdev-lab-practice.git
```

Follow `README.md` → Setup (XAMPP, import `database.sql`, etc.) so everyone can actually run the app.

## Step 2 — Task assignments

| Member | Branch | File(s) | Task |
|---|---|---|---|
| Backend A | `feature/backend-create-read` | `api/create.php`, `api/read.php` | Insert a task; return all tasks |
| Backend B | `feature/backend-update-delete` | `api/update.php`, `api/delete.php` | Update a task; delete a task |
| Frontend A | `feature/frontend-list-view` | `public/js/app.js` | `renderTasks()` — fetch from `read.php`, display list with Edit/Delete buttons |
| Frontend B | `feature/frontend-form-crud` | `public/js/app.js` | `handleCreate/Update/Delete()` — wire form + buttons to the API |
| Lead | `feature/lead-scaffold-integration` | — | Reviews all 4 PRs, merges in order, resolves integration issues |

All files already have `TODO` comments marking exactly what to fill in.

**Merge order:** Backend A → Backend B → Frontend A → Frontend B (frontend needs working endpoints to test against).

## Step 3 — Each member works their task

```bash
git checkout -b <your-branch>
# edit your assigned file(s)
git add .
git commit -m "feat(backend): implement create.php and read.php"
git push -u origin <your-branch>
```

## Step 4 — Open PRs, review, merge

1. Open a PR on GitHub, base `main`, fill out the template.
2. Request review from 1 teammate → they comment/approve.
3. Merge in the order from Step 2.
4. If GitHub flags a conflict, resolve it per `CONTRIBUTING.md` → **Resolving merge conflicts**.

## Step 5 — Verify

Pull `main`, reload `http://localhost/appdev-lab-practice/public/` — you should be able to add, edit, and delete a task end-to-end.

## Debrief checklist

- [ ] Everyone wrote a Conventional Commit without help
- [ ] Everyone opened AND reviewed at least one PR
- [ ] At least one merge conflict was resolved
- [ ] The full CRUD app works after merging
