document.querySelector('us').addEventListener('click', function() {
    // Fetch user data from the PHP script
    fetch('users.php')
        .then(response => response.json())
        .then(users => {
            const userTableBody = document.getElementById('playerData');
            userTableBody.innerHTML = ''; // Clear existing data

            // Check if there are users
            if (users.status === 'no_users') {
                userTableBody.innerHTML = '<tr><td colspan="2">No users signed up yet.</td></tr>';
            } else {
                // Loop through users and create table rows
                users.forEach(user => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td>${user.username}</td>
                        <td>${user.email}</td>
                    `;
                    userTableBody.appendChild(row);
                });
            }

            // Show the modal
            $('#usersModal').modal('show');
        })
        .catch(error => {
            console.error('Error fetching user data:', error);
        });
});
