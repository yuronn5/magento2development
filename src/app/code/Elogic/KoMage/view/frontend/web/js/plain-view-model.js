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
define(['ko'], function(ko) {
    'use strict';

    return function () {
        return {
            title: ko.observable("this is a title for view model by KoMage module")
        }
    }
});
