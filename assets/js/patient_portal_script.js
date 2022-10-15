

window.addEventListener('DOMContentLoaded', (event) => {
    console.log('DOM fully loaded and parsed');

    let successModal = new bootstrap.Modal(document.getElementById('successModal'), {});
    let emptyfieldsModal = new bootstrap.Modal(document.getElementById('emptyfieldsModal'), {});


    const urlHeader = window.location.search;
    const urlParams = new URLSearchParams(urlHeader);
    const status = urlParams.get('appointment');
    const error_status = urlParams.get('error');
    
    
    if(status == 'success'){

        successModal.show();
        var modalClose = document.getElementById("closeModal").addEventListener('click', function(){
            successModal.hide();
        });

    }   
    
    else if(error_status == 'emptyfields'){
        
        emptyfieldsModal.show();
        var modalClose = document.getElementById("closeErrorModal").addEventListener('click', function(){
            emptyfieldsModal.hide();
        });
    }
});


