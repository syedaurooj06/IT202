function breedFound() {
    var xhr = new XMLHttpRequest();
    var typeOfBreed = document.getElementById("input").value;

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("breed").textContent = xhr.responseText;
        }
    };

    xhr.open("GET", "test.php?dogBreed=" + encodeURIComponent(typeOfBreed), true);
    xhr.send();
}
