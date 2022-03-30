

fetch('./js/blog.json')
    .then(function(data) { return data.json()})
    .then(function(data) { 
        blogs = data;

        blogs.forEach(function (blog) {
        document.querySelector('.blogHome__secondary').innerHTML += 
            `
            <li>
                <img src="${blog.image}" class= "blogHome__secondary--img" alt="blog image">
                <p class="blogHome__secondary--footer">${blog.footer}</p>
                <h3 class="blogHome__secondary--title">${blog.h3}</h3>
                <p class="blogHome__secondary--text">${blog.text}</p>
                <a href="">Read more...</a>
                
            </li>
            `;
        }
    )})


