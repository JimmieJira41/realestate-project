tinymce.init({
    selector: "#description_estate",
    branding: false,
    menubar: false,
    setup: function(editor){
      editor.on('change', function(){
        editor.save();
      })
    }
  })