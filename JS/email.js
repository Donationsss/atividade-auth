function email() {
    alert('O código foi enviado para o seu email!' + '\n' + 'Você está sendo redirecionado!')
    setTimeout(function(){window.location.href = 'recuperar.html';}, 1000);
}