$('body').on('click', '.react-button', function(e){
  e.preventDefault();

  var form = $(this).parent();
  data = {
    post_id: $(this).data("post"),
    type: $(this).data("react"),
  };
  data = JSON.stringify(data);
  console.log(data);
  $.ajax({
    processData: false,
    contentType: 'raw',
    url: form.attr('action'),
    type: form.attr('method'),
    data: data,
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    beforeSend: function(){},
    error: function(response){
      console.log("Error in reaction");
    },
    success:function(response){
      console.log("Successfully reacted");
    }
  });
});
