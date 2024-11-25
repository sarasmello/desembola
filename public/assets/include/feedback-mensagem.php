<div class="card">
    <div class="card-body">
        <fieldset>
            <legend class="titulobloco d-flex align-items-center">
                <span class="me-2 d-flex align-items-center">
                    <iconify-icon icon="line-md:chat-filled" class="fs-7 text-muted icone-registro"
                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-success"
                        data-bs-title="Traffic Overview"></iconify-icon>
                </span>
                Mensagem
            </legend>

            <div class="row align-items-end">
                <div id="summernote"></div>
                <script>
                    $('#summernote').summernote({
                        placeholder: 'Escreva sua mensagem...',
                        tabsize: 2,
                        height: 350,
                        toolbar: [
                            ['style', ['style']],
                            ['font', ['bold', 'underline', 'clear']],
                            ['color', ['color']],
                            ['para', ['ul', 'ol', 'paragraph']],
                            ['table', ['table']],
                            ['insert', ['link', 'picture', 'video']],
                            ['view', ['fullscreen', 'codeview', 'help']]
                        ]
                    });
                </script>
                <div class="col-12 d-flex justify-content-end mt-3">
                    <button type="submit" class="btn btn-login">Enviar</button>
                </div>
            </div>
        </fieldset>
    </div>
</div>