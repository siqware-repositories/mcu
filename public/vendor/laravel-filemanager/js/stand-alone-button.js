(function( $ ){

  $.fn.filemanager = function(type, options) {
    type = type || 'file';

    this.on('click', function(e) {
      var route_prefix = (options && options.prefix) ? options.prefix : '/laravel-filemanager';
      var target_thumb = $('#' + $(this).data('thumb'));
      var target_input = $('#' + $(this).data('input'));
      var target_preview = $('#' + $(this).data('preview'));
      window.open(route_prefix + '?type=' + type, 'FileManager', 'width=900,height=600');
      window.SetUrl = function (items) {
        // set the value of the desired input to image url
        items.forEach(function (item,index) {
          target_input.after('<input type="hidden" name="file_path['+index+']" value="'+item.url+'">');
        });
        items.forEach(function (item,index) {
          target_thumb.after('<input type="hidden" name="file_thumb['+index+']" value="'+item.thumb_url+'">');
        });
        // clear previous preview
        target_preview.html('');

        // set or change the preview image src
        items.forEach(function (item) {
          target_preview.append(
            $('<img>').css('height', '5rem').attr('src', item.thumb_url)
          );
        });

        // trigger change event
        target_preview.trigger('change');
      };
      return false;
    });
  }

})(jQuery);
