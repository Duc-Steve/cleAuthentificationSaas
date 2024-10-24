
document.addEventListener("DOMContentLoaded", function() {
    // Bloquer le retour du navigateur
    window.addEventListener('popstate', function(event) {
        history.pushState(null, null, window.location.href);
    });

    // Bloquer la modification de l'URL
    Object.defineProperty(window, 'location', {
        value: window.location,
        writable: false,
        configurable: false
    });

    window.addEventListener('beforeunload', function(event) {
        Object.defineProperty(window, 'location', {
            value: window.location,
            writable: false,
            configurable: false
        });
    });
});