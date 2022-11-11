function selection() {
    if (document.getElementById("size-container").classList.contains('show')) {
        document.getElementById("size-container").classList.remove('show')
    }
    if (document.getElementById("hwl").classList.contains('show')) {
        document.getElementById("hwl").classList.remove('show')
    }
    if (document.getElementById("weight-container").classList.contains('show')) {
        document.getElementById("weight-container").classList.remove('show')
    }

    if (document.getElementById("productType").value === "DVD"){
        var atribute = document.getElementById("size-container");
        atribute.classList.toggle("show");
    }else if (document.getElementById("productType").value === "furniture") {
        var atribute = document.getElementById("hwl");
        atribute.classList.toggle("show");
    }else if (document.getElementById("productType").value === "book"){
        var atribute = document.getElementById("weight-container");
        atribute.classList.toggle("show");
    }

}