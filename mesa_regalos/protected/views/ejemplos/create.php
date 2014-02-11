<form>
    <fieldset>
        <legend>Fieldset</legend>

        <div class="row">
            <div class="large-12 columns">
                <label>Input Label</label>
                <input type="text" placeholder="large-12.columns">
            </div>
        </div>

        <div class="row">
            <div class="large-4 columns">
                <label>Input Label</label>
                <input type="text" placeholder="large-4.columns">
            </div>
            <div class="large-4 columns">
                <label>Input Label</label>
                <input type="text" placeholder="large-4.columns">
            </div>
            <div class="large-4 columns">
                <div class="row collapse">
                    <label>Input Label</label>
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
                <label>Textarea Label</label>
                <textarea placeholder="small-12.columns"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="large-12 columns">
                <input type="submit" value="Guardar" />
            </div>
        </div>
    </fieldset>
</form>




<div style="width: 50px;"></div>

<form data-abide>
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
  <button type="submit">Submit</button>
</form>