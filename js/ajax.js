    const contactForm = document.getElementById('contact-form');

    contactForm.addEventListener('submit', event => {
        event.preventDefault();;
        const contactSubmit = document.getElementById('submit');

        contactSubmit.disabled = true;

        const body = new FormData(contactForm);

        fetch('https://lucasrouillermonay.dev/web/dev/form_process.php', {
            method:"post",
            body
        })
            .then(response => {
                return response.json();
            })
            .then(response => {
                console.log(response);
                
                if ('error' in response){
                    // Error message
                    const responseForm = document.getElementById('response-form');
                    responseForm.innerText = response.error;
                    responseForm.classList.add('error');

                    // Input Error
                    if ('errorInputs' in response){
                        response.errorInputs.forEach( error => {
                            if (error.errorMessage){
                                const input = document.getElementById(error.id);
                                // Red border
                                input.classList.add('error-input');
                                // Error message
                                input.nextElementSibling.innerHTML = error.errorMessage;
                            } else {
                                const input = document.getElementById(error.id);
                                // Red border
                                input.classList.remove('error-input');
                                // Error message
                                input.nextElementSibling.innerHTML = '';
                            }
                        });
                    }
                } else {
                    const responseForm = document.getElementById('response-form');
                    responseForm.innerText = response.success;
                    responseForm.classList.add('success');
                    document.querySelectorAll('.error-input + .error').forEach(div => {
                        div.innerHTML = '';
                        div.previousElementSibling.classList.remove('error-input');
                    });
                }
            })
            .finally(_ =>{
                contactSubmit.disabled = false;
            });
    });