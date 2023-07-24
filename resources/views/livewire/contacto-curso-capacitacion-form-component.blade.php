<div>
    <contetn class="content-limit">
        <div class="card">
            <h2>Cursos y capacitaciones</h2>
            <p class="parrafo-psolinf">
                En el siguiente formulario puedes solicitar una visita de S4B a tu escuela o empresa. .
            </p>
            <form wire:submit.prevent="submitForm" enctype="multipart/form-data">
                <div class="form-item">
                    <label for="nombre">Nombre <sup>*</sup></label>
                    <input required type="text" name="nombre" id="nombre" maxlength="255" wire:model.lazy="nombre">
                </div>
                <div class="form-item">
                    <label for="email">Correo electrónico <sup>*</sup></label>
                    <input required type="email" name="email" id="email" maxlength="255" wire:model.lazy="email">
                </div>
                <div class="form-item">
                    <label for="telefono">Teléfono <sup>*</sup></label>
                    <input required type="tel" pattern="[0-9]{10,15}" maxlength="15" name="telefono" id="telefono" wire:model.lazy="telefono">
                </div>
                <div class="form-item">
                    <label for="organizacion">Escuela o empresa <sup>*</sup></label>
                    <input required type="text" name="organizacion" id="organizacion" maxlength="255" wire:model.lazy="organizacion">
                </div>
                <div class="form-item">
                    <label for="mensaje">Mensaje</label>
                    <textarea name="mensaje" id="mensaje" wire:model.lazy="mensaje"></textarea>
                </div>
                <div class="form-item caja-flex">
                    <div class="btn-form-second" onclick="desplazar(-100)">Atrás</div>
                    <button class="btn-form">
                        <i class="fa-solid fa-circle-notch fa-spin"></i>
                        Adelante
                    </button>
                </div>
            </form>
            <p class="parrafo-psolinf" style="margin-top: 60px;">
                <small><i>*Nos pondremos en contacto contigo en menos de 12 horas hábiles.</i></small>
            </p>
        </div>
    </contetn>
</div>
