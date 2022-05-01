
// 1) create first ui component
// define(['uiElement'], function(UiElement) {
//     'use strict';
//
//     return UiElement.extend({
//         label: 'My first ui component'
//     });
//
// });



//2) get template

define(['uiElement'], function(UiElement) {
    'use strict';

    return UiElement.extend({
        defaults: {
            template: 'Elogic_UiMage/ui-component',
            label: 'Some random numbers:',
            values: [22, 33, 1, 15]
        }

    });

});
