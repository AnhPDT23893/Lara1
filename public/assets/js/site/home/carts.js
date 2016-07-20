/**
 * Created by Pank on 6/7/2015.
 */

var Cart = {

    name: 'CartData',

    /**
     * Get CartData
     *
     * @returns {*}
     */
    data: function() {
        return $.cookie(Cart.name);
    },

    /**
     * Clear cart
     *
     * @returns {*}
     */
    clear: function() {
        return $.removeCookie(Cart.name);
    },

    /**
     * Add item
     *
     * @param item
     */
    add: function(item, next) {

        var data = $.cookie(Cart.name) || new Object();
        data[item.id] = item;
        $.cookie(Cart.name, data);
        if (typeof next !== 'undefined') {
            next();
        }
    },

    /**
     * Remove item
     *
     * @param item
     */
    remove: function(id, next) {

        var data = $.cookie(Cart.name) || null;
        if (data) {
            delete data[id];
            $.cookie(Cart.name, data);
        }
        if (typeof next !== 'undefined') {
            next();
        }
    },

    /**
     * Update item
     *
     * @param item
     * @param data
     */
    update: function(item, data, next) {

        if (typeof next !== 'undefined') {
            next();
        }
    }
};


var Order  = {

    init: function () {
        $.cookie.json = true;

        this.add();
        this.loadCart();
        this.topCartClear();
        this.topCartRemove();
        //this.order();
        this.loadOrderCart();
    },

    loadCart: function()
    {
        $('.cart-btn', '#top-cart').click(function() {
            Order.topCartRefresh();
        });
    },

    /**
     * Add product to cart
     */
    add: function ()
    {
        $('.add2cart').unbind('click').on('click', function (e) {
            e.preventDefault();

            var btn = $(this);
            var item = {
                id: btn.data('id'),
                name: btn.data('name') || '',
                price: btn.data('price') || '',
                quantity: btn.data('quantity') || 1,
                image: btn.data('img') || 1
            };
            Cart.add(item, function () {
                btn.text('View cart');
            });
        });
    },

    /**
     * Clear all item in topCart
     */
    topCartClear: function() {

        $('.empty-cart-btn', '#top-cart').on('click', function() {
            Cart.clear();
            Order.topCartRefresh();
        });
    },

    /**
     * Update item in topCart
     */
    topCartRefresh: function() {

        var topCart = $('#top-cart');
        var list = $('.list-item', topCart);
        var emptyItem = $('.cart-empty', topCart);
        var data = Cart.data() || {};
        var totalPrice = 0;

        list.html('');

        for (var key in data) {
            var newItem = $(emptyItem).clone();

            $('.pr-name', newItem).html(data[key].name);
            $('.pr-label', newItem).html(data[key].price);
            $('.pr-qty', newItem).html(data[key].quantity);
            $('.pr-image', newItem).attr('src', data[key].image);

            newItem.attr('data-id', key);
            newItem.attr('class', 'cart-item clearfix').show();
            list.append(newItem);
            totalPrice += data[key].price;
        }
        totalPrice = Math.floor(totalPrice * 100) / 100;
        $('.price-total', topCart).text(totalPrice);
        Order.topCartRemove();
    },

    topCartRemove: function()
    {
        $('.pr-remove', '#top-cart').unbind('click').click(function() {
            var item = $(this).closest('.cart-item');
            var id = item.attr('data-id');

            Cart.remove(id, function() {
                item.remove();
            });
        });
    },

    //order: function()
    //{
    //    var cartInfo = Cart.data();
    //    var form = $('form', '#order-form');
    //
    //    form.ajaxForm({
    //        data: {cartInfo: cartInfo},
    //        beforeSubmit: function(arr, $form, options) {
    //            $('button[type=submit]', form).button('loading');
    //        },
    //        success: function(result) {
    //            $('button[type=submit]', form).button('reset');
    //            if (result === true) {
    //                Cart.clear();
    //                Order.topCartRefresh();
    //            }
    //        }
    //    });
    //},

    loadOrderCart: function() {

        var orderCart = $('#order-cart');
        var list = $('.list-item', orderCart);
        var emptyItem = $('.cart-empty', orderCart);
        var data = Cart.data() || {};
        var totalPrice = 0;

        list.html('');

        for (var key in data) {
            var newItem = $(emptyItem).clone();

            $('.pr-name', newItem).html(data[key].name);
            $('.pr-label', newItem).html(data[key].price);
            $('.pr-qty', newItem).html(data[key].quantity);
            $('.pr-image', newItem).attr('src', data[key].image);

            newItem.attr('data-id', key);
            newItem.attr('class', 'cart-item clearfix').show();
            list.append(newItem);
            totalPrice += data[key].price;
        }
        totalPrice = Math.floor(totalPrice * 100) / 100;
        $('.price-total', orderCart).text(totalPrice);
        Order.topCartRemove();
    }
}

$(document).ready(function() {
    Order.init();
});
