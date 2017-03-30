(function($) {

    Drupal.behaviors.PfUsabilityLinks = {
        attach: function(context, settings) {
            nid = Drupal.settings.mr_usability.nid;
            links = Drupal.settings.mr_usability.links;
            markup = '';
            if (links) {
                $.each(links, function(k, v) {
                    markup += '<a href="' + k + '">' + v + '</a>';
                });
            }
            if (nid) {
                markup = '<a class="mru-edit" href="' + Drupal.settings.basePath + 'node/' + nid + '/edit">Правка</a>';
                $('#node-' + nid).addClass('mru-node');
                $('#node-' + nid).append(markup);
            }
        }
    };

})(jQuery);