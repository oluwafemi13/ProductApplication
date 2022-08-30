    let dvd = document.querySelector("#DVD");
    let furniture = document.querySelector("#Furniture");
    let book = document.querySelector("#Book");

var clearForm = document.getElementById("cancel");
clearForm.addEventListener("click", function(){
    document.getElementById("product_form").reset();
    dvd.style.display = "none";
    furniture.style.display = "none";
    book.style.display = "none";

});

var subForm = document.getElementById("sub");
    subForm.addEventListener("click", function(){
    document.getElementById("product_form").submit();

});



