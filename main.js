var form = $('#form');
form.submit((e) => {
  e.preventDefault();
  $.ajax({
    type: 'POST',
    url: '/new-user.php',
    data: form.serialize(),
    success: function (data) {
      console.log('Submission was successful.');
      console.log(data);
    },
    error: function (data) {
      console.log('An error occurred.');
      console.log(data);
    },
  });
  window.location.reload()
});

window.onload = () => {
  fetch('/get-users.php')
    .then(users => users.json())
    .then(users => {
      users.forEach(user => {
        $("#users").append(
          `
          <td>${user.name}<td>
          <td>${user.email}<td>
          <td>${user.image}<td>
          `
        )
      });
    })
}