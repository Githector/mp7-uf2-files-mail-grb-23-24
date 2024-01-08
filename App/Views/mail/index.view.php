<form action="/mail/enviar" class="col-11 col-md-8 col-lg-6 col-xl-4 mx-auto border m-3 p-3 bg-light" method="post">
<div class="mb-3">
    <label for="nom" class="form-label">Nom:</label>
    <input type="text" class="form-control" id="nom" name="nom" required>
</div>
<div class="mb-3">
    <label for="email" class="form-label">E-mail</label>
    <input type="email" class="form-control" id="email" name="email" required>
</div>
<div class="mb-3">
    <label for="msg" class="form-label">Missatge</label>
    <textarea class="form-control" id="msg" name="msg" rows="4" required></textarea>
</div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>

