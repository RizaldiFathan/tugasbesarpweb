const   bodySkin=document.querySelectorAll(".body-skin"),
        totalBodySkin=bodySkin.length;
        console.log(totalBodySkin);
        for (let a = 0; a < totalBodySkin; a++) {
            bodySkin[a].addEventListener("change", function(){
                if (this.value==="dark") {
                    document.body.className="dark";
                }
                else{
                    document.body.className="";
                }
            })
        }

document.querySelector(".toggle-style-switcher").addEventListener("click",() =>{
    document.querySelector(".style-switcher").classList.toggle("open");
})