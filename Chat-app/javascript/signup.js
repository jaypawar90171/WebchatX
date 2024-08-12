const form = document.querySelector(".signup form"),
continueBtn = form.querySelector(".button input");

form.onsubmit = (e)=>
{
    e.preventDefault();  //preaventing from form submittingp
}

continueBtn.onclick = ()=>
{
    //ajax starts form here
    let xhr = new XMLHttpRequest();  // creating xml object
    xhr.open("POST", "php/signup.php", true);
    xhr.onload = ()=>
    {
        if(xhr.readyState === XMLHttpRequest.DONE)
        {
            if(xhr.status === 200)
            {
                let data = xhr.response;
                console.log(data);
            }
        }
    }

    //send the form data through ajax tom php
    let formdata = new formdata(form);  // new object named formdata
    xhr.send(formdata);  // this is used to send the form data through php
}