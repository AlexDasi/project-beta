

fetch('./js/blog.json')
    .then(function(data) { return data.json()})
    .then(function(data) { 
        blogs = data;

        blogs.forEach(function (blog) {
        document.querySelector('.blog__secondary').innerHTML += 
            `
            <li>
                <img src="${blog.image}" class= "blog__secondary--img" alt="blog image">
                <h3 class="blog__secondary--title">${blog.h3}</h3>
                <p class="blog__secondary--text">${blog.text}<a href="">Read more...</a></p>
                <p class="blog__secondary--footer">${blog.footer}</p>
                
            </li>
            `;
        }
    )})


