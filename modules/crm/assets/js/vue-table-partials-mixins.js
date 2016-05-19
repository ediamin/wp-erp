;(function($) {
    // partials
    Vue.partial('fullName', '<a href="#" @click.prevent="onClickFullName(field, item)"><strong>{{ item.first_name }} {{ item.last_name }}</strong></a>');

    window.vtablePartials = {
        primaryColumnPartial: 'fullName'
    };

    // vtable mixins
    window.vtableMixins = {
        methods: {
            onClickFullName: function(field, item) {
                console.log('this is from mixin');
                // var link  = '<a href="' + item.details_url + '"><strong>' + item.first_name + ' '+ item.last_name + '</strong></a>';
                // return item.avatar.img + link;
            }
        }
    };

})(jQuery);
