const API = "../api";
const taskList = document.getElementById("task-list");
const taskForm = document.getElementById("task-form");
const taskTitleInput = document.getElementById("task-title");

// ─────────────────────────────────────────────────────────
// FRONTEND MEMBER A — branch: feature/frontend-list-view
// ─────────────────────────────────────────────────────────

async function renderTasks() {
  // TODO (Frontend Member A):
  // const res = await fetch(`${API}/read.php`);
  // const tasks = await res.json();
  // taskList.innerHTML = "";
  // tasks.forEach(task => {
  //   const li = document.createElement("li");
  //   li.dataset.id = task.id;
  //   if (task.completed) li.classList.add("completed");
  //   li.innerHTML = `
  //     <span>${task.title}</span>
  //     <div>
  //       <button class="edit-btn">Edit</button>
  //       <button class="delete-btn">Delete</button>
  //     </div>
  //   `;
  //   taskList.appendChild(li);
  // });
  taskList.innerHTML = "<li>TODO: render tasks here</li>";
}

// ─────────────────────────────────────────────────────────
// FRONTEND MEMBER B — branch: feature/frontend-form-crud
// ─────────────────────────────────────────────────────────

async function handleCreate(title) {
  // TODO (Frontend Member B):
  // await fetch(`${API}/create.php`, {
  //   method: "POST",
  //   body: JSON.stringify({ title }),
  // });
  // renderTasks();
}

async function handleUpdate(id, updates) {
  // TODO (Frontend Member B):
  // await fetch(`${API}/update.php`, {
  //   method: "POST",
  //   body: JSON.stringify({ id, ...updates }),
  // });
  // renderTasks();
}

async function handleDelete(id) {
  // TODO (Frontend Member B):
  // await fetch(`${API}/delete.php`, {
  //   method: "POST",
  //   body: JSON.stringify({ id }),
  // });
  // renderTasks();
}

taskForm.addEventListener("submit", (e) => {
  e.preventDefault();
  // TODO (Frontend Member B):
  // handleCreate(taskTitleInput.value);
  // taskTitleInput.value = "";
});

// TODO (Frontend Member B): use event delegation for dynamic Edit/Delete buttons
// taskList.addEventListener("click", (e) => {
//   const li = e.target.closest("li");
//   if (!li) return;
//   const id = parseInt(li.dataset.id);
//   if (e.target.classList.contains("delete-btn")) handleDelete(id);
//   if (e.target.classList.contains("edit-btn")) {
//     const newTitle = prompt("New title:");
//     if (newTitle) handleUpdate(id, { title: newTitle });
//   }
// });

renderTasks();
