document.addEventListener('DOMContentLoaded', function() {
    if (document.getElementById('toast')) {
        var toastElement = document.getElementById('toast');
        var toast = new bootstrap.Toast(toastElement);

        toast.show();
    }
});
