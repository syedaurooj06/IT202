function updateNameInput(selectedUser) {

    var sNameInput = document.getElementById('senderName');
    sNameInput.value = selectedUser; 

}

document.addEventListener("DOMContentLoaded", function (event) {

    let message = document.getElementById("message");
    message.addEventListener("keyup", sendMessages);

});

function sendMessages() {

    let sName = document.getElementById("senderName");
    let sPassword = document.getElementById("senderPassword");
    let message = document.getElementById("message");
    let request = new XMLHttpRequest();

    request.addEventListener("load", function () {

        let warning = document.getElementById("warning");
        if (this.status === 200 && this.readyState === 4 && this.response.trim() === "Invalid User") {
            warning.style.display = "contents";
        } else {
            warning.style.display = "none";
        }

    });

    let queryString =
        "senderName=" + encodeURIComponent(sName.value) +
        "&senderPassword=" + encodeURIComponent(sPassword.value) +
        "&message=" + encodeURIComponent(message.value);
        request.open("GET", "sends.php?" + queryString);
        request.send();

}

const updateAutomatically = setInterval(retrieveMessages, 100);

function retrieveMessages() {

    let sName = document.getElementById("senderName");
    let sPassword = document.getElementById("senderPassword");
    let rName = document.getElementById("receiverName");
    let request = new XMLHttpRequest();

    request.addEventListener("load", function () {

        let messagesInput = document.getElementById("displayedMSG");

        if (this.status === 200 && this.readyState === 4) {
            messagesInput.innerHTML = this.response;
        }

    });

    let queryString =
        "senderName=" + encodeURIComponent(sName.value) +
        "&senderPassword=" + encodeURIComponent(sPassword.value) +
        "&receiverName=" + encodeURIComponent(rName.value);

    request.open("GET", "retrieves.php?" + queryString);
    request.send();

}