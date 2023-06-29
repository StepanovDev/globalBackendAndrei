// Add your custom scripts here

// Function to remove a user
function removeUser(id) {
  fetch('./remove_user.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
    },
    body: JSON.stringify({ id: id }),
  })
    .then(function (response) {
      if (response.ok) {
        location.reload(); // Reload the page after successful removal
      } else {
        console.error('Failed to remove user.');
      }
    })
    .catch(function (error) {
      console.error('Error:', error);
    });
}
