const tagsTotales = ['urban', 'sober', 'monochromatic', 'tropical', 'colorful', 'beach', 'vintage', 'arty'];
tagsTotales.forEach(function(tag) {
    document.querySelector('footer').innerHTML += `<button class="filter">${tag}</button>`;
})

//let camisas = []
//const CamisasAsString = camisas.join 

fetch('./js/camisas.json')
    .then(function(data) { return data.json()})
    .then(function(data) { 
        camisas = data;
    })

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
    document.querySelector('.stl__list').innerHTML = '';
    camisas.forEach(function (camisa) {
        if (camisa.tags.some(function(tag) { return selectedFilter.includes(tag) })) {
            document.querySelector('.stl__list').innerHTML += 
            `
            <p class="stl__name">${camisa.name}</p> 
            <p class="stl__tags">${camisa.tags}</p> 
            `;
        }
    });
}

