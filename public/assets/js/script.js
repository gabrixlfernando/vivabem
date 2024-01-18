// function showAlert(mensagem, targetElementId, timeout = 3000){
//     var messageDiv = document.getElementById(targetElementId);
//     messageDiv.innerHTML = mensagem;
//     messageDiv.classList.remove('msgContato');

//     setTimeout(function(){
//         messageDiv.classList.add('msgContato');
//     }, timeout);
// }



// document.getElementById('formContato').addEventListener('submit', function(e){

//     e.preventDefault();

//     var data ={
//         nomeContato : document.getElementById('nomeContato').value,
//         emailContato : document.getElementById('emailContato').value,
//         foneContato : document.getElementById('foneContato').value,
//         assuntoContato : document.getElementById('assuntoContato').value,
//         mensContato : document.getElementById('mensContato').value,
//     }

//     fetch('/contato/enviar', {
//         method: 'POST',
//         headers:{
//             'Content-Type': 'application/json',
//             'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('contant')
//         },
//         body: JSON.stringify(data)
//     })
//     .then(response => {
//         if(!response.ok){
//             throw new Error('Erro no envio do email');
//         }
//         return response.json();
//     })
//     .then(data => {
//         showAlert (`<div class="alert alert-sucess">${data.sucess}</div>`, 'contatoMensagem');
//         document.getElementById('formContato').reset();
//     })
//     .catch(errorResponse => {
//         errorResponse.json().then(errorData =>  {
//             if (errorData.errors) {
//                 let errorMessages = Object.values(errorData.errors).map(error => `<div class="alert alert-danger">${error}</div>`).join('');
//                 showAlert(errorMessages, 'contatoMensagem');
//             }
//         });
//     });
// });


function showAlert(mensagem, targetElementId, timeout = 3000) {
    var messageDiv = document.getElementById(targetElementId);
    messageDiv.innerHTML = mensagem;
    messageDiv.classList.remove('msgContato');

    setTimeout(function() {
        messageDiv.classList.add('msgContato');
    }, timeout);
}



document.getElementById('formContato').addEventListener('submit', function(e) {
    e.preventDefault();

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
            throw new Error('Erro na resposta do servidor');
        }
        return response.json();
    })
    .then(data => {
        showAlert(`<div class="alert alert-success">${data.success}</div>`, 'contatoMensagem');
        document.getElementById('formContato').reset();
    })
    .catch(errorResponse => {
        errorResponse.json().then(errorData => {
            if (errorData.errors) {
                let errorMessages = Object.values(errorData.errors).map(error => `<div class="alert alert-danger">${error}</div>`).join('');
                showAlert(errorMessages, 'contatoMensagem');
            }
        });
    });





});

document.getElementById('formEmail').addEventListener('submit', function(e) {
    e.preventDefault();

    var data = {
        emailContato : document.getElementById('emailContato').value
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
            throw new Error('Erro na resposta do servidor');
        }
        return response.json();
    })
    .then(data => {
        showAlert(`<div class="alert alert-success">${data.success}</div>`, 'contatoMensagem');
        document.getElementById('formEmail').reset();
    })
    .catch(errorResponse => {
        errorResponse.json().then(errorData => {
            if (errorData.errors) {
                let errorMessages = Object.values(errorData.errors).map(error => `<div class="alert alert-danger">${error}</div>`).join('');
                showAlert(errorMessages, 'contatoMensagem');
            }
        });
    });





});
