function updateDateTime() {
    const now = new Date();

    // Update date
    const optionsDate = {
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    };
    const formattedDate = now.toLocaleDateString('en-US', optionsDate);
    document.getElementById('tanggal').textContent = formattedDate;

    // Update time
    const optionsTime = {
        hour: '2-digit',
        minute: '2-digit',
        second: '2-digit',
    };
    const formattedTime = now.toLocaleTimeString('en-US', optionsTime);
    document.getElementById('waktu').textContent = formattedTime;
}

// Update date and time every second
setInterval(updateDateTime, 1000);

// Initial update
updateDateTime();