const targetDate = new Date(fecha);

const countdownElement = document.getElementById('countdown');
const actionButton = document.getElementById('actionButton');
function updateCountdown() {
    const now = new Date();
    const timeDifference = targetDate - now;

    if (timeDifference <= 0) {
        countdownElement.innerHTML = '¡Ya iniciaron las votaciones, realiza tu voto <i class="fa fa-check-square-o" style="font-size: 23px" aria-hidden="true"></i>, Ahora!';
        if(actionButton.dataset.text !== "Ir a Votacion"){
            actionButton.innerHTML = 'Iniciar';
        }
        actionButton.disabled = false;
        clearInterval(interval);
        return;
    }
    const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
    const hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);
    countdownElement.innerText = `${days} días, ${hours} horas, ${minutes} minutos, ${seconds} segundos restantes`;
}
const interval = setInterval(updateCountdown, 1000);
updateCountdown();

function actualizar(){
    location.reload();
}


$('#form-votar').submit(function (event) {
    event.preventDefault();
    const selectedValue = $('input[name="lista"]:checked').val();
    const email = $("#email").val() || 0;
    const checkEmail = $("#checkEmail").prop("checked");
    if (!selectedValue) {
        Swal.fire({
            text: 'Por favor selecciona una opción antes de votar.',
            icon: "warning",
            buttonsStyling: false,
            confirmButtonText: "¡Ok, lo tengo!",
            customClass: {
                confirmButton: "btn btn-primary"
            }
        });
        return;
    }
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: urlVotar,
        method: 'POST',
        data: {
            lista: selectedValue,
            email:email || '',
            checkEmail:checkEmail
        },
        beforeSend:function(){
            $("#btn-votar").html("Procesando Voto...");
        },
        success: function (response) {
            console.log(response);
            if(response.success){
                Swal.fire({
                    text: response.message,
                    icon: "success",
                    buttonsStyling: false,
                    confirmButtonText: "¡Ok, lo tengo!",
                    customClass: {
                        confirmButton: "btn btn-primary"
                    }
                }).then(() => {
                });
            }else{
                Swal.fire({
                    text: response.message,
                    icon: "warning",
                    buttonsStyling: false,
                    confirmButtonText: "¡Ok, lo tengo!",
                    customClass: {
                        confirmButton: "btn btn-primary"
                    }
                }).then(() => {
                });
            }
        },
        error: function (error) {
            console.log(error);
            Swal.fire({
                text: error.message,
                icon: "error",
                buttonsStyling: false,
                confirmButtonText: "¡Ok, lo tengo!",
                customClass: {
                    confirmButton: "btn btn-primary"
                }
            }).then(() => {
            });
        }
    }).always(function () {
        $("#btn-votar").html("Votar");
    });
});
