
      try{
        
        window.onload= () => {
            
    let dvd = document.querySelector("#DVD");
    let furniture = document.querySelector("#Furniture");
    let book = document.querySelector("#Book");

    
    let producttype = document.querySelector("#productType");
    producttype.addEventListener("change", (e) => {
    
        let name = e.target.value;
        if(name == 'dvd'){
            dvd.hidden = false;
            furniture.hidden = true;
            book.hidden = true;
            
        }else if(name == 'furniture'){

            dvd.hidden = true;
            furniture.hidden = false;
            book.hidden = true;
        }else if(name == 'book'){

            dvd.hidden = true;
            furniture.hidden = true;
            book.hidden = false;

        }
        // alert("hello there"+ name);
    })
      }
        
      }catch(e){
        alert(e.message);
      }

      