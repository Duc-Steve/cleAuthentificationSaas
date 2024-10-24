
function verifierOngletExistant(route) {
    var tabs = window.open('', '_blank');

    // Récupérer les onglets ouverts depuis le stockage local
    var ongletsOuverts = JSON.parse(localStorage.getItem('ongletsOuverts')) || [];
    
    // Vérifier si la route est dans les onglets ouverts
    var ongletExistant = ongletsOuverts.find(function(onglet) {
        return onglet === route;
    });

    if (ongletExistant) {
        tabs.close(); // Fermer le nouvel onglet
        window.open(route, '_blank').focus(); // Ouvrir l'onglet existant
    } else {
        ongletsOuverts.push(route);
        localStorage.setItem('ongletsOuverts', JSON.stringify(ongletsOuverts));
        tabs.location.href = route;
    }
}