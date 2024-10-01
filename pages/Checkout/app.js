var map = L.map('map').setView([16.8661, 96.1951], 13);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

var marker = L.marker(
    [16.8661, 96.1951],
    {
        draggable: true,
        title: "",
        opacity: 1,
    }
).addTo(map).on('move', setUserLocation);

const mapResetBtn = document.querySelector('.map-reset');
const mapUpdateBtn = document.querySelector('.map-update');
const userLatLng = document.querySelector('.map-latlng');
const userAddress2 = document.querySelector('.map-address-2');
var userLat = null;
var userLng = null; 

function moveToMarker(e) {
    map.setView(e,15);
}

async function fetchLocation(lat,lng) {
    const request = await fetch('../../Controller/__fetchLocation.php', {
        method: "POST", 
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: new URLSearchParams({
            "latitude": lat,
            "longitude": lng,
        })
    }); 
    const response = await request.json();
    return response;
}

function setUserLocation (e) {
    userLat = e.target.getLatLng().lat;
    userLng = e.target.getLatLng().lng;
}

mapResetBtn.addEventListener('click', () => {
    moveToMarker(marker.getLatLng());
})
mapUpdateBtn.addEventListener('click', async () => {
    const data = await fetchLocation(userLat, userLng);
    userAddress2.value = `${data.street}  ${data.town}  ${data.city}`
});

const modal = document.querySelector('.modal');
const btnFinal = document.querySelector('.btn-finish');
const btnModalCancel = document.querySelector('.modal-cancel');
const userHouseAddress = document.querySelector('.house-address');
const userMapAddress = document.querySelector('.map-address-2');
const final_total = document.querySelector('.total');
const final_name = document.querySelector('.final-name');
const final_telephone = document.querySelector('.final-telephone');

btnFinal.addEventListener('click', () => {
    modal.classList.toggle('modal-inactive');
    modal.classList.toggle('modal-active');
    modal.querySelector('.final-amount').textContent = final_total.textContent;
    modal.querySelector('.final-location').textContent = `${userHouseAddress.value}, ${userMapAddress.value}`;
})
btnModalCancel.addEventListener('click', () => {
    modal.classList.toggle('modal-inactive');
    modal.classList.toggle('modal-active');
})

const btnConfirm = document.querySelector('.btn-confirm');
const pushOrder = async () => {
    const request = await fetch('../../Controller/__finalize.php', {
        method: "POST", 
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: new URLSearchParams({
            "name": final_name.value,
            "phone": final_telephone.value,
            "location": modal.querySelector('.final-location').textContent,
            "amount": modal.querySelector('.final-amount').textContent 
        })
    }); 
    const response = await request.json();
    return response;
}

btnConfirm.addEventListener("click", ()=>{
    pushOrder();
    setTimeout(() => {
        window.location.href ='../OrderComplete/index.php';
    }, 1000); 
})