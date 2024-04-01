let platList = [];

function addPlat(elem){
    let platId = elem.querySelector("input[type=hidden]").value;
    let platName = elem.querySelector('p').innerText;
    let listePlatElem = document.querySelector("#liste-plats");
    let platTemplate = document.querySelector('#plat-template').cloneNode(true);
    platTemplate.querySelector('p').innerText = platName;
    platTemplate.querySelector("input[type=hidden]").value = platId;
    platTemplate.style.display = "flex"
    listePlatElem.appendChild(platTemplate)
    platList.push(platId)
    console.log(platList)

}

function deletePlat(elem){
    let platId = elem.parentElement.querySelector("input[type=hidden]").value;
    platList.splice(platList.indexOf(platId), 1);
    elem.parentElement.remove();
    console.log(platList)
}
function createMenu(){
    let url = "http://localhost:8080/apimenus-1.0-SNAPSHOT/api/menus/create";
    let data = {
        title: "test",
        description: "une description",
        platList: platList
    };

    fetch(url, {
        method: 'PUT',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    }).then(function(response) {
        return response.json().then(function (O_json) {
            console.log(O_json)
        })
    })
}