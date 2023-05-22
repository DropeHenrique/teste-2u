document.getElementById('cep').addEventListener('blur', function() {
    var cep = this.value.replace('-', '').replace('.', '');
    console.log(cep);
    if (cep.length === 8) {
        axios.get('https://viacep.com.br/ws/' + cep + '/json/')
            .then(function(response) {
                document.getElementById('endereco').value = response.data.logradouro + ', ' + response.data.bairro + ', ' + response.data.localidade + ' - ' + response.data.uf;
            })
            .catch(function(error) {
                console.log(error);
            });
    }
});
