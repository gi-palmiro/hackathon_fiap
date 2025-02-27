import { Instagram, Linkedin } from 'lucide-react';
document.addEventListener('alpine:init', () => {
    // Definindo o store "flux"
    Alpine.store('flux', {
        dark: localStorage.getItem('theme') === 'dark',

        toggle() {
            this.dark = !this.dark;
            localStorage.setItem('theme', this.dark ? 'dark' : 'light');
            document.documentElement.classList.toggle('dark', this.dark);
        }
    });

    // Ao iniciar, aplica o tema de acordo com o localStorage
    document.documentElement.classList.toggle('dark', Alpine.store('flux').dark);
});
