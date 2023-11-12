const footerYearSpan = document.querySelector('#currentYearSpan')

const date = new Date()
const year = date.getFullYear()

if(footerYearSpan){
    footerYearSpan.innerHTML=year
}