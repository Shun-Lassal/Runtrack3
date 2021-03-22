$(document).ready(function () {
    show();
})

$('#update').click(function () {
    show();
});


function show() {
    $('#toby').empty();
    $.ajax({
        url: 'users.php',
        success: function (data) {
            data = JSON.parse(data);
            data.forEach(user => {
                let row = $('<tr></tr>');
                let columns = `<td>${user.id}</td><td>${user.prenom}</td><td>${user.nom}</td><td>${user.email}</td>`;
                let button = $(`<button id="${user.id}" class="del">Supprimer</button>`);
                button.on('click', function () {
                    del($(this).attr('id'));
                });
                row.append(columns);
                row.append(button);
                $('#users').append(row);
            });
        }
    })
}

function del(id) {
    $.ajax({
        url: 'delete.php',
        data: {
            'id': id
        },
        type: 'POST',
        success: function(data) {
            alert('Deleted');
            show();
        }
    })
}