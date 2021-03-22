$(document).ready(function(){
    $('#register').click(function(){
        let nom = $('#nom').val()
        let prenom = $('#prenom').val()
        let email = $('#email').val()
        let password = $('#password').val()
        let cpassword = $('#cpassword').val()

        $.ajax({
            url: 'register.php',
            type: 'POST',
            data: {
                nom: nom,
                prenom: prenom,
                email: email,
                password: password,
                cpassword: cpassword
            },
            success: function(data){
                console.error(data)
                document.location.href = "connexion.php";
            }
        })
    })

    $('#login').click(function(){
        let email = $('#email').val()
        let password = $('#password').val()

        $.ajax({
            url: 'login.php',
            type: 'POST',
            data: {
                email: email,
                password: password,
            },
            success: function(response){
                if (response) {
                    document.location.href = "index.php";
                } else {
                    alert('Mot de passe incorrect');
                }
            }
        })
    })
})