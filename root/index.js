let form = $("#form")

form.on("submit",(e)=>{
    e.preventDefault()
    
    let formData = new FormData(form.get(0));
    let request = new XMLHttpRequest()
    request.addEventListener("load",()=>{
        $(".image").append(`<img src="./uploads/${request.responseText}">`)
    })
    request.open("POST","http://localhost:80/root/imageUpload.php")
    request.send(formData)

})