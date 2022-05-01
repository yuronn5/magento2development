// 1) simple
// define([], function() {
//     'use strict';
//
//     return function () {
//         return {
//             title: "this is a title for view model by KoMage module"
//         }
//     }
// });

//2) with tracking observable to track changes with our title
// in console to track ui component use require('uiRegistry').get('startSimple')
// to change file require('uiRegistry').get('startSimple').title("Surprise") and title will be changed
// define(['ko'], function(ko) {
//     'use strict';
//
//     return function () {
//         return {
//             title: ko.observable("this is a title for view model by KoMage module")
//         }
//     }
// });

// 3) observable array

define(['ko'], function(ko) {
    'use strict';

    return function () {
        const viewModel = {
            label: ko.observable("this is a new title for array by KoMage module"),
            additional_charge: ko.observable(2),
            items: ko.observableArray([
                {name: "Surprise Box", qty: 4, price: 1.5},
                {name: "Chuck Noris Box", qty: 1, price: 7.5},
            ]),
            rowTotal: item => item.qty * item.price,
            total: function () {
                const sum = this.items().map(this.rowTotal)
                    .reduce((acc, curr) => acc + curr);
                return sum + this.additional_charge();
            }
        };
            return viewModel;
    }
});
