$('input[name="register_domain[]"]').on('change', function() {
    if ($(this).val() == "owned") {
     $('input[name="chosen_domain"]').rules('remove', 'remote');
    } else {
     $('input[name="chosen_domain"]').rules('add', {
      remote: {
       url: "check.php",
       type: "post",
       data: {
        register_domain: function() {
         return jQuery('input[name="register_domain[]"]');
        }
       }
      }
     });
    }
});
