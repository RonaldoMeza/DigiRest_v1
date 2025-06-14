import './bootstrap';
import 'preline';
import '../css/app.css';


document.addEventListener('livewire:navigated', () => {
    window.HSStaticMethods.autoInit();
}); 

// Inicializa Preline al cargar el DOM
/* document.addEventListener('DOMContentLoaded', () => {
    window.HSStaticMethods?.autoInit();
}); */

// Re-inicializa Preline después de que Livewire actualice el DOM
/* document.addEventListener('livewire:load', () => {
    Livewire.hook('message.processed', () => {
        window.HSStaticMethods?.autoInit();
    });
}); */