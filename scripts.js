document.addEventListener('DOMContentLoaded', function () {
    const temaSelect = document.getElementById('tema');
    const fonteSelect = document.getElementById('fonte');
    const daltonicoSelect = document.getElementById('daltonico');

    // Função para alternar entre temas
    temaSelect.addEventListener('change', function () {
        document.body.classList.toggle('tema-claro', temaSelect.value === 'claro');
        document.body.classList.toggle('tema-escuro', temaSelect.value === 'escuro');
    });

    // Função para ajustar o tamanho da fonte
    fonteSelect.addEventListener('change', function () {
        document.body.classList.toggle('fonte-normal', fonteSelect.value === 'normal');
        document.body.classList.toggle('fonte-grande', fonteSelect.value === 'grande');
        document.body.classList.toggle('fonte-muito-grande', fonteSelect.value === 'muito-grande');
    });

    // Função para aplicar tema daltônico
    daltonicoSelect.addEventListener('change', function () {
        document.body.classList.toggle('daltonico', daltonicoSelect.value === 'sim');
    });
});
