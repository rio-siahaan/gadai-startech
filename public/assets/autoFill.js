$(document).ready(function() {
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
      
    $("input[name='penggadai_id']").keypress(function(e){
       
       if(e.which == 13){
         e.preventDefault();
         var id = $(this).val();
         var url = "{{ url('/pesanan-ajax') }}"+'-'+id;
   
         $.ajax({
           type:'get',
           dataType:'json',
           url:url,
           success:function(data){
             console.log(data);
           
           }
         });
       }
     })
  })  