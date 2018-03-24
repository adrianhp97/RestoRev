function getLoadData() {
  var restaurant_id = $('#btn-more').data('id');
  $("#btn-more").html("Loading....");
  $.ajax({
    url : 'home/loaddata',
    method : "get",
    cache: false,
    data : {
      restaurant_id : restaurant_id,
    },
    dataType : "text",
    success : function (data)
    {
      if(data != '') 
      {
          $('#remove-row').remove();
          $('#load-data').append(data);
      }
      else
      {
          $('#btn-more').html("No Data");
      }
    }
  });
}