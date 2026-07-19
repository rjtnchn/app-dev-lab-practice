# Contributing Guidelines

## 1. Branching

- `main` is always working code. **Never push directly to `main`.**
- One branch per task, named:
  ```
  <type>/<short-description>
  ```
  Examples: `feature/backend-create-read`, `fix/frontend-typo`

## 2. Commit messages — Conventional Commits

```
<type>(<scope>): <short description>
```

| Type | Use for |
|---|---|
| `feat` | new feature |
| `fix` | bug fix |
| `docs` | documentation only |
| `refactor` | code change, no new behavior |
| `chore` | config/tooling |

Examples:
```
feat(backend): implement create.php and read.php
fix(frontend): correct delete button not refreshing list
docs: update setup steps
```

Rules: imperative mood ("add", not "added"), lowercase after the colon, one logical change per commit.

## 3. Pull Requests

1. Push your branch → open a PR into `main`.
2. Fill out the PR template.
3. Request review from **at least 1 teammate** — don't merge your own PR.
4. Address feedback with new commits on the same branch.
5. Merge using **"Squash and merge"**, then delete the branch.

## 4. Resolving merge conflicts

```bash
git checkout main
git pull origin main
git checkout <your-branch>
git merge main
# fix conflict markers (<<<<<<< / ======= / >>>>>>>) in the affected files
git add .
git commit -m "fix: resolve merge conflict with main"
git push
```

## Cheat sheet

```bash
git checkout -b feature/my-task
git add .
git commit -m "feat: my change"
git push -u origin feature/my-task
git pull origin main
```
