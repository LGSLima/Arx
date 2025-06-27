document.addEventListener('DOMContentLoaded', function() {
    const modal = new bootstrap.Modal(document.getElementById('loginmodal'));
    const loginbutton = document.getElementById('loginbutton');
    if (loginbutton) {
        modal.show();
    }
});