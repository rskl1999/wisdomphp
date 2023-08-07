
// Find logo
const logo = document.querySelector('#school-logo');

$(document).ready(function(){
    $.get("scripts/schoolLogo.php", function(data, status) {
            console.log("Data: " + data + "\nStatus: " + status);
            if(status == 'success') {
                logo.src = '../School-Logo/' + data;
            }
            else {
                logo.src = '../School-Logo/default.png';
            }
    });
});