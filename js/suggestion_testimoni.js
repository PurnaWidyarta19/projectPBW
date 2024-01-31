var list = document.getElementById("product_name");
var output = document.getElementById("product_list");

function setSuggestion(value) {
    list.value = value;
    output.innerHTML = "";
}

// Ketika keyword ditulis...
list.addEventListener('input', function () {
    // If the input field is empty, hide the suggestion box
    if (list.value.trim() === "") {
        output.innerHTML = "";
        return;
    }

    // Membuat objek data
    var xmlhttp = new XMLHttpRequest();

    // Cek kesiapan ajax
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            output.innerHTML = xmlhttp.responseText;
        }
    }

    // Mengeksekusi ajax with GET method
    xmlhttp.open('GET', 'ajax_product_list.php?product_name=' + list.value, true)
    xmlhttp.send();
})

// Hide suggestion box when input field loses focus
list.addEventListener('focusout', function () {
    setTimeout(function () {
        output.innerHTML = ""; 
    }, 200);
});

function hideSuggestionBox() {
    output.innerHTML = "";
}
