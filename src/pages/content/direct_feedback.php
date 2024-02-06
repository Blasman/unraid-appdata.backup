<div class="title"><span class="left"><i class="fa fa-commenting title"></i>BETA feedback</span></div>
<p>With this you are able to diectly share some thoughts! Togehther with your comments, this will also transfer your
    current BETA configuration file!</p>
<div><textarea id="ab_beta_feedback" placeholder="Type something in..."
               style="width: 50%; height: 100px; resize: both; margin-bottom: 20px;"></textarea></div>
<div><a href="javascript:void(0);" onclick="betaFeedback();" class="button">Submit</a></div>


<script type="text/javascript">
    function betaFeedback() {
        $.post(url + '?action=betaFeedback', {
            feedback: $('#ab_beta_feedback').val()
        }).fail(function (data) {
            alert('Error during HTTP request!');
        }).done(function (data) {
            alert(data.msg);
        }).always(function () {
            $('#ab_beta_feedback').html('');
        });
    }
</script>