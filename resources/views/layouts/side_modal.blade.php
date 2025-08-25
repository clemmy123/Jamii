

<!-- Left Sidebar Modal -->
<div class="modal fade min-h-[90vh]" id="serviceModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-slideout modal-lg">
    <div class="modal-content" style="  height: 100vh;
  border-radius: 0;">
      <div class="modal-header">
         <h1>Heloo</h1>
     
      </div>
      <div class="modal-body">
        {{-- <p id="modalDescription">Service description goes here.</p> --}}
        <p>Hi karibu upate mkopo</p>
      </div>
    </div>
  </div>
</div>


<style>
.modal-dialog-slideout {
  position: fixed;
  top: 0;
  right: 0;
  margin: 0;
  height: 100vh; /* Full viewport height */
  min-width: 50vw;
  max-width: 50vw; /* Optional: control sidebar width */
  transform: translateX(-100%);
  transition: transform 0.3s ease-out;
  z-index: 1055; /* Ensure it's above backdrop */
}

.modal.fade.show .modal-dialog-slideout {
  transform: translateX(0);
}


</style>
