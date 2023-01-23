function btn_edit_display() {
    document.getElementById("edit").classList.remove("hidden");
    document.getElementById("edit").classList.add("block");
    document.getElementById("save").classList.add("hidden");
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