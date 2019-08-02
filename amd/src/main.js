// Por obligación debemos llamar nuestro codigo con define (Debe ser la unica pieza de codigo) no es obligatorio
// especificar el nombre del modulo (por defecto el nombre será el nombre de archivo y el componente) esto se debe a
// que utilizar el define evitará conflictos del componente y se asegura que no posee variables globales que puedan
// dar problemas como colisionar a futuro.

define(['local_student_reports/vuejs'], function(Vue) {
  "use strict";

    function init(var_php_to_vue) {
      new Vue({
        delimiters: ["[[", "]]"],
        el: "#app",
        data: {
            message: var_php_to_vue
        }
      });
    }
  return {
      init: init
  };
});

// Tambien podemos utilizar otros modulos como jquery de la siguiente manera
// define(['jquery'], function($) {
//   return {
//       init: function() {
//         $(".someclass").change(function() {
//               alert("It changed!!");
//           });
//       }
//   };
// });