/**
    * Modal_Right
    * datePicker
    * dashboardChart
    * Image Input Preview
 */

function imageInputPreview(inputId, previewId, boxId) {
    // idempotent init and immediate processing when called (works with onchange="imageInputPreview(...)")
    const setup = () => {
        const input = document.getElementById(inputId);
        const preview = document.getElementById(previewId);
        const imgInputBox = document.getElementById(boxId);

        // Find previewItem based on context - for thumbnail or images
        let previewItem = null;
        if (previewId === 'previewThumbnail') {
            previewItem = document.getElementById('previewThumbnailItem');
        } else if (previewId === 'preview_images' || inputId === 'upload_images') {
            previewItem = document.getElementById('previewImagesItem');
        } else {
            previewItem = document.getElementById('previewItem');
        }

        const originalSrc = preview ? preview.src : '';
        // thumbnail delete button (only relevant when previewId === 'previewThumbnail')
        const thumbnailDelete = document.getElementById('previewThumbnailDelete');

        function clearPreviews() {
            if (previewItem) {
                // Remove all image wrappers with the preview-wrapper class
                const wrappers = previewItem.querySelectorAll('.preview-wrapper');
                wrappers.forEach(w => w.remove());
            }
            if (preview) {
                preview.src = originalSrc;
                preview.style.display = originalSrc ? '' : 'none';
                preview.classList.remove('loaded');
                // hide thumbnail delete when preview cleared
                try { if (thumbnailDelete) thumbnailDelete.style.display = 'none'; } catch (err) {}
            }
        }

        function showPreviewFile(file) {
            if (!file) return;
            // remove any previous multi thumbnails so single preview replaces them
            clearPreviews();
            if (!file.type || !file.type.startsWith('image/')) {
                alert('Please select a valid image file.');
                return;
            }
            const reader = new FileReader();
            reader.onload = (e) => {
                if (!preview) return;
                // set preview image and enforce 120px height, auto width
                preview.src = e.target.result;
                preview.style.display = '';
                preview.alt = file.name || 'preview';
                preview.style.height = '120px';
                preview.style.width = 'auto';
                preview.classList.add('loaded');
                // show thumbnail delete only for thumbnail preview
                try { if (previewId === 'previewThumbnail' && thumbnailDelete) thumbnailDelete.style.display = ''; } catch (err) {}
            };
            reader.readAsDataURL(file);
        }

        function showMultiple(files) {
            if (!files || files.length === 0) return;
            clearPreviews();
            if (preview) preview.style.display = 'none';
            Array.from(files).forEach((file, index) => {
                if (!file.type || !file.type.startsWith('image/')) return;

                // Create wrapper for image and delete button
                const wrapper = document.createElement('div');
                wrapper.className = 'preview-wrapper';
                wrapper.style.position = 'relative';
                wrapper.style.display = 'inline-block';
                wrapper.style.flexShrink = '0';
                // store file identity on wrapper to allow robust removal later
                wrapper.dataset.name = file.name || '';
                wrapper.dataset.size = file.size || 0;
                wrapper.dataset.lastModified = file.lastModified || 0;

                const img = document.createElement('img');
                img.className = 'multi-thumb';
                // enforce 120px height previews (width auto to preserve aspect)
                img.style.height = '120px';
                img.style.width = 'auto';
                img.style.objectFit = 'cover';
                img.style.display = 'block';
                img.alt = file.name || 'thumb';
                const url = URL.createObjectURL(file);
                img.src = url;
                img.onload = () => URL.revokeObjectURL(url);

                // Create delete button
                const deleteBtn = document.createElement('a');
                deleteBtn.href = '#';
                deleteBtn.style.position = 'absolute';
                deleteBtn.style.top = '2px';
                deleteBtn.style.right = '2px';
                deleteBtn.style.background = 'rgba(0,0,0,0.6)';
                deleteBtn.style.borderRadius = '50%';
                deleteBtn.style.width = '20px';
                deleteBtn.style.height = '20px';
                deleteBtn.style.display = 'flex';
                deleteBtn.style.alignItems = 'center';
                deleteBtn.style.justifyContent = 'center';
                deleteBtn.style.cursor = 'pointer';
                deleteBtn.style.zIndex = '10';
                deleteBtn.onclick = (e) => {
                    e.preventDefault();
                    // remove the preview wrapper from DOM
                    wrapper.remove();
                    // Update file input by removing the file that matches this wrapper's identity
                    try {
                        const targetName = wrapper.dataset.name;
                        const targetSize = parseInt(wrapper.dataset.size, 10);
                        const targetLast = parseInt(wrapper.dataset.lastModified, 10);
                        const dt = new DataTransfer();
                        Array.from(input.files).forEach((f) => {
                            // keep file if it does NOT match the removed file
                            if (!(f.name === targetName && f.size === targetSize && f.lastModified === targetLast)) {
                                dt.items.add(f);
                            }
                        });
                        input.files = dt.files;
                        // if no files left, restore default preview image
                        if (!input.files || input.files.length === 0) {
                            try { clearPreviews(); } catch (err) { }
                        }
                    } catch (err) { }
                    return false;
                };

                // Create SVG delete icon
                deleteBtn.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 16 16" fill="none"><path d="M9.82667 6.00035L9.596 12.0003M6.404 12.0003L6.17333 6.00035M12.8187 3.86035C13.0467 3.89501 13.2733 3.93168 13.5 3.97101M12.8187 3.86035L12.1067 13.1157C12.0776 13.4925 11.9074 13.8445 11.63 14.1012C11.3527 14.3579 10.9886 14.5005 10.6107 14.5003H5.38933C5.0114 14.5005 4.64735 14.3579 4.36999 14.1012C4.09262 13.8445 3.92239 13.4925 3.89333 13.1157L3.18133 3.86035M12.8187 3.86035C12.0492 3.74403 11.2758 3.65574 10.5 3.59568M3.18133 3.86035C2.95333 3.89435 2.72667 3.93101 2.5 3.97035M3.18133 3.86035C3.95076 3.74403 4.72416 3.65575 5.5 3.59568M10.5 3.59568V2.98501C10.5 2.19835 9.89333 1.54235 9.10667 1.51768C8.36908 1.49411 7.63092 1.49411 6.89333 1.51768C6.10667 1.54235 5.5 2.19901 5.5 2.98501V3.59568M10.5 3.59568C8.83581 3.46707 7.16419 3.46707 5.5 3.59568" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>';

                wrapper.appendChild(img);
                wrapper.appendChild(deleteBtn);
                if (previewItem) previewItem.appendChild(wrapper);
            });
        }

        // attach change listener only once
        if (input && !input._previewInitialized) {
            input._previewInitialized = true;
            input.addEventListener('change', (e) => {
                // avoid double-processing if inline handler already processed
                if (input._justProcessed) {
                    // clear flag on next tick
                    setTimeout(() => { input._justProcessed = false; }, 0);
                    return;
                }
                const files = e.target.files;
                if (!files || files.length === 0) return clearPreviews();
                if (input.multiple && files.length > 1) {
                    showMultiple(files);
                } else {
                    showPreviewFile(files[0]);
                }
            });
        }

        // Prevent clicks on the input from bubbling to the container
        if (input && !input._clickBubblingStopped) {
            input._clickBubblingStopped = true;
            input.addEventListener('click', (e) => {
                e.stopPropagation();
            });
        }

        if (imgInputBox && input && !imgInputBox._clickInitialized) {
            imgInputBox._clickInitialized = true;
            imgInputBox.style.cursor = 'pointer';
            imgInputBox.addEventListener('click', (e) => {
                if (e.target && (e.target.tagName === 'A' || e.target.tagName === 'BUTTON')) return;
                input.click();
            });
        }

        if (imgInputBox && !imgInputBox._dragInitialized) {
            imgInputBox._dragInitialized = true;
            ['dragenter', 'dragover'].forEach((evt) => {
                imgInputBox.addEventListener(evt, (e) => {
                    e.preventDefault();
                    e.stopPropagation();
                    imgInputBox.classList.add('dragover');
                });
            });
            ['dragleave', 'dragend', 'drop'].forEach((evt) => {
                imgInputBox.addEventListener(evt, (e) => {
                    e.preventDefault();
                    e.stopPropagation();
                    imgInputBox.classList.remove('dragover');
                });
            });
            imgInputBox.addEventListener('drop', (e) => {
                const dt = e.dataTransfer;
                const files = dt && dt.files;
                if (files && files.length > 0) {
                    try {
                        const dataTransfer = new DataTransfer();
                        Array.from(files).forEach(f => dataTransfer.items.add(f));
                        if (input) input.files = dataTransfer.files;
                    } catch (err) { }
                    if (input && input.multiple && files.length > 1) showMultiple(files);
                    else showPreviewFile(files[0]);
                }
            });
        }

        return { clearPreviews, showPreviewFile, showMultiple, input };
    };

    // Run setup immediately if DOM is ready, otherwise wait for DOMContentLoaded
    let instance;
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', () => { instance = setup(); });
    } else {
        instance = setup();
    }

    // If function was called from an inline onchange handler, process current files immediately
    try {
        const inputEl = document.getElementById(inputId);
        if (inputEl && inputEl.files && inputEl.files.length > 0) {
            inputEl._justProcessed = true;
            if (inputEl.multiple && inputEl.files.length > 1) {
                instance && instance.showMultiple(inputEl.files);
            } else {
                instance && instance.showPreviewFile(inputEl.files[0]);
            }
            // clear flag shortly after
            setTimeout(() => { if (inputEl) inputEl._justProcessed = false; }, 50);
        }
    } catch (err) { }
}

