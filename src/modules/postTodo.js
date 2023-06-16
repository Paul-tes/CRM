const postTodo = () => {
  const tasksString = localStorage.getItem('tasks');
  const tasksArray = JSON.parse(tasksString);
  const tasksLength = tasksArray?.length || 0;

  console.log('Number of tasks in local storage:', tasksLength);
  document.querySelector('.todo-card .card-num-sm').textContent = tasksLength;
}

export default postTodo;