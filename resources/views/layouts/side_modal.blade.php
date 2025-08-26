<!-- Left Sidebar Modal -->
<div class="modal fade min-h-[90vh]" id="serviceModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-slideout modal-lg">
        <div class="modal-content" style="  height: 100vh;
  border-radius: 0;">
            <div class="modal-header">
                <h3>Women Economic Development Funds WDF</h3>
                <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
            </div>

            {{-- <p id="modalDescription">Service description goes here.</p> --}}
            <div class="modal-body">
                <!-- Title and Close Button in Body -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h5 class="modal-title m-0" id="loanModalLabel">How to Apply for a Loan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Steps -->
                <div class="container text-center">

                    <div class="row mb-4">
                        <div class="col-2">
                            <i class="fas fa-user-check fa-2x" style="color: #3498db;"></i>
                        </div>
                        <div class="col-10 text-start">
                            <h6>Step 1: Register / Login</h6>
                            <p>Create an account or log in to your existing profile for Individuals and Group members
                                must use one of the account.</p>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-2">
                            <i class="fas fa-file-alt fa-2x" style="color: #3498db;"></i>
                        </div>
                        <div class="col-10 text-start">
                            <h6>Step 2: Fill Application Form</h6>
                            <p>Provide your personal, Gurantors details, Business Details and Locations, Bank details,
                                Business address.</p>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-2">
                            <i class="fas fa-upload fa-2x" style="color: #3498db;"></i>
                        </div>
                        <div class="col-10 text-start">
                            <h6>Step 3: Upload Documents</h6>
                            <p>Submit required documents Latter from local government, Business lisence or taxpayer
                                details.</p>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-2">
                            <i class="fas fa-check fa-2x" style="color: #3498db;"></i>
                        </div>
                        <div class="col-10 text-start">
                            <h6>Step 4: Wait for Approval</h6>
                            <p>Your application will be reviewed, and you’ll be notified and view progress in different
                                approval level.</p>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-2">
                            <i class="fas fa-check-circle fa-2x" style="color: #3498db;"></i>
                        </div>
                        <div class="col-10 text-start">
                            <h6>Requirements</h6>
                            <p>National ID, Verification Later from Local Government, Tax Payer Number or Business
                                Lisence, Busness Location, Bank name, Account number.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <a href="#" class="btn w-100"
                        style="background-color: #3498db; color: white; text-align: center; display: inline-block; padding: 0.375rem 0.75rem; border-radius: 0.25rem; text-decoration: none;">Get
                        Started</a>

                </div>
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
        height: 100vh;
        /* Full viewport height */
        min-width: 50vw;
        max-width: 50vw;
        /* Optional: control sidebar width */
        transform: translateX(-100%);
        transition: transform 0.3s ease-out;
        z-index: 1055;
        /* Ensure it's above backdrop */
    }

    .modal.fade.show .modal-dialog-slideout {
        transform: translateX(0);
    }
</style>
