class GenerateValue {
   
    setattributeRandvaluetoplate(){
        let platname = document.querySelector(".platname").value
        let textinput = document.querySelector(".value").value
        let price = document.querySelector(".prix").value
        let value = {plat:platname,ingredient:textinput,prix:price}
        return value
    }
    setStorageItem(){
        let tableauStorage = JSON.parse(localStorage.getItem("attribute")) || [];
        tableauStorage.push(this.setattributeRandvaluetoplate());
        localStorage.setItem("attribute", JSON.stringify(tableauStorage));
        getStorageItem()
    }
 
    removeItem(){
        localStorage.removeItem("attribute")
        getStorageItem()
    }
    
    FilterPrice(){
        
    }
}
