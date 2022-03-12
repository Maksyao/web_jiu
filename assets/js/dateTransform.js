const dates = document.querySelectorAll('time');
for (const date of dates) {
    const dateParts = date.textContent.split('-');
    date.textContent = `${dateParts[2]}.${dateParts[1]}.${dateParts[0]}`
}
