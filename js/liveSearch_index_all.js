var keyword = document.getElementById("keyword");
var searchproduct = document.getElementById("searchproduct");

//ketika keywoard ditulis...
keyword.addEventListener('keyup', function(){
    
    //membuat objek data
    var xmlhttp = new XMLHttpRequest();

    //cek kesiapan ajax
    xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
            searchproduct.innerHTML = xmlhttp.responseText;
        }
    }

    //mengeksekusi ajax
    xmlhttp.open('GET','db_searching_index_all.php?keyword=' + keyword.value, true)
    xmlhttp.send();
})