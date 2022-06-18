async function Search($key) {
    if ($key != '') {
        let html = '';
        const url = "./api/search/" + $key;
        const response = await fetch(url);
        const result = await response.json();
        const divSearch = document.querySelector('#resultSearch');
        result.forEach(element => {
            const regex = new RegExp('(' + $key + ')', 'gi');
            const productname = element.name.replace(regex, `<b>$1</b>`)
            html += `<li class="d-flex">
            <div class="col-md-4"> <img src="../img/${element.image}" alt="" style="width: 150px" class="img-fluid"></div>
            <div class="col-md-8">
            <div class="row"><a href="./product/${element.id}" style="color: black ; text-decoration: none;">${productname}</a></div>
            <div class="row"><p>${element.description}</p></div>
            </div>
            </li></ul>`
        });
        divSearch.innerHTML = html;
    } else {
        divSearch.innerHTML = "";
    }
}

// const btnComment = document.querySelector('.btn-comment');
// btnComment.addEventListener('click', function() {
//     addComment(this.dataset.productId, this.dataset.url);
// });

// async function addComment(productId, url) {
//     const commentContent = document.querySelector('#comment_content');
//     const rating = document.querySelector('#rating');
//     const data = {
//         product_id: productId,
//         comment_content: commentContent.value,
//         rating: rating.value
//     };
//     const response = await fetch(url, {
//         method: "POST",
//         headers: {
//             'Content-Type': 'application/json',
//             'Accept': 'application/json'
//         },
//         body: JSON.stringify(data)
//     });

//     const result = await response.json();
//     const divComment = document.querySelector('#comments');
//     divComment.innerHTML = '';
//     result.forEach(element => {
//         divComment.innerHTML += `<li class="list-group-item">${element.rating} - ${element.comment_content}</li>`
//     });
//     commentContent.value = '';
//     rating.value = '';
// }