// Toast mesajlarını göstermek için fonksiyon
function showToast(message, type) {
    const toastTitle = document.getElementById('toast-title');
    const toastBody = document.getElementById('toast-body');
    const toastElement = document.getElementById('liveToast');
    
    if (!toastTitle || !toastBody || !toastElement) {
        console.error('Toast elements not found');
        return;
    }
    
    toastTitle.textContent = type === 'success' ? 'Success' : 'Error';
    toastBody.textContent = message;
    
    toastBody.style.backgroundColor = type === 'success' ? '#d4edda' : '#f8d7da';
    toastBody.style.color = type === 'success' ? '#155724' : '#721c24';
    
    const toast = new bootstrap.Toast(toastElement);
    toast.show();
}

// Newsletter form işlemleri
$(document).ready(function() {
    $('#newsletter-form').submit(function(e) {
        e.preventDefault();
        
        var $form = $(this);
        var $email = $('#mce-EMAIL');
        var $submitButton = $('#mc-embedded-subscribe');
        
        if (!$email.val()) {
            showToast('Please enter your email address.', 'error');
            return;
        }

        // Disable button and change text
        $submitButton.prop('disabled', true);
        $submitButton.text('Sending...');
        
        $.ajax({
            type: 'POST',
            url: '/mailchimp-subscribe',
            data: {
                'email': $email.val()
            },
            success: function(response) {
                if (response.success) {
                    showToast(response.message, 'success');
                    $email.val('');
                } else {
                    showToast(response.message || 'An error occurred', 'error');
                }
            },
            error: function() {
                showToast('Could not connect to the server', 'error');
            },
            complete: function() {
                // Re-enable button and restore text
                $submitButton.prop('disabled', false);
                $submitButton.text('Subscribe');
            }
        });
    });
});