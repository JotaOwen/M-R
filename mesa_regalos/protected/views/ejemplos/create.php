<script type="text/javascript">
    $(document).on('ready', function() {
        $("#select").select2();
        $("#address8").select2();
    }); 
</script>

<form>
    <fieldset>
        <legend>
            Nuevo Usuario
        </legend>

        <div class="row">
            <div class="large-12 columns">
                <label>Nombre</label>
                <input type="text" placeholder="large-12.columns">
            </div>
        </div>

        <div class="row">
            <div class="large-4 columns">
                <label>Apellidos</label>
                <input type="text" placeholder="large-4.columns">
            </div>

            <div class="large-4 columns">
                <label>Direccion</label>
                <input type="text" placeholder="large-4.columns">
            </div>

            <div class="large-4 columns">
                <label>Direccion</label>
                <select id="Evento_hotelsede_id" name="Evento[hotelsede_id]"
                data-placeholder="Selecciona un Organizadaor"
                class="chosen-select-no-results"
                tabindex="17">
                    <option value="">Selecciona Hotel</option>
                    <option value="nuevo-hotel">Nuevo Hotel</option>
                </select>
            </div>

            <div class="large-4 columns">
                <div class="row collapse">
                    <label>Correo</label>
                    <div class="small-9 columns">
                        <input type="text" placeholder="small-9.columns">
                    </div>
                    <div class="small-3 columns">
                        <span class="postfix">.com</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="large-12 columns">
                <label>Comentarios</label>
                <textarea placeholder="small-12.columns"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="large-12 columns">
                <input type="submit" class="button [radius round]" value="Guardar" />
            </div>
        </div>
    </fieldset>
</form>

<div style="width: 50px;"></div>

<form data-abide>
    <fieldset>
        <legend>
            Login
        </legend>
        <div class="name-field">
            <label>Your name <small>required</small>
                <input type="text" required pattern="[a-zA-Z]+">
            </label>
            <small class="error">Name is required and must be a string.</small>
        </div>
        <div class="email-field">
            <label>Email <small>required</small>
                <input type="email" required>
            </label>
            <small class="error">An email address is required.</small>
        </div>
        <button type="submit">
            Submit
        </button>
    </fieldset>
</form>