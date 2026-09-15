    <!-- ========================================================
         GLOBAL CONFIRMATION MODAL (Available Project-Wide)
         ======================================================== -->
    <div class="modal fade" id="globalConfirmModal" tabindex="-1" aria-labelledby="globalConfirmModalLabel" aria-hidden="true" style="z-index: 1080;">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 420px;">
            <div class="modal-content border-0 shadow-lg" style="border-radius: 16px; overflow: hidden;">
                <div class="modal-body p-4 text-center">
                    <div class="mb-3 d-inline-flex align-items-center justify-content-center rounded-circle" id="globalConfirmIconWrapper" style="width: 64px; height: 64px; background-color: #fee2e2; color: #dc2626;">
                        <i class="bi bi-trash3-fill" id="globalConfirmIcon" style="font-size: 1.75rem;"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2" id="globalConfirmTitle">Confirm Deletion</h5>
                    <p class="text-muted small mb-0 px-2" id="globalConfirmMessage" style="line-height: 1.55;">
                        Are you sure you want to delete this item? This action cannot be undone.
                    </p>
                </div>
                <div class="modal-footer border-top-0 pt-0 pb-4 px-4 gap-2 justify-content-center">
                    <button type="button" class="btn btn-light px-4 py-2 fw-semibold text-secondary" data-bs-dismiss="modal" id="globalConfirmCancelBtn" style="border-radius: 8px; font-size: 0.9rem;">
                        Cancel
                    </button>
                    <button type="button" class="btn btn-danger px-4 py-2 fw-semibold" id="globalConfirmSubmitBtn" style="border-radius: 8px; font-size: 0.9rem; background-color: #dc2626;">
                        Yes, Delete
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 Bundle JS (Includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Global Helper Scripts for Confirmation & Toasts -->
    <script>
        /**
         * Global Confirmation Prompt Modal Function
         * Usable from any view across the portal
         */
        function showConfirmPrompt(options = {}) {
            const modalEl = document.getElementById('globalConfirmModal');
            if (!modalEl) return;

            const titleEl = document.getElementById('globalConfirmTitle');
            const msgEl = document.getElementById('globalConfirmMessage');
            const submitBtn = document.getElementById('globalConfirmSubmitBtn');
            const cancelBtn = document.getElementById('globalConfirmCancelBtn');
            const iconWrapper = document.getElementById('globalConfirmIconWrapper');
            const iconEl = document.getElementById('globalConfirmIcon');

            // Set Title
            titleEl.textContent = options.title || 'Confirm Deletion';

            // Set Message
            if (options.message) {
                msgEl.innerHTML = options.message;
            } else if (options.itemName) {
                msgEl.innerHTML = `Are you sure you want to delete <strong class="text-dark">"${options.itemName}"</strong>? This action cannot be undone.`;
            } else {
                msgEl.textContent = 'Are you sure you want to proceed? This action cannot be undone.';
            }

            // Set Action Button Text & Style
            submitBtn.textContent = options.confirmText || 'Yes, Delete';
            submitBtn.className = `btn px-4 py-2 fw-semibold ${options.confirmBtnClass || 'btn-danger'}`;
            if (options.confirmBtnClass && options.confirmBtnClass.includes('btn-warning')) {
                submitBtn.style.backgroundColor = '#f59e0b';
                submitBtn.style.borderColor = '#f59e0b';
            } else if (options.confirmBtnClass && options.confirmBtnClass.includes('btn-primary')) {
                submitBtn.style.backgroundColor = '#0066ff';
                submitBtn.style.borderColor = '#0066ff';
            } else {
                submitBtn.style.backgroundColor = '#dc2626';
                submitBtn.style.borderColor = '#dc2626';
            }

            // Set Cancel Button Text if provided
            if (options.cancelText) {
                cancelBtn.textContent = options.cancelText;
            } else {
                cancelBtn.textContent = 'Cancel';
            }

            // Set Icon
            if (iconEl) iconEl.className = `bi ${options.iconClass || 'bi-trash3-fill'}`;
            if (iconWrapper) {
                iconWrapper.style.backgroundColor = options.iconBg || '#fee2e2';
                iconWrapper.style.color = options.iconColor || '#dc2626';
            }

            // Get or create Bootstrap Modal instance
            const modalInstance = bootstrap.Modal.getOrCreateInstance(modalEl);

            // Clone submit button to clear previous click listeners cleanly
            const newSubmitBtn = submitBtn.cloneNode(true);
            submitBtn.parentNode.replaceChild(newSubmitBtn, submitBtn);

            newSubmitBtn.addEventListener('click', function () {
                modalInstance.hide();
                if (typeof options.onConfirm === 'function') {
                    options.onConfirm();
                }
            });

            modalInstance.show();
        }

        /**
         * Global Toast Notification Function
         */
        function showGlobalToast(message, type = 'success') {
            let container = document.getElementById('globalToastContainer');
            if (!container) {
                container = document.createElement('div');
                container.id = 'globalToastContainer';
                container.className = 'toast-container position-fixed bottom-0 end-0 p-3';
                container.style.zIndex = '1095';
                document.body.appendChild(container);
            }

            const toastId = 'toast_' + Date.now();
            const icon = type === 'danger' ? 'bi-exclamation-circle-fill text-danger' : 
                         type === 'warning' ? 'bi-exclamation-triangle-fill text-warning' : 
                         'bi-check-circle-fill text-success';

            const toastHtml = document.createElement('div');
            toastHtml.className = 'toast align-items-center text-white bg-dark border-0 shadow';
            toastHtml.id = toastId;
            toastHtml.setAttribute('role', 'alert');
            toastHtml.setAttribute('aria-live', 'assertive');
            toastHtml.setAttribute('aria-atomic', 'true');
            toastHtml.style.borderRadius = '10px';
            toastHtml.innerHTML = `
                <div class="d-flex">
                    <div class="toast-body small py-2 px-3">
                        <i class="bi ${icon} me-2"></i>${message}
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            `;

            container.appendChild(toastHtml);
            const bsToast = new bootstrap.Toast(toastHtml, { delay: 3500 });
            bsToast.show();
            toastHtml.addEventListener('hidden.bs.toast', () => toastHtml.remove());
        }
    </script>
</body>
</html>
