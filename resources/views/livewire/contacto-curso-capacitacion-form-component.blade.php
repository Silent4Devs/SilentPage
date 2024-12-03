<div>
    <contetn class="content-limit">
        <div class="card">
            <span class="title-second">{{ __('contacto.cursos') }}</span>
            <p class="parrafo-psolinf">
                {{ __('contacto.cursos_form') }}
            </p>
            <form wire:submit.prevent="submitForm" enctype="multipart/form-data">
                <div class="form-item">
                    <label for="nombre">{{ __('contacto.name') }} <sup>*</sup></label>
                    <input required type="text" name="nombre" id="nombre" maxlength="255" wire:model.lazy="nombre">
                </div>
                <div class="form-item">
                    <label for="email">{{ __('contacto.email') }} <sup>*</sup></label>
                    <input required type="email" name="email" id="email" maxlength="255"
                        wire:model.lazy="email">
                </div>
                <div class="form-item">
                    <label for="telefono">{{ __('contacto.phone') }} <sup>*</sup></label>
                    <input required type="tel" pattern="[0-9]{10,15}" maxlength="15" name="telefono" id="telefono"
                        wire:model.lazy="telefono">
                </div>
                <div class="form-item">
                    <label for="organizacion">{{ __('contacto.escuela') }} <sup>*</sup></label>
                    <input required type="text" name="organizacion" id="organizacion" maxlength="255"
                        wire:model.lazy="organizacion">
                </div>
                <div class="form-item">
                    <label for="mensaje">{{ __('contacto.mensaje') }}</label>
                    <textarea name="mensaje" id="mensaje" wire:model.lazy="mensaje"></textarea>
                </div>
                <div class="form-item caja-flex">
                    <div class="btn-form-second" onclick="desplazar(-100)">{{ __('contacto.atras') }}</div>
                    <button class="btn-form" wire:loading.class="pre">
                        <i class="fa-solid fa-circle-notch fa-spin"></i>
                        {{ __('contacto.adelante') }}
                    </button>
                </div>
            </form>
            <p class="parrafo-psolinf" style="margin-top: 60px;">
                <small><i>*{{ __('contacto.parrafo') }}</i></small>
            </p>
        </div>
    </contetn>
</div>
