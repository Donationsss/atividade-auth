function email() {
    alert('O código foi enviado para o seu email!' + '\n' + 'Você está sendo redirecionado!')
    setTimeout(function(){window.location.href = 'codigo.php';}, 1000);
}