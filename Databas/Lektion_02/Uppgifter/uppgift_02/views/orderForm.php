<form action="create.php" class="row" method="post">
    <div class="form-group col-md-6 my-2">
        <label for="name" class="form-label">Namn</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group col-md-6 my-2">
        <label for="email" class="form-label">E-post</label>
        <input type="text" class="form-control" name="email">
    </div>
    <div class="form-group col-md-12 my-2">
        <label for="textMessage" class="form-label">Meddelande</label>
        <textarea class="form-control" name="textMessage" rows="6"></textarea>
    </div>

    <div class="form-group col-md-12">
        <button type="submit" class="btn btn-success my-5 btn-lg">Skicka meddelandet</button>
    </div>

</form>