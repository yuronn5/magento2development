// console.log("added by require js");     1) simple add, without config




// 2) with config
// define(function () {
//     'use strict';
//
//     return function (config){
//         console.log("this added by require js with config", config);
//     }
// })

// 3) for div selector
// define(function () {
//     'use strict';
//
//     return function (config, element){
//         console.log(element);
//     }
// })



// 4) for special selector
// define(function () {
//     'use strict';
//
//     return function (config, element){
//         console.log(element);
//     }
// })


// 5) data mage init
// define(function () {
//     'use strict';
//
//     return function (config, element){
//         console.log(element);
//     }
// })


// 6) with require js config

define(function () {
    'use strict';

    return function (config, element){
        console.log(element);
    }
})


// 7) load module before another one
// define(function () {
//     'use strict';
//
//     console.log('---module is loaded before compare products ---');
// })
