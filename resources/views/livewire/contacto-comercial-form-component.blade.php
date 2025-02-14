<div>
    <content class="content-limit">
        <div class="card">
            <span class="title-second">{{ __('contacto.contact_comercial') }}</span>
            <p class="parrafo-psolinf">
                {{ __('contacto.contact_comercial_desc') }}
            </p>
            <form wire:submit.prevent="submitForm" enctype="multipart/form-data">
                <div class="form-item">
                    <label for="nombre">{{ __('contacto.name') }} <sup>*</sup></label>
                    <input required type="text" name="nombre" id="nombre" maxlength="255" wire:model.lazy="nombre">
                </div>
                <div class="caja-flex" style="gap:15px;">
                    <div class="form-item">
                        <label for="">{{ __('contacto.email') }} <sup>*</sup></label>
                        <input required type="email" name="email" id="email" maxlength="255"
                            wire:model.lazy="email">
                    </div>
                    <div class="form-item">
                        <label for="">{{ __('contacto.phone') }} <sup>*</sup></label>
                        <input required type="tel" pattern="[0-9]{10,15}" maxlength="15" name="telefono"
                            id="telefono" wire:model.lazy="telefono">
                    </div>
                </div>
                <div class="form-item">
                    <label for="mensaje">{{ __('contacto.mensaje') }}</label>
                    <textarea name="mensaje" id="mensaje" wire:model.lazy="mensaje"></textarea>
                </div>
                <div class="form-item input-acepto">
                    <input type="checkbox" required name="terminos" id="terminos" value="1"
                        title="{{ __('form_talento.privacy') }}">
                    <label for="terminos">
                        <a href="{{ route('terminos-privacidad') }}" target="_blanck">
                            {{ __('form_talento.privacy') }}
                        </a>
                    </label>
                </div>
                <div class="form-item caja-flex" style="justify-content: space-between;">
                    <div style="width: 230px;">
                        <small><i>*{{ __('contacto.parrafo') }}</i></small>
                    </div>
                    <button class="btn-form" wire:loading.class="pre">
                        <i class="fa-solid fa-circle-notch fa-spin"></i>
                        {{ __('contacto.adelante') }}
                    </button>
                </div>
            </form>
        </div>
    </content>
</div>
