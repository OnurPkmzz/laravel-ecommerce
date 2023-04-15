document.addEventListener('DOMContentLoaded', () => {

});


document.querySelectorAll('form:not(.not-handle)').forEach(element => {
    element.addEventListener('submit', (e) => {

        e.preventDefault();

        console.log('formData : ', new URLSearchParams(new FormData(element )).toString());

        axios.request({
            method: element.getAttribute('method'),
            url: element.getAttribute('action'),
            data: new URLSearchParams(new FormData(element)).toString()
        })
            .then((res) => {
                alert(res?.data);
                console.log(res);
            })
            .catch((err) => {

                let errorMessages = '';

                [...Object.values(err.response.data.errors)].forEach(value => {
                    [...value].forEach(message => {
                        errorMessages += message;
                    });
                });


                alert(errorMessages );
            });

    });

});


