<!-- Remember to include jQuery :) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script type="text/javascript">
    $(document).ready(function() {

        $("#btnHamburger").click(function(){
                $("#btnHamburger").css("margin-left","0px");
                $(".sidenav").css("display", "block");
        });
        // var isNavShown=false;
        //
        // $("#btnHamburger").click(function(){
        //     if(isNavShown){
        //         $("#btnHamburger").css("margin-left","0px");
        //         $(".sidenav").css("display", "none");
        //         isNavShown=false;
        //
        //     }else{
        //         $(".sidenav").css("display", "block");
        //         $("#btnHamburger").css("margin-left","200px");
        //         isNavShown=true;
        //     }
        // });
    });

    $(document).on('keydown','input[type="number"]',function(e){
        if (!Number.isInteger(parseInt(e.key))) {
            if(e.keyCode!=8){
                e.preventDefault();
            }
        }
    })
</script>
