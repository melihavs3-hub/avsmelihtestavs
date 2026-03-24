
window.fbAsyncInit = function () {
    FB.init({
        xfbml: true,
        version: 'v6.0'
    });
};

(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

var chatButton = document.getElementById('chatButton');
var fbRoot = document.getElementById('fb-root');

chatButton.addEventListener('click', function() {
    if (fbRoot.hasAttribute('hidden')) {
        fbRoot.removeAttribute('hidden');
    } else {
        fbRoot.setAttribute('hidden', '');
    }
});