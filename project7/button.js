const getButtonRemove = document.querySelectorAll(".remove");

getButtonRemove.forEach(button =>{
    button.addEventListener("click", function(){
        const sure = confirm("Wanna remove this?")
        if(!sure){
            this.removeAttribute("href");
            window.location.reload();
        };
    });
});








