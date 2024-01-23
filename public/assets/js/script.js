function showAlert(mensagem, targetElementId, timeout = 3000) {
    var messageDiv = document.getElementById(targetElementId);
    messageDiv.innerHTML = mensagem;
    messageDiv.classList.remove('msgContato');

    setTimeout(function() {
        messageDiv.classList.add('msgContato');
    }, timeout);
}

function displayError(erros) {
    let todosOsErros = "";

    for (const [key, value] of Object.entries(erros)) {
        todosOsErros += `<div class="alert alert-danger">${value.join(", ")}</div>`;
    }

    if (todosOsErros) {
        showAlert(todosOsErros, "contatoMensagem");
    }
}

function formContato(e){
    e.preventDefault();
    e.stopPropagation();

    var data = {
        nomeContato : document.getElementById('nomeContato').value,
        emailContato : document.getElementById('emailContato').value,
        foneContato : document.getElementById('foneContato').value,
        assuntoContato : document.getElementById('assuntoContato').value,
        mensContato : document.getElementById('mensContato').value
    };


    fetch('/contato/enviar', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify(data)
    })
    .then(response => {
        if (!response.ok) {
            return response.json().then(errorData => {
                throw errorData;
            });
        }
        return response.json();
    })
    .then((data) => {
        if (data.success) {
            showAlert(
                `<div class="alert alert-success">${data.success}</div>`,
                 "contatoMensagem"
            );
            document.getElementById('formContato').reset();
        } else{
            showAlert(
                `<div class="alert alert-danger">Erro ao enviar email.</div>`,
                "contatoMensagem"
            );
        }
    })

    .catch(error => {
            if (error.errors) {
                displayError(error.errors);
            }else {
                console.log("Erro desconhecido", error);
            }
    });
}

function formEmail(e){
    e.preventDefault();
    e.stopPropagation();

    var data = {
        emailContato : document.getElementById('emailContato').value,
    };


    fetch('/contato/enviarnew', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify(data)
    })
    .then(response => {
        if (!response.ok) {
            return response.json().then(errorData => {
                throw errorData;
            });
        }
        return response.json();
    })
    .then((data) => {
        if (data.success) {
            showAlert(
                `<div class="alert alert-success">${data.success}</div>`,
                 "contatoMensagem"
            );
            document.getElementById('formEmail').reset();
        } else{
            showAlert(
                `<div class="alert alert-danger">Erro ao enviar email.</div>`,
                "contatoMensagem"
            );
        }
    })

    .catch(error => {
            if (error.errors) {
                displayError(error.errors);
            }else {
                console.log("Erro desconhecido", error);
            }
    });
}



// document.getElementById('formContato').addEventListener('submit', function(e) {

// });



// document.getElementById('formEmail').addEventListener('submit', function(e) {

// });


