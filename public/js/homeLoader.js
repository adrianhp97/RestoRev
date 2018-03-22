$(document).ready(function() {
  $('#btn-more').on('click',function () {
    var restaurant_id = $(this).data('id');
    $("#btn-more").html("Loading....");
    $.ajax({
      url : 'home/loaddata',
      method : "POST",
      data : {
        restaurant_id : restaurant_id,
      },
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
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
  });  
});