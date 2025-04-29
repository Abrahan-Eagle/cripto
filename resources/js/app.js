// Importa Bootstrap
import 'bootstrap';
import 'lazysizes';
import 'lazysizes/plugins/parent-fit/ls.parent-fit';


// Cargar jQuery desde CDN (dinámicamente)
const loadjQuery = () => {
    return new Promise((resolve) => {
      if (window.jQuery) {
        resolve(window.jQuery);
      } else {
        const script = document.createElement('script');
        script.src = 'https://code.jquery.com/jquery-3.6.0.min.js';
        script.integrity = 'sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=';
        script.crossOrigin = 'anonymous';
        script.onload = () => resolve(window.jQuery);
        document.head.appendChild(script);
      }
    });
  };

  // Cargar OwlCarousel desde CDN (después de jQuery)
  const loadOwlCarousel = () => {
    return new Promise((resolve) => {
      const script = document.createElement('script');
      script.src = 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js';
      script.integrity = 'sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==';
      script.crossOrigin = 'anonymous';
      script.onload = resolve;
      document.head.appendChild(script);
    });
  };

  // Inicialización
  (async () => {
    await loadjQuery();
    await loadOwlCarousel();

    // Tu código que depende de jQuery y OwlCarousel
    $(document).ready(() => {
      $('.owl-carousel').owlCarousel();
    });
  })();
