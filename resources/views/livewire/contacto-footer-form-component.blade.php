<div class="correo-footer">
    <h2>Únete a nuestro Newsletter</h2>
    <p>
        Suscríbete para estar informado acerca de nuestros servicios, productos y desarrollos en el mundo de la
        Ciberseguridad
    </p>
    <form id="form-newsletter" wire:submit.prevent="submitForm" enctype="multipart/form-data">
        <input id="email-newsletter" required type="email" name="email" maxlength="255"
            placeholder="Dirección de correo" wire:model.lazy="email">
        <button>
            <i class="fa-solid fa-circle-notch fa-spin"></i>
            Envíar
        </button>
    </form>
</div>
