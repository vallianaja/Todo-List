document.addEventListener('DOMContentLoaded', function () {
    displayTasks();
});

function displayTasks() {
    const todoList = document.getElementById('list-task');
    todoList.innerHTML = '';

    fetch('backend.php') // Ganti dengan URL API sesuai dengan file backend php Anda
        .then(response => response.json())
        .then(data => {
            data.forEach(task => {
                // console.log(task)

                const isiList = document.createElement('div');
                isiList.classList.add('isi-list');
                

                const isiText = document.createElement('p');
                isiText.textContent = task.task_name;

                if(task.completed === '1') {
                    isiText.classList.add('done');
                }
                
                const areaButton = document.createElement('div');
                areaButton.classList.add('areaButton');

                const isiButton = document.createElement('div');
                isiButton.classList.add('isiButton');
                isiButton.innerHTML =`<button onclick="toggleTask(${task.id})">✔</button>
                <button onclick="deleteTask(${task.id})">✘</button>`

                todoList.appendChild(isiList);
                isiList.appendChild(isiText);
                isiList.appendChild(isiButton);
            });
        });
}

function addTask() {
    const taskInput = document.getElementById('input-text');
    const task = taskInput.value.trim();

    if (task !== '') {
        fetch('backend.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    task
                }),
            })
            .then(() => {
                taskInput.value = '';
                displayTasks();
            });
    }
}

function toggleTask(id) {
    fetch(`backend.php?id=${id}`, {
            method: 'PUT',
        })
        .then(() => displayTasks());
}

function deleteTask(id) {
    fetch(`backend.php?id=${id}`, {
            method: 'DELETE',
        })
        .then(() => displayTasks());
}