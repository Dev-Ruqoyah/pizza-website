// DASHBOARD JS

// ADD BUTTON
const addbtns = document.querySelectorAll('.dash-two')

const productnames = document.querySelectorAll('.pname');
const productprices = document.querySelectorAll('.pprice')
const productquantitys = document.querySelectorAll('.pquantity');
const productimages = document.querySelectorAll('.pimage')

function productdetails(nameOfProduct){
    const addnames = document.querySelectorAll('.addname')
    addnames.forEach(addname =>{
        addname.innerHTML = nameOfProduct
    })

}

// const addnames = document.querySelectorAll('
addbtns.forEach((addbtn,index) =>{
    addbtn.addEventListener('click', () =>{
        const nameOfProduct = productnames[index]
        productdetails(nameOfProduct)
        
    })
})


// PRODUCT DETAILS
