<script src="../assets/bundles/libscripts.bundle.js"></script>

<!-- Plugin Js -->
<script src="../assets/bundles/apexcharts.bundle.js"></script>
<script src="../assets/bundles/dataTables.bundle.js"></script>
<script src="../assets/plugin/toastr/toastr.min.js"></script>
<script src="../assets/js/kme-toastr.js"></script>
<!-- Jquery Page Js -->
<script src="../assets/js/template.js"></script>
<div class="modal fade" id="PremiumVersionAlert" tabindex="-1"  aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="text-center text-muted fw-bold" id="expeditLabel"><?php echo strrev(strtoupper(APP_AUTHOR))?> PREMIUM NOTICE!!!</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                     <div class="text-center"><p class=" alert alert-danger">These Features are Only available in the PREMIUM VERSION: Contact the Developer: <small class="text-center">+234813-1374-443 OR info@flaterptech.com</small></p></div>
                    <h1 class="fw-bold text-center lead mb-2"> Daily,Weekly, Monthly and Yearly Sales Reports as well as Expense Management, Credit Sales, Online Payment, User Activities Logs and Receipt Printing, etc</h1>
                   
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                   
                  </div>
               </div>
            </div>
         </div>
  <div id="server-response"></div>
  <script>
    $(document).ready(function(){
      $(".premium_version_btn").on("click", function(e){
        e.preventDefault();
       $("#PremiumVersionAlert").modal("show");
      })
    })
  </script>