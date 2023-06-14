const postCurrentDate = () => {
    const date = new Date();
    const dayOfWeek = date.getDay();
    const weekdays = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    const currentDate = (date.getMonth() + 1) + '/' + date.getDate() + '/' + date.getFullYear();
    const formattedDate = weekdays[dayOfWeek] + ' ' + currentDate;
    document.querySelector('div.date-div p').textContent = formattedDate;
}

export default postCurrentDate;