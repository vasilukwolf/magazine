$(document).ready(function(){
     $('.add_button').click(function(){
     var button;
     var list;
     button=$(this); // объект кнопка
     $.ajax({
          url: '/get_parameters',
          type: "POST",
          headers: {
               'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    },
           success: function($list){
           button.after($list);
},
      error: function(msg){
          console.log(msg);
          console.log("ups");
        }
   });
  });
});

$(document).on('click','.remove_button',function(){
var block;
if(confirm('Delete?'))
{
     block=$(this).parent().parent().parent();
     block.remove();
}
});

$(document).on('click','.add_parameter',function(){
$('#myModal').modal();
});