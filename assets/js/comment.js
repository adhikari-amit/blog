<script type="text/javascript">
	$(document).ready(function () {
		var user_name = prompt("Enter your name : ");
		var datetimenow="<?php echo date('Y-m-d'); ?>";

		var max=<?php echo $this->data_model->Count_Comment()+$this->data_model->Count_replies(); ?>; 
		$("#addcomment").on('click', function () {
			var mainComment=$("#maincomment").val();  
			
			//if want show comment particular post and blog,declare post id and provide primary key 
 
			if (mainComment.length>=1) {
				$.ajax({
					url: "<?php echo base_url() ?>com/addcomment",
					method: 'POST',
					datatype: 'text',
					data: {
					mainComment: mainComment,
					user_name:user_name
					},
					success:function (data) {
						var result = JSON.parse(data);
						$("#maincomment").val("");
						max++;
						$("#comm_count").text(max+" Comments");
						
						$(".usercomments").prepend('<div class="comment"><div class="user">'+user_name+' <span class="time">'+datetimenow+'</span></div><div class="usercomment">'+mainComment+'</div> <div class="reply"><a href="javascript:void(0)" data-commentID="'+result.id+'" onclick="reply(this)">REPLY</a></div> <div class="replies"></div> </div>');
					},
					error: function(){
						alert('Data not inserted.');
					}

				});
			}
			else{
				alert('please check your commment box.');
			}
      
		});



  $("#addreply").on('click', function () {
      // body...
      var replycomment=$("#replycomment").val();    
      
      if (replycomment.length>=1) {
        $.ajax({
          url: "<?php echo base_url() ?>com/addreply",
          method: 'POST',
          datatype: 'text',
          data: {
            replycomment: replycomment,
            commentid:commentid
          },
          success:function (response) {
               max++;
              $("#comm_count").text(max +" Comments");
              $("#replycomment").val("");
              
              $(".replyrow").hide();
         
              $(".replyrow").parent().next().append('<div class="comment">'+replycomment+'</div>'); 
            },
          error: function(){
            alert('Data not inserted');
          }

        });
      }
      else{
        alert('please check your input reply commment');
      }
    
    });    



		
		getallComment(0,max);

	});




	function reply(caller)
  {
    commentid=$(caller).attr('data-commentID');
    $(".replyrow").insertAfter($(caller));
    $(".replyrow").show();
  }

    
    function getallComment(start,max)
  {

    if (start> max) {
      return;
    }
    $.ajax({
          url: '<?php echo base_url() ?>com/allComment',
          method: 'POST',
          datatype: 'JSON',
          data: {
            start: start
          },
          success:function (response) {
            // body...
            var d = $.parseJSON(response);
            $(".usercomments").append(d);
            getallComment((start+20),max);
          },
          error: function () {
            // body...
            alert('Data not found');
          }
    });
  }



</script>