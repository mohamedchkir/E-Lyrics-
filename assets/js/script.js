let btn_addMore = document.getElementById("add")
let duplicate = document.querySelector(".duplicate")
let inputsDiv = document.querySelector(".inputs")

function btn_edit_display() {
    btn_addMore.classList.add("hidden");
    document.getElementById("save").classList.add("hidden");
    document.getElementById("edit").classList.remove("hidden");
}

function editeMusic(id) {

    btn_edit_display();

    let artist = document.getElementById(id).children[0].getAttribute('artist_name')
    let title = document.getElementById(id).children[1].innerText
    let album = document.getElementById(id).children[2].innerText
    let date = document.getElementById(id).children[3].innerText
    let lyrics = document.getElementById(id).children[4].innerText

    document.querySelector("#name").value = title
    document.querySelector("#artist").value = artist
    document.querySelector("#album").value = album
    document.querySelector("#date").value = date
    document.querySelector("#lyrics").value = lyrics
    document.querySelector("#id").value = id
}

function addMusic() {
    document.getElementById('form').reset();
    btn_addMore.classList.remove("hidden");
    document.getElementById("save").classList.remove("hidden");
    document.getElementById("edit").classList.add("hidden");
}

btn_addMore.addEventListener('click', (e) => {

    duplicate.append(inputsDiv.cloneNode(true));

})