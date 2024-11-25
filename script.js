// Attente que la page soit chargée avant d'exécuter le code JavaScript
document.addEventListener('DOMContentLoaded', function() {
    // Affiche un message dans la console pour vérifier que le JS fonctionne
    console.log('JavaScript chargé !');
    
    // Ajout d'un évènement sur le bouton de soumission du formulaire
    const form = document.querySelector('form');
    form.addEventListener('submit', function(event) {
        // Empêche le rechargement de la page lors de la soumission
        event.preventDefault();
        
        // Récupère les valeurs du formulaire
        const name = document.querySelector('#name').value;
        const email = document.querySelector('#email').value;
        const message = document.querySelector('#message').value;
        
        // Vérifie que les champs ne sont pas vides
        if (name && email && message) {
            // Affiche une alerte de confirmation
            alert('Merci pour votre message, ' + name + ' !');
            // Réinitialise le formulaire
            form.reset();
        } else {
            // Alerte si des champs sont vides
            alert('Veuillez remplir tous les champs.');
        }
    });
});
