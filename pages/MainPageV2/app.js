const btn_menu = document.querySelector('.menu');
const btn_menu_line = document.querySelectorAll('.menu svg .line');
const navmenu = document.querySelector('.nav-menu');

btn_menu.addEventListener('click', () => {
    navmenu.classList.toggle('nav-menu-active');
    navmenu.classList.toggle('nav-menu-inactive');
    btn_menu_line.forEach( e => {
        e.classList.toggle('line-active');
        e.classList.toggle('line-inactive');
    }) 
})

const fetchData = async () => {
     const request = await fetch('../../Controller/__foodItem.php', {
        method: 'POST',
        header: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: new URLSearchParams({
            'method': 'rating'
        })
    });
    const response = await request.json();
    response.forEach(element => {
        console.log(element);
    });   
}

fetchData();