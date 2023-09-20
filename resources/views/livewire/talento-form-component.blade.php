<div>
    <form wire:submit.prevent="submitForm" enctype="multipart/form-data">
        <div class="caja-flex form-item input-radio" style="justify-content: space-between;">
            <div>
                <label for="estudiante"><strong>Soy estudiante</strong> </label>
                <input required type="radio" wire:model.lazy="tipo" name="tipo" id="estudiante" value="estudiante"
                    title="Soy estudiante">
            </div>
            <div>
                <label for="profesional"><strong>Soy profesional</strong> </label>
                <input type="radio" wire:model.lazy="tipo" name="tipo" id="profesional" value="profesional"
                    title="Soy profesional">
            </div>
        </div>
        @error('tipo')
            <span class="error">{{ $message }}</span>
        @enderror
        <div class="form-item">
            <label for="nombre">Nombre <sup>*</sup></label>
            <input required type="text" wire:model.lazy="nombre" name="nombre" id="nombre" maxlength="255"
                title="Nombre">
        </div>
        @error('nombre')
            <span class="error">{{ $message }}</span>
        @enderror
        <div class="form-item">
            <label for="email">Correo electrónico <sup>*</sup></label>
            <input required type="email" wire:model.lazy="email" name="email" id="email" maxlength="255"
                title="Correo electrónico">
        </div>
        @error('email')
            <span class="error">{{ $message }}</span>
        @enderror
        <div class="form-item">
            <label for="">Teléfono <sup>*</sup></label>
            <input required type="tel" wire:model.lazy="telefono" pattern="[0-9]{10,15}" maxlength="15"
                name="telefono" id="telefono" title="Teléfono">
        </div>
        @error('telefono')
            <span class="error">{{ $message }}</span>
        @enderror
        <div class="form-item input-radio">
            <label for="">¿Actualmente te encuentras laborando? <sup>*</sup></label>
            <div class="caja-flex" style="gap: 50px;">
                <div>
                    <label for="laboro_si">Si</label>
                    <input required type="radio" wire:model.lazy="laborando" name="laborando" id="laboro_si"
                        value="si" title="Si laboro">
                </div>
                <div>
                    <label for="laboro_no">No</label>
                    <input type="radio" wire:model.lazy="laborando" name="laborando" id="laboro_no" value="no"
                        title="No laboro">
                </div>
            </div>
        </div>
        <div class="form-item input-cv">
            <label for="cv">Carga tu CV en PDF<sup>*</sup></label>
            <input required type="file" wire:model.lazy="cv" name="cv" id="cv"
                accept="application/pdf" title="Carga tu CV en PDF" />
        </div>
        <div class="form-item input-acepto">
            <input type="checkbox" required wire:model.lazy="terminos" name="terminos" id="terminos" value="1"
                title="Acepto los términos de privacidad">
            <label for="terminos"><a href="{{ url('terminos-privacidad') }}" target="_blanck"> Acepto los términos
                    de
                    privacidad
                </a></label>
        </div>
        <div class="form-item caja-flex" style="justify-content: end; margin-top: 60px;">
            <button type="submit" wire:loading.class="pre">
                <i class="fa-solid fa-circle-notch fa-spin"></i>
                Enviar datos
            </button>
        </div>
    </form>
</div>
