<?php include("nav.php"); ?>

<link rel="stylesheet" href="noyify.css">
<link rel="stylesheet" href="style.css">




<div class="wrapper"  >
<div class="notification" style="margin-left: 100px;">
</div>


<div class="col-12" >
<label for="form1Example1" class="form-label bg-warning shadow  pb-1 pl-2" >اشعار جديد :</label>
<p class=" bg-warning shadow pb-1"></p>
</div>


            <form method="post" class="row g-2 box-center-sub" id="form-submit" dir="rtl">
                <div class="col-12 col-lg-5 input-data">
                   
                <input type="text" name="subject" class="" id="subject" style="padding: 0px;" aria-describedby="emailHelp" required>
                <label for="subject" class="shadow-sm"><b>الموضوع *</b></label>
                <div class="underline" ></div>
                    <small class="form-text text-error" id="sub-error"></small>
                </div>

                <div class="col-12">
                  <br>
                    
                </div>
                <div class="form-group input-data">
                    <input name="comment" class="" id="comment" style="padding: 0px;" required >
                    <label for="comment"><b>الرسالة *</b></label>
                    <div class="underline" ></div>
                    <small class="form-text text-error" id="com-error"></small>
                </div>
                <div class="col-2">
                <button type="submit" class="btn btn-danger">Submit</button>
                </div>
            </form>
            
            </div>
 




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script type="text/javascript">

    $(document).ready(function (){

        $('.notification').load('Ajax/Notification.php');
        $('.counter').text('0').hide();

        var counter = 0;

        $('#form-submit').on('submit', function(event){
            event.preventDefault();
            
            var subject = $('#subject').val().trim();
            var comment = $('#comment').val().trim();

            $('#sub-error').text('');
            $('#com-error').text('');

            if(subject != '' && comment != ''){
                
                $.ajax({
                    type: "POST",
                    url: "Ajax/Ins_notification.php",
                    data: { 'subject' : subject, 'comment' : comment },
                    success: function (response) {
                        var status = JSON.parse(response);
                        if(status.status == 101){
                            counter++;
                            $('.counter').text(counter).show();
                            $('.notification').load('Ajax/Notification.php');
                            $("#form-submit").trigger("reset");
                            console.log(status.msg);
                        }
                        else{
                           console.log(status.msg);
                        }
                    }
                });

            }
            else{
            
                if(subject == ''){
                    $('#sub-error').text("Please Enter Subject");
                }
                if(comment == ''){
                    $('#com-error').text("Please Enter Comment");
                }
            }

        });

        $('#noti_count').on('click',function (){
            counter = 0;
            $('.counter').text('0').hide();
        });

    });

</script>

</body>
</html>
