tinymce.init({
    selector: "#description_building",
    branding: false,
    menubar: false,
    setup: function(editor){
      editor.on('change', function(){
        editor.save();
      })
    }
  })