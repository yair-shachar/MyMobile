
String.prototype.permalink = function (){
   return this.toString().trim().toLowerCase().replace(/\s/g, '-');
};

$('.source-text').on('focusout', function() {
  $('.target-text').val($(this).val().permalink());    
});

$('#article').summernote({
  placeholder: 'Write your article here',
  height: 300
});