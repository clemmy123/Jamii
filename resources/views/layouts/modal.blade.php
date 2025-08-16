<!-- Modal -->
<style>
body.modal-blur::before {
  content: '';
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  backdrop-filter: blur(20px);
  background-color: rgba(0, 0, 0, 0.2);
  z-index: 1040;
  pointer-events: none;
  transition: backdrop-filter 0.4s ease;
}


</style>
<div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="infoModalLabel">Select what we can do for you</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row row-cols-1 row-cols-md-2 g-4" id="modalContent">
          <!-- Grid items will be injected here -->
        </div>
      </div>
    </div>
  </div>
</div>



<script>
function showModal(itemsArray) {
  const modalContent = document.getElementById('modalContent');
  modalContent.innerHTML = ''; // Clear previous content

  itemsArray.forEach(item => {
    const col = document.createElement('div');
    col.classList.add('col');

    col.innerHTML = `
      <div class="card h-100 shadow-sm">
        <div class="card-body d-flex align-items-start">
          <i class="${item.icon} fs-2 text-warning me-3"></i>
          <div>
            <h5 class="card-title">${item.title}</h5>
            <p class="card-text">${item.description}</p>
          </div>
        </div>
      </div>
    `;

    modalContent.appendChild(col);
  });

  const modalElement = document.getElementById('infoModal');
  const modal = new bootstrap.Modal(modalElement);
  modal.show();
}

// Add blur when modal is shown
document.getElementById('infoModal').addEventListener('show.bs.modal', () => {
  document.body.classList.add('modal-blur');
});

// Remove blur when modal is hidden
document.getElementById('infoModal').addEventListener('hidden.bs.modal', () => {
  document.body.classList.remove('modal-blur');
});
</script>
