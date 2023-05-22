<section id="contacto">
    <div class="contacto_flex">
        <div class="contacto_text">
            <h1>Contacto</h1>
            <p>Si tenes alguna duda o sugerencia, <br> no dudes en escribirnos.</p>
        </div>
        <div class="div-form">
            <form class="form" action="vistas/procesar.php" method="post" enctype="multipart/form-data">
                <label for="Name" style="display:none">Nombre</label>
                <input type="text" class="form__name input" placeholder="Nombre">
                <label for="Name" style="display:none">Email</label>
                <input type="email" class="form__email input" placeholder="Email:">
                <label for="Name" style="display:none">Mensaje</label>
                <textarea class="form__message input" placeholder="Mensaje"></textarea>
                <button type="submit" class="form__submit"> Enviar </button>
            </form>
        </div>
    </div>
</section>