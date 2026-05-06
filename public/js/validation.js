document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('form-inscription');
    if (!form) return;

    const mdp        = document.getElementById('mdp');
    const mdpConfirm = document.getElementById('mdp_confirm');
    const mdpError   = document.getElementById('mdp-error');
    const email      = document.getElementById('email');

    function validatePasswords() {
        if (mdp.value && mdpConfirm.value && mdp.value !== mdpConfirm.value) {
            mdpError.classList.remove('hidden');
            mdpConfirm.setCustomValidity('Les mots de passe ne correspondent pas.');
        } else {
            mdpError.classList.add('hidden');
            mdpConfirm.setCustomValidity('');
        }
    }

    mdp.addEventListener('input', validatePasswords);
    mdpConfirm.addEventListener('input', validatePasswords);

    form.addEventListener('submit', function (e) {
        let valid = true;

        // Champs requis
        ['prenom', 'nom', 'email', 'mdp', 'mdp_confirm'].forEach(function (name) {
            const field = form.querySelector('[name="' + name + '"]');
            if (!field) return;
            if (!field.value.trim()) {
                field.classList.add('ring-2', 'ring-red-400');
                valid = false;
            } else {
                field.classList.remove('ring-2', 'ring-red-400');
            }
        });

        // Format email
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (email && !emailRegex.test(email.value)) {
            email.setCustomValidity('Adresse email invalide.');
            email.classList.add('ring-2', 'ring-red-400');
            valid = false;
        } else if (email) {
            email.setCustomValidity('');
        }

        // Longueur mot de passe
        if (mdp && mdp.value.length > 0 && mdp.value.length < 8) {
            mdp.setCustomValidity('Le mot de passe doit contenir au moins 8 caractères.');
            mdp.classList.add('ring-2', 'ring-red-400');
            valid = false;
        } else if (mdp) {
            mdp.setCustomValidity('');
        }

        // Confirmation mot de passe
        validatePasswords();
        if (mdpConfirm && mdpConfirm.validationMessage) {
            valid = false;
        }

        if (!valid) {
            e.preventDefault();
        }
    });
});
