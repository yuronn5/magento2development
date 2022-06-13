define([
    'jquery',
    'mage/translate',
    'jquery/ui'
], function($, $t) {
    "use strict";

    return function (widget) {

        $.widget('mage.catalogAddToCart', widget, {
            enableAddToCartButton: function (form) {
                var addToCartButtonTextAdded = this.options.addToCartButtonTextAdded || $t('Added'),
                    self = this,
                    addToCartButton = $(form).find(this.options.addToCartButtonSelector);

                addToCartButton.find('span').text(addToCartButtonTextAdded);
                addToCartButton.attr('title', addToCartButtonTextAdded);

                setTimeout(function () {
                    var addToCartButtonTextDefault = self.options.addToCartButtonTextDefault || $t('Add to Cart');

                    addToCartButton.removeClass(self.options.addToCartButtonDisabledClass);
                    addToCartButton.find('span').text(addToCartButtonTextDefault);
                    addToCartButton.attr('title', addToCartButtonTextDefault);

                    var popup = $('<div class="add-to-cart-modal-popup"/>').html($('.page-title span').text() + '<span> has been added to cart.</span>').modal({
                        modalClass: 'add-to-cart-popup',
                        title: $.mage.__("Popup Title"),
                        buttons: [
                            {
                                text: 'Continue Shopping',
                                click: function () {
                                    this.closeModal();
                                }
                            },
                            {
                                text: 'Proceed to Checkout',
                                click: function () {
                                    window.location = window.checkout.checkoutUrl
                                }
                            }
                        ]
                    });
                    popup.modal('openModal');

                }, 1000);

            }
        });

        return $.mage.catalogAddToCart;
    }
});
