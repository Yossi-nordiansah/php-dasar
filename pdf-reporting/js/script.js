let keyword = document.getElementById("keyword");
let tombolCari = document.getElementById("search-button");
let container = document.getElementById("container");

keyword.addEventListener("keyup", function(){
    
    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200){
            container.innerHTML = xhr.responseText;
        }
    };

    xhr.open('GET', 'get-mhs.php?keyword=' + keyword.value, true);
    xhr.send();
})