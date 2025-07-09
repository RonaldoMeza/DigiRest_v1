import './bootstrap';
import '../css/app.css';
import 'preline';
import * as Preline from 'preline';

// Haz accesibles las funciones desde window
window.HSStaticMethods = Preline.HSStaticMethods;
window.HSDropdown = Preline.HSDropdown;
window.HSCollapse = Preline.HSCollapse;

document.addEventListener("livewire:navigated", () => {
    // Inicializa componentes Preline
    window.HSStaticMethods?.autoInit();

    // Rehidrata los dropdowns manualmente
    document.querySelectorAll('[data-hs-dropdown]').forEach(el => {
        new window.HSDropdown(el);
    });

    // Rehidrata los collapses manualmente
    document.querySelectorAll('[data-hs-collapse]').forEach(el => {
        new window.HSCollapse(el);
    });
});






// Re-inicializa Preline después de que Livewire actualice el DOM
/* document.addEventListener('livewire:load', () => {
    Livewire.hook('message.processed', () => {
        window.HSStaticMethods?.autoInit();
    });
}); */