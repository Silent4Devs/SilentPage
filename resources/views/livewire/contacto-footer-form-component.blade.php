<div class="correo-footer">
    <span class="title-second">{{ __('newsletter.title') }}</span>
    <p>
        {{ __('newsletter.meta_desc') }}
    </p>
    <form id="form-newsletter" wire:submit.prevent="submitForm" enctype="multipart/form-data">
        <input id="email-newsletter" required type="email" name="email" maxlength="255"
            placeholder="{{ __('newsletter.mail') }}" wire:model.lazy="email">
        <button title="{{ __('newsletter.enviar_correo') }}" wire:loading.class="pre">
            <i class="fa-solid fa-circle-notch fa-spin"></i>
            {{ __('newsletter.enviar_correo') }}
        </button>
    </form>
</div>
