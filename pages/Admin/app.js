const food_image = document.querySelector('.food_image');
const submit = document.querySelector('.btn-submit');
const btnDelete = document.querySelector('.btn-delete');

const food_id = document.querySelector('.food_id');
const food_name = document.querySelector('.food_name');
const food_price = document.querySelector('.food_price');
const food_category = document.querySelector('.food_category');
const food_rating = document.querySelector('.food_rating');
const food_preparationTime = document.querySelector('.food_preparationTime');
const food_orderCount = document.querySelector('.food_orderCount');
const food_description = document.querySelector('.food_description');
var food_photo = undefined;

const convertIMG = async (image) => {
   return new Promise((resolve, reject) => {
        const reader = new FileReader();
        reader.onloadend = () => {
            try {
                let data = (reader.result).split(',')[1];
                
                resolve(data);
            } catch(error) {
                reject(error);
            }
        }
        reader.onerror = (error) => {
            reject(error);
        }
        reader.readAsDataURL(image);
   }) 
}

const postAPI = async () => {
    const food_image = await food_photo;
    const postData = fetch('../../Controller/__foodItem.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: new URLSearchParams ({
            'method': "insert",
            'foodID': food_id.value,
            'foodName': food_name.value,
            'foodPrice': food_price.value,
            'foodCategory': food_category.value,
            'foodRating': food_rating.value,
            'foodPreparationTime': food_preparationTime.value,
            'foodOrderCount': food_orderCount.value,
            'foodDescription': food_description.value,
            'foodPhoto': food_image
        })
    })
    const status = (await postData).json();

    if(status) {
        console.log("inserted Successfully");
        return;
    }
    console.log("ERROR Insertion Failed");
    return;
}

const checkAPI = async (fid) => {
    const postData = await fetch('../../Controller/__foodItem.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: new URLSearchParams ({
            'method': "check",
            'foodID': fid,
        })
    })

    const status = await postData.json();
    return status;
}

const getAPI = async (fid) => {
    const postData = await fetch('../../Controller/__foodItem.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: new URLSearchParams ({
            'method': "all",
            'foodID': fid,
        })
    })

    const status = await postData.json();
    return status;
}

const updateAPI = async (
    item_name,
    item_price,
    item_category,
    item_rating,
    item_time,
    item_count,
    item_description,
    item_photo,
    item_id
) => {
    const postData = await fetch('../../Controller/__foodItem.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: new URLSearchParams ({
            'method': "update",
            name: item_name,
            price: item_price,
            category: item_category,
            rating: item_rating,
            time: item_time,
            count: item_count,
            description: item_description,
            photo: item_photo,
            id: item_id

        })
    })

    const status = await postData.json();
    if(!status.response) {
        alert("Cannot be Updated");
        return;
    }
    alert("Updated Successfully");
    return;
}

const deleteAPI = async (fid) => {
    const postData = fetch('../../Controller/__foodItem.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: new URLSearchParams ({
            'method': "delete",
            'foodID': fid,
        })
    })

    const status = (await postData).json();

    if(status) {
        console.log("inserted Successfully");
        return true;
    }
    console.log("ERROR Insertion Failed");
    return false;
}

food_image.addEventListener('change', async (e) => {
    let temp = e.target.files[0];
    food_photo = await convertIMG(temp);

    console.log(food_photo);
});

submit.addEventListener('click', () => {
    postAPI();
})

const modalDeleteCheck = document.querySelector('.modal-delete-check');
const modalDeleteCancel = document.querySelector('.modal-delete-cancel');
const modalDeleteConfirm = document.querySelector('.modal-delete-confirm');

const toggleModal = () => {
    const modal = document.querySelector('.modal');
    modal.classList.toggle('modal-hidden');
    modal.classList.toggle('modal-visible');
}
const toggleDeleteModal = () => {
    const modalDelete = document.querySelector('.modal-delete');
    modalDelete.classList.toggle('modal-delete-hidden');
    modalDelete.classList.toggle('modal-delete-visible');
}

btnDelete.addEventListener('click', () => {
    toggleModal();
    toggleDeleteModal();
}) 

modalDeleteCheck.addEventListener("click", async () => {
    const item_id = document.querySelector('.modal-delete-input');
    const request = await checkAPI(item_id.value);
    if(request.response){
        alert("Item Found");
        return;
    } else {
        alert("Item Not Found");
        item_id.value = "";
        return;
    }

})
modalDeleteCancel.addEventListener("click", () => {
    toggleDeleteModal();
    toggleModal();
})
modalDeleteConfirm.addEventListener("click", () => {
    const item_id = document.querySelector('.modal-delete-input');
    const check = checkAPI(item_id.value);
    if(check.response == false){
        alert("Item not found");
        return;
    }
    const response = deleteAPI(item_id.value);
    if(!response){
        alert("Data Deletion Unsuccessful");
    }
    alert("Data Deletion Successful");
    toggleModal();
    toggleDeleteModal();
})

const btnUpdate = document.querySelector('.btn-update');
const modalUpdateCheck = document.querySelector('.modal-update-check');
const modalUpdateCancel = document.querySelector('.modal-update-cancel');
const modalUpdateConfirm = document.querySelector('.modal-update-confirm');

const item_id = document.querySelector('.modal-update-id');
const item_name = document.querySelector('.modal-update-name');
const item_price = document.querySelector('.modal-update-price');
const item_category = document.querySelector('.modal-update-category');
const item_rating = document.querySelector('.modal-update-rating');
const item_time = document.querySelector('.modal-update-time');
const item_count = document.querySelector('.modal-update-count');
const item_description = document.querySelector('.modal-update-description');
const item_photo = document.querySelector('.modal-update-image');

const toggleUpdateModal = () => {
    const modalUpdate = document.querySelector('.modal-update');
    modalUpdate.classList.toggle('modal-update-hidden');
    modalUpdate.classList.toggle('modal-update-visible');
}

const addUpdateData = (data) => {
    item_id.value = data.food_id;
    item_name.value = data.food_name;
    item_price.value = data.food_price;
    item_category.value = data.food_category;
    item_rating.value = data.food_rating;
    item_time.value = data.food_preparationTime;
    item_count.value = data.food_orderCount;
    item_description.value = data.food_description;
    item_photo.src = `data:image/jpeg;base64,${data.food_photo}`;
}

btnUpdate.addEventListener('click', () => { 
    toggleUpdateModal();
    toggleModal();
}) 

modalUpdateCheck.addEventListener("click", async () => {
    const item_id = document.querySelector('.modal-update-id');
    const request = await checkAPI(item_id.value);
    if(request.response){
        alert("Item Found");
    } else {
        alert("Item Not Found");
        item_id.value = "";
        return;
    }
    const fetchAll = await checkAPI(item_id.value);
    console.log(fetchAll);
    addUpdateData(fetchAll.data);
    
})
modalUpdateCancel.addEventListener("click", () => {
    toggleUpdateModal();
    toggleModal();
})
modalUpdateConfirm.addEventListener("click", async () => {
    const check = checkAPI(item_id.value);
    if(check.response == false){
        alert("Item not found");
        return;
    }
    const request = updateAPI(
        item_name.value,
        item_price.value,
        item_category.value,
        item_rating.value,
        item_time.value,
        item_count.value,
        item_description.value,
        item_photo.src.replace(/^data:image\/jpeg;base64,/, ''),
        item_id.value
    );
    
    // toggleModal();
    // toggleUpdateModal();
})