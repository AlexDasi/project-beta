const tagsTotales = ['formal', 'hawaiana', 'sport'];
tagsTotales.forEach(function(tag) {
    document.querySelector('footer').innerHTML += `<button class="filter">${tag}</button>`;
})

const camisas = [
    { name: 'Camisa 1', tags: ['sport', 'hawaiana']},
    { name: 'Camisa 2', tags: ['formal', 'hawaiana']},
    { name: 'Camisa 3', tags: ['sport', 'hawaiana']},
    { name: 'Camisa 4', tags: ['formal', 'hawaiana']},
];

document.querySelectorAll('.filter').forEach(function(button) {
    button.addEventListener('click', function() {
        button.classList.toggle('active');

        const list = [];
        document.querySelectorAll('.active').forEach(function(buttonActive) {
             list.push(buttonActive.textContent)
        });
        paintProducts(list)
    })
})

function paintProducts(selectedFilter) {
    document.querySelector('main').innerHTML = '';
    camisas.forEach(function (camisa) {
        if (camisa.tags.includes(...selectedFilter)) {
            document.querySelector('main').innerHTML += `<h1>${camisa.name}</h1>`;
        }
    });
}