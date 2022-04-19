define(['ko', 'uiComponent'], function(ko, Component) {
    'use strict';

    return Component.extend({

        initialize: function () {
            this._super();

            this.itemToAdd = ko.observable("Iphone 10");
            this.allItems = ko.observableArray(["Iphone 11", "Iphone 12", "Iphone 13"]); // Initial items
            this.selectedItems = ko.observableArray(["Iphone 12"]);                                // Initial selection

            this.addItem = function () {
                if ((this.itemToAdd() != "") && (this.allItems.indexOf(this.itemToAdd()) < 0)) // Prevent blanks and duplicates
                    this.allItems.push(this.itemToAdd());
                this.itemToAdd(""); // Clear the text box
            };

            this.removeSelected = function () {
                this.allItems.removeAll(this.selectedItems());
                this.selectedItems([]); // Clear selection
            };

            this.sortItems = function() {
                this.allItems.sort();
            };
        }
    });
});
