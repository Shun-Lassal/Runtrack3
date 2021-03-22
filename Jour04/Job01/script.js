$('#button').click(function(){
  $.ajax({
    url:"expression.txt",
    dataType: 'text',
    method: "get",
    success: function(data){
      $("#body").append("<p>"+data+"</p>");
    }
  });
});
