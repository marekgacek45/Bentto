const brands = document.querySelector("ul.brands");

if(brands){

    const total_brand = brands.children.length;
    
    document.documentElement.style.setProperty("--total-brand", total_brand);
    
    
    for(let i=0;o<total_brand;i++){
        brands.appendChild(brands.children[i.cloneNode(true)])
    }
}