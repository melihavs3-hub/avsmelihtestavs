// Toast mesajlarını göstermek için fonksiyon
function showToast(message, type) {
    const toastTitle = document.getElementById('toast-title');
    const toastBody = document.getElementById('toast-body');
    const toastElement = document.getElementById('liveToast');
    
    if (!toastTitle || !toastBody || !toastElement) {
        console.error('Toast elementleri bulunamadı');
        return;
    }
    
    toastTitle.textContent = type === 'success' ? 'Başarılı' : 'Hata';
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
            showToast('Lütfen e-posta adresinizi giriniz.', 'error');
            return;
        }

        // Butonu devre dışı bırak ve metnini değiştir
        $submitButton.prop('disabled', true);
        $submitButton.text('Gönderiliyor...');
        
        $.ajax({
            type: 'POST',
            url: '/tr/mailchimp-subscribe',
            data: {
                'email': $email.val()
            },
            success: function(response) {
                if (response.success) {
                    showToast(response.message, 'success');
                    $email.val('');
                } else {
                    showToast(response.message || 'Bir hata oluştu', 'error');
                }
            },
            error: function() {
                showToast('Sunucuya bağlanılamadı', 'error');
            },
            complete: function() {
                // Butonu tekrar aktif et ve metnini geri değiştir
                $submitButton.prop('disabled', false);
                $submitButton.text('Abone Ol');
            }
        });
    });
});