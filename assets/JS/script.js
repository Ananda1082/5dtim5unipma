// Fungsi untuk memuat pesan dari localStorage
function loadMessages() {
    const messages = JSON.parse(localStorage.getItem('messages')) || [];
    const messageList = document.getElementById('messages');
    messageList.innerHTML = '';

    messages.forEach((message, index) => {
        const li = document.createElement('li');
        li.innerHTML = `
            <strong>${message.name}</strong> (${message.email}): ${message.message}
            <button onclick="deleteMessage(${index})">Hapus</button>
        `;
        messageList.appendChild(li);
    });
}

// Fungsi untuk menyimpan pesan ke localStorage
function saveMessage(message) {
    const messages = JSON.parse(localStorage.getItem('messages')) || [];
    messages.push(message);
    localStorage.setItem('messages', JSON.stringify(messages));
    loadMessages();
}

// Fungsi untuk menghapus pesan
function deleteMessage(index) {
    const messages = JSON.parse(localStorage.getItem('messages')) || [];
    messages.splice(index, 1);
    localStorage.setItem('messages', JSON.stringify(messages));
    loadMessages();
}

// Event listener untuk formulir kontak
document.getElementById('contactForm')?.addEventListener('submit', function (e) {
    e.preventDefault();

    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;

    if (name && email && message) {
        saveMessage({ name, email, message });

        // Reset formulir setelah terkirim
        e.target.reset();
        alert('Pesan Anda telah terkirim!');
    }
});

// Muat pesan pada saat halaman dimuat
document.addEventListener('DOMContentLoaded', loadMessages);
