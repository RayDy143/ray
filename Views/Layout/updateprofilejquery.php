<script type="text/javascript">
    $(document).ready(function() {
        $("#frmUpdateProfile").submit(function(e) {
            e.preventDefault();
            $.ajax({
                url:'../../Controller/UpdateProfile.php',
                type:'POST',
                data:{
                    Username:$("#txtUpdateProfileUsername").val(),
                    Firstname:$("#txtUpdateProfileFirstname").val(),
                    Lastname:$("#txtUpdateProfileLastname").val()
                },
                dataType:'json',
                success:function(data) {
                    $.modal.close();
                    Swal.fire(
                      'Profile Updated!',
                      'Profile has been updated.',
                      'success'
                  );
                }
            });
        });

        $("#btnChangePassword").click(function() {
            $("#ChangePasswordModal").modal({
              fadeDuration: 100,
              closeExisting: false
            });
        });

        $("#frmChangePassword").submit(function(e) {
            e.preventDefault();
            $.ajax({
                url:'../../Controller/ChangePassword.php',
                type:'POST',
                data:{
                    CurrentPassword:$("#txtChangePassCurrent").val(),
                    NewPassword:$("#txtChangePassNewPassword").val(),
                    ConfirmPassword:$("#txtChangePassConfirmPassword").val()
                },
                dataType:'json',
                success:function(data) {
                    if(data.response=="Password successfully changed!"){
                        $.modal.close();
                        Swal.fire(
                          'Password Changed!',
                          'Password has been changed.',
                          'success'
                      );
                    }
                }
            });
        });
    });
</script>
