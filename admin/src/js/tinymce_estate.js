tinymce.init({
    selector: "#description_estate",
    setup: function(editor){
      editor.on('change', function(){
        editor.save();
      })
    }
  })