// Auto-initialize for the default IDs if those elements exist
try {
    if (document.getElementById('imgInput') && document.getElementById('previewThumbnail') && document.getElementById('imgInputBox')) {
        imageInputPreview('imgInput', 'previewThumbnail', 'imgInputBox');
    }
    if (document.getElementById('upload_images') && document.getElementById('preview_images') && document.getElementById('imgsInputBox')) {
        imageInputPreview('upload_images', 'preview_images', 'imgsInputBox');
    }
} catch (err) { }


(function ($) {
    "use strict";

    var Modal_Right = function () {
        const dashboard = $(".sidebar-dashboard");
        var adminbar = $("#wpadminbar").height();
        $(".sidebar-dashboard").css({ top: adminbar });

        if (dashboard.length) {
            const open = function () {
                dashboard.addClass("active");
                $(".dashboard-overlay").addClass("active");
            };
            const close = function () {
                dashboard.removeClass("active");
                $(".dashboard-overlay").removeClass("active");
            };

            $(".dashboard-toggle").on("click", function () {
                open();
            });
            $(".dashboard-overlay, .btn-menu").on(
                "click",
                function () {
                    close();
                }
            );

        }
    };

    /* Datepicker
  -------------------------------------------------------------------------------------*/
    var datePicker = function () {
        if ($(".hasDatepicker").length > 0) {
            $(".hasDatepicker").datepicker({
                firstDay: 1,
                dateFormat: "dd/mm/yy",
            });
        }
    };

    var dashboardChart = function () {
        if ($(".tfcl-page-insight").length) {
            // diagram
            var ctx = document.getElementById('lineChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                height: 50,
                backgroundColor: 'linear-gradient(180deg, rgba(255, 169, 32, 0.2) 0.26%, rgba(255, 169, 32, 0) 100%)',
                data: {
                    labels: ['Mar 21', 'Mar 22', 'Mar 23', 'Mar 24', 'Mar 25', 'Mar 26', 'Mar 27', 'Mar 28', 'Mar 29', 'Mar 30', 'Mar 31'],
                    datasets: [{
                        label: '# of Votes',
                        data: [50, 100, 15, 150, 25, 50, 100, 15, 50, 25, 75],
                        backgroundColor: [
                            'rgba(255, 169, 32, 1)'

                        ],
                        // background: linear-gradient(180deg, rgba(255, 169, 32, 0.2) 0.26%, rgba(255, 169, 32, 0) 100%),

                        borderColor: [
                            'rgba(255, 169, 32, 1)',
                        ],
                        borderWidth: 2
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true,
                        }
                    }
                }
            });
        }
    }

    // Dom Ready
    $(function () {
        Modal_Right();
        dashboardChart();
        datePicker();
    });
})(jQuery);
