function volumeToggle(button){
    let muted = $(".previewVideo").prop("muted");
    $(".previewVideo").prop("muted", !muted);

    $(button).find("i").toggleClass("fa-volume-mute");
    $(button).find("i").toggleClass("fa-solid fa-volume");
}

function previewEnded() {
    $(".previewVideo").toggle();
    $(".previewImage").toggle();
}