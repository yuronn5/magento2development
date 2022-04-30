// 6 add require js config
var config = {
    map : {
        '*': {
            coffee: 'Elogic_SimpleRequireJsAdd/js/ola'
        }
    }
}

// 7) load module before another one
// var config = {
//     shim: {
//         "Magento_Catalog/js/view/compare-products": {
//             deps: ["Elogic_SimpleRequireJsAdd/js/ola"]
//         }
//     }
// }
