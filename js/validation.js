const form = document.querySelector("#contact_form");
const send = form.querySelector("#send_message");

send.addEventListener('click', (e)=>
{
    e.preventDefault();
    
    const _name = form.querySelector("#name").value;
    const _email = form.querySelector("#email").value;
    const _phone = form.querySelector("#phone").value;
    const _message = form.querySelector("#message").value;
    
    if([_name,_email,_phone,_message].includes(""))
    {
        alert('all fields must be filled');
    }
    else
    {
        let dataObject = {};
        
        dataObject.name = _name;
        dataObject.email = _email;
        dataObject.phone = _phone;
        dataObject.message = _message;
        
        const options = {
            method:'post',
            body: JSON.stringify(dataObject),
            'Content-Type' : 'application/json; charset=UTF-8' 
        };
        
        fetch(`email.php`, options)
        .then((response)=>
        {
            if(response.ok)
            {
                return response.json();
            }
            else
            {
                document.querySelector("#mail_fail").style.display = "block";
                document.querySelector("#mail_success").style.display = "none";
            }
        })
        .then((data)=>
        {
            send.disabled = true;
            send.style.display = "none";
            document.querySelector("#mail_success").style.display = "block";
            document.querySelector("#mail_fail").style.display = "none";
        });
    }
});