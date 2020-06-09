$(function(){


    ymaps.ready(function () {
var myMap = new ymaps.Map('map404', {
        center: [29.9773, 31.1325],
        zoom: 16,
        type: 'yandex#satellite'
    }, {
        searchControlProvider: 'yandex#search'
    }),

    // Creating a content layout.
    MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
        '<div style="border-radius: 50%;color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
    ),

    myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
        hintContent: 'A8 Studio ',
        balloonContent: 'this is our A8 studio we are waiting you',

    }, {
        /**
         * Options.
         * You must specify this type of layout.
         */
        iconLayout: 'default#image',
        // Custom image for the placemark icon.
        iconImageHref: '/images/logo/baselogo.png',
        // The size of the placemark.
        iconImageSize: [90, 92],
        /**
         * The offset of the upper left corner of the icon relative
         * to its "tail" (the anchor point).
         */
        iconImageOffset: [-5, -38]
    }),

    myPlacemarkWithContent = new ymaps.Placemark([29.1773, 31.9325], {
        hintContent: 'A custom placemark icon with contents',
        balloonContent: 'This one — for Christmas',
        iconContent: '12'
    }, {
        /**
         * Options.
         * You must specify this type of layout.
         */
        iconLayout: 'default#imageWithContent',
        // Custom image for the placemark icon.
        iconImageHref: '/images/logo/baselogo.png ',
        // The size of the placemark.
        iconImageSize: [58, 48],
        /**
         * The offset of the upper left corner of the icon relative
         * to its "tail" (the anchor point).
         */
        iconImageOffset: [-24, -24],
        // Offset of the layer with content relative to the layer with the image.
        iconContentOffset: [15, 15],
        // Content layout.
        iconContentLayout: MyIconContentLayout
    });

    ////


    myPlacemarkWithContent2 = new ymaps.Placemark([29.9753, 31.1345], {
        hintContent: 'A custom placemark icon with contents',
        balloonContent: 'This one — for Christmas',
        iconContent: '12'
    }, {
        /**
         * Options.
         * You must specify this type of layout.
         */
        iconLayout: 'default#imageWithContent',
        // Custom image for the placemark icon.
        iconImageHref: '/images/logo/baselogo.png ',
        // The size of the placemark.
        iconImageSize: [50, 50],
        /**
         * The offset of the upper left corner of the icon relative
         * to its "tail" (the anchor point).
         */
        iconImageOffset: [-24, -24],
        // Offset of the layer with content relative to the layer with the image.
        iconContentOffset: [15, 15],
        // Content layout.
        iconContentLayout: MyIconContentLayout
    });
    ////

myMap.geoObjects
    .add(myPlacemark)
    .add(myPlacemarkWithContent)
    .add(myPlacemarkWithContent2);

});

})

