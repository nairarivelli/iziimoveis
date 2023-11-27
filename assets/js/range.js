// Referência para o elemento de input range e para o elemento de exibição do valor
const rangeInput = document.getElementById('rangeInput');
const rangeValue = document.getElementById('rangeValue');

// Função para atualizar o valor exibido conforme o valor do input range muda
rangeInput.addEventListener('input', () => {
    rangeValue.textContent = `R$ ${rangeInput.value},00`;
}); 