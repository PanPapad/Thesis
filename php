<script type="text/javascript">
     $(document).ready(function(){  
           $(document).on('submit', '#update-form', function submitForm(url){
                var data = $("$update-form").serialize();
                $.ajax({
                    type : 'POST',
                    url  : 'url',
                    data : data,
                    success :  function(data){
                        $(".display").html(data);
                    }
                });
                return false;
            });
        });
</script>
<body>
  <div id="update" class="tab-pane fade">
                <form id="update-form" role="form" class="container" method="post" action="search.php">
                    <h3>Update details</h3>
                    <table class="display">
                        <tr  class="space">
                            <td><label>File Number:</label></td>
                            <td><input type="text" class="form-control" name="filenum" required></td>
                        </tr>
                    </table>
                    <button type="button" onclick="submitForm('search.php')">Search</button>     
                    <button type="button" onclick="submitForm('update.php')">Update</button>
                </form>
            </div>
</body>