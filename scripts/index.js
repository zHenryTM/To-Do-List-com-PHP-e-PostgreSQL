function addTask() {
    const input = document.getElementById('taskInput');
    const taskList = document.getElementById('taskList');

    if (input.value.trim() === '') {
        alert('Por favor, digite uma tarefa!');
        return;
    }

    const li = document.createElement('li');
    li.innerHTML = `
        ${input.value}
        <button class="delete-btn" onclick="deleteTask(this)">Deletar</button>`;

    taskList.appendChild(li);
    input.value = '';
    input.focus();
}

function deleteTask(button) {
    button.parentElement.remove();
}

document.getElementById('taskInput').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') addTask();
});