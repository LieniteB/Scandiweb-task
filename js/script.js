function selection() {
    if (document.getElementById("size").classList.contains('show')) {
        document.getElementById("size").classList.remove('show')
    }
    if (document.getElementById("hwl").classList.contains('show')) {
        document.getElementById("hwl").classList.remove('show')
    }
    if (document.getElementById("weight").classList.contains('show')) {
        document.getElementById("weight").classList.remove('show')
    }

    if (document.getElementById("productType").value === "DVD"){
        var atribute = document.getElementById("size");
        atribute.classList.toggle("show");
    }else if (document.getElementById("productType").value === "furniture") {
        var atribute = document.getElementById("hwl");
        atribute.classList.toggle("show");
    }else if (document.getElementById("productType").value === "book"){
        var atribute = document.getElementById("weight");
        atribute.classList.toggle("show");
    }

}