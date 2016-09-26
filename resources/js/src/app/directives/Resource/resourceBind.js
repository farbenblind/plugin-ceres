var ResourceService = require('services/ResourceService');

Vue.directive('resource-bind', {

    params: [
        'filters'
    ],

    bind: function()
    {
        var self = this;

        ResourceService.watch( this.arg, function( value ) {

            var paths  = self.expression.split('.');
            for( var i = 0; i < paths.length; i++ )
            {
                var path = paths[i];
                value = value[path];
            }

            var filters = self.params.filters || [];
            for( var i = 0; i < filters.length; i++ )
            {
                var filter = Vue.filter( self.params.filters[i] );
                value = filter.apply( null, [value] );
            }

            self.el.innerHTML = value;
        });
    }

});
