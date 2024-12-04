<div>
    <form wire:submit.prevent="submitForm" enctype="multipart/form-data">
        <div class="caja-flex form-item input-radio" style="justify-content: space-between;">
            <div>
                <label for="estudiante"><strong>{{ __('form_talento.student') }}</strong> </label>
                <input required type="radio" wire:model.lazy="tipo" name="tipo" id="estudiante" value="estudiante"
                    title="{{ __('form_talento.student') }}">
            </div>
            <div>
                <label for="profesional"><strong>{{ __('form_talento.professional') }}</strong> </label>
                <input type="radio" wire:model.lazy="tipo" name="tipo" id="profesional" value="profesional"
                    title="{{ __('form_talento.professional') }}">
            </div>
        </div>
        @error('tipo')
            <span class="error">{{ $message }}</span>
        @enderror
        <div class="form-item">
            <label for="nombre">{{ __('form_talento.name') }}<sup>*</sup></label>
            <input required type="text" wire:model.lazy="nombre" name="nombre" id="nombre" maxlength="255"
                title="{{ __('form_talento.name') }}">
        </div>
        @error('nombre')
            <span class="error">{{ $message }}</span>
        @enderror
        <div class="form-item">
            <label for="email">{{ __('form_talento.email') }}<sup>*</sup></label>
            <input required type="email" wire:model.lazy="email" name="email" id="email" maxlength="255"
                title="{{ __('form_talento.email') }}">
        </div>
        @error('email')
            <span class="error">{{ $message }}</span>
        @enderror
        <div class="form-item">
            <label for="">{{ __('form_talento.telephone') }}<sup>*</sup></label>
            <input required type="tel" wire:model.lazy="telefono" pattern="[0-9]{10,15}" maxlength="15"
                name="telefono" id="telefono" title="{{ __('form_talento.telephone') }}">
        </div>
        @error('telefono')
            <span class="error">{{ $message }}</span>
        @enderror
        <div class="form-item input-radio">
            <label for="">{{ __('form_talento.currently_working') }}<sup>*</sup></label>
            <div class="caja-flex" style="gap: 50px;">
                <div>
                    <label for="laboro_si">{{ __('form_talento.yes') }}</label>
                    <input required type="radio" wire:model.lazy="laborando" name="laborando" id="laboro_si"
                        value="si" title="{{ __('form_talento.yes') }}">
                </div>
                <div>
                    <label for="laboro_no">{{ __('form_talento.no') }}</label>
                    <input type="radio" wire:model.lazy="laborando" name="laborando" id="laboro_no" value="no"
                        title="{{ __('form_talento.no') }}">
                </div>
            </div>
        </div>
        <div class="form-item input-cv">
            <label for="cv">{{ __('form_talento.CV') }}<sup>*</sup></label>
            <input required type="file" wire:model.lazy="cv" name="cv" id="cv" accept="application/pdf"
                title="{{ __('form_talento.CV') }}" />
        </div>
        <div class="form-item input-acepto">
            <input type="checkbox" required wire:model.lazy="terminos" name="terminos" id="terminos" value="1"
                title="{{ __('form_talento.privacy') }}">
            <label for="terminos">
                <a href="{{ route('terminos-privacidad') }}" target="_blanck">
                    {{ __('form_talento.privacy') }}
                </a>
            </label>
        </div>
        <div class="form-item caja-flex" style="justify-content: end; margin-top: 60px;">
            <button type="submit" wire:loading.class="pre">
                <i class="fa-solid fa-circle-notch fa-spin"></i>
                {{ __('form_talento.send_data') }}
            </button>
        </div>
    </form>
</div>
