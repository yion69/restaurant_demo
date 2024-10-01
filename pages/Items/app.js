const btn_menu = document.querySelector('.menu');
const btn_menu_line = document.querySelectorAll('.menu svg .line');
const navmenu = document.querySelector('.nav-menu');
const items = document.querySelectorAll('.data-item');

btn_menu.addEventListener('click', () => {
    navmenu.classList.toggle('nav-menu-active');
    navmenu.classList.toggle('nav-menu-inactive');
    btn_menu_line.forEach( e => {
        e.classList.toggle('line-active');
        e.classList.toggle('line-inactive');
    }) 
})

const fetchData = async (pageNum) => {
    const request = await fetch('../../Controller/test.php', {
        method: 'POST',
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: new URLSearchParams({
            'method': 'all',
            'page' : pageNum-1,
        })
    });
    const response = await request.json();
    return response;
} 

const fetchPageNumber = async () => {
    const request = await fetch('../../Controller/test.php', {
        method: 'GET',
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
    });
    const response = await request.json();
    const url =new URL(window.location.href);
    const param = new URLSearchParams(url.search)
    const currentP = param.get('page');
    renderPagination(response.total_pages,currentP);
}

const renderPagination = (totalPages, currentPage) => {
    const paginationContainer = document.querySelector('.pagination-container');
    paginationContainer.innerHTML = '';

    if (totalPages <= 1) return;

    if (currentPage > 1) {
        const prevButton = createPaginationLink(currentPage - 1, 'Prev');
        paginationContainer.appendChild(prevButton);
    }

    // Create page number links
    if (totalPages <= 4) {
        for (let i = 1; i <= totalPages; i++) {
            const pageLink = createPaginationLink(i, i, i === currentPage);
            paginationContainer.appendChild(pageLink);
        }
    } else {

        const firstPageLink = createPaginationLink(1, 1, currentPage === 1);
        paginationContainer.appendChild(firstPageLink);

        if (currentPage > 3) {
            const ellipsis = document.createElement('span');
            ellipsis.innerText = '...';
            paginationContainer.appendChild(ellipsis);
        }

        const startPage = Math.max(2, currentPage - 1);
        const endPage = Math.min(totalPages - 1, currentPage + 1);

        for (let i = startPage; i <= endPage; i++) {
            const pageLink = createPaginationLink(i, i, i === currentPage);
            paginationContainer.appendChild(pageLink);
        }

        if (currentPage < totalPages - 2) {
            const ellipsis = document.createElement('span');
            ellipsis.innerText = '...';
            paginationContainer.appendChild(ellipsis);
        }

        const lastPageLink = createPaginationLink(totalPages, totalPages, currentPage === totalPages);
        paginationContainer.appendChild(lastPageLink);
    }

    if (currentPage < totalPages) {
        const nextButton = createPaginationLink(currentPage + 1, 'Next');
        paginationContainer.appendChild(nextButton);
    }
};

const createPaginationLink = (page, text, isActive = false) => {
    const link = document.createElement('a');
    link.href = "#";
    link.className = `pagination-item px-4 py-2 rounded ${isActive ? 'bg-zinc-400 text-gray-900 font-medium' : 'hover:bg-gray-100'}`;
    link.innerText = text;
    link.addEventListener("click", async () => {
        let newPage = await fetchData(text);
        window.location.href = newPage.page;
    })
    return link;
};

const pushItemIntoCart = async (item_id) => {
    console.log(item_id);
    const request = await fetch('../../Controller/__cart.php', {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: new URLSearchParams({
            "food_id": item_id,
            "method": "insert"
        })
    })
    const response = await request.json();
    console.log(response);
}

fetchPageNumber();


window.addEventListener('load', async () => {
    
    const url =new URL(window.location.href);
    const param = new URLSearchParams(url.search)
    const currentP = param.get('page');
    const itemData = await fetchData(currentP);

    const containerText = document.querySelectorAll('.item-name');
    const containerPrice = document.querySelectorAll('.item-price');
    const containerId = document.querySelectorAll('.item-id');
    const containerImg = document.querySelectorAll('.item-img');
    const containerBtn = document.querySelectorAll('.item-btn');
 
    containerBtn.forEach(btn => {
        btn.addEventListener("click", (e) => {
            const parent = btn.parentElement;
            const id = parent.querySelector('.item-id');
            pushItemIntoCart(id.textContent);
        })
    })
    itemData.items.forEach((item,index) => {
        containerId[index].textContent = item.food_id;
        containerText[index].textContent = item.food_name;
        containerPrice[index].textContent = `${item.food_price} MMK`;
        console.log(item.food_photo);
        containerImg[index].src= `data:image/jpeg;base64,${item.food_photo}`;
    })
});