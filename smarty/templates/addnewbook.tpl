{include file="header.tpl"}
{include file="js.tpl"}
{include file="nav.tpl"}

<div class="container-fluid d-flex justify-content-center">


    <form action="" method="post" enctype="multipart/form-data" class="col-md-5">
        <legend class="text-center">Dodaj książke</legend>
        <div class="form-group row">
            <label for="addTitle" class="col-sm-3 col-form-label">Tytuł</label>
            <div class="col-sm-9">
                <input type="text" id="addTitle" class="form-control" name="addTitle" placeholder="Tytuł">
            </div>
        </div>
        <div class="form-group row mt-2">
            <label for="addAuthor" class="col-sm-3 col-form-label">Autor</label>
            <div class="col-sm-9">
                <input type="text" id="addAuthor" class="form-control" name="addAuthor" placeholder="Autor">
            </div>
        </div>
        <div class="form-group row mt-2">
            <label for="totalPages" class="col-sm-3 col-form-label">Liczba stron</label>
            <div class="col-sm-9">
                <input type="number" id="totalPages" class="form-control" name="totalPages" placeholder="Liczba stron">
            </div>
        </div>
        <div class="form-group row mt-2">
            <label for="releaseDate" class="col-sm-3 col-form-label">Rok publikacji</label>
            <div class="col-sm-9">
                <input type="number" id="releaseDate" class="form-control" name="releaseDate" placeholder="Rok publikacji">
            </div>
        </div>
        <div class="form-group row mt-2">
            <label for="bookImage" class="col-sm-3 col-form-label">Okładka</label>
            <div class="col-sm-9">
                <input type="file" id="bookImage" class="form-control" name="bookImage" value="plik">
            </div>
        </div>


        <div class="row justify-content-center mt-2">
            <input type="hidden">
            <button type="submit" class="btn btn-primary col-md-3">Zatwierdź</button>

        </div>
    </form>
</div>
{include file="footer.tpl"}