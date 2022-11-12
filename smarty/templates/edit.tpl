{include file="header.tpl"}
{include file="js.tpl"}
{include file="nav.tpl"}

<div class="container-fluid">
    <h4>Podstrona edit</h4>
</div>



<div class="container-fluid d-flex justify-content-center">


    <form action="" method="post" enctype="multipart/form-data" class="col-md-7">
        <legend class="text-center">Edycja</legend>
        <div class="row">
            <div class="col-md-8">
                <div class="form-group row mt-2">
                    <label for="addTitle" class="col-sm-3 col-form-label">Tytuł</label>
                    <div class="col-sm-9">
                        <input type="text" id="addTitle" class="form-control" name="addTitle" placeholder="Tytuł"
                            value="{$book.0.title}">
                    </div>
                </div>
                <div class="form-group row mt-2">
                    <label for="addAuthor" class="col-sm-3 col-form-label">Autor</label>
                    <div class="col-sm-9">
                        <input type="text" id="addAuthor" class="form-control" name="addAuthor" placeholder="Autor"
                            value="{$book.0.author}">
                    </div>
                </div>
                <div class="form-group row mt-2">
                    <label for="totalPages" class="col-sm-3 col-form-label">Liczba stron</label>
                    <div class="col-sm-9">
                        <input type="number" id="totalPages" class="form-control" name="totalPages"
                            placeholder="Liczba stron" value="{$book.0.pages}">
                    </div>
                </div>
                <div class="form-group row mt-2">
                    <label for="releaseDate" class="col-sm-3 col-form-label">Rok publikacji</label>
                    <div class="col-sm-9">
                        <input type="number" id="releaseDate" class="form-control" name="releaseDate"
                            placeholder="Rok publikacji" value="{$book.0.year}">
                    </div>
                </div>
                <div class="form-group row mt-2">
                    <label for="bookImage" class="col-sm-3 col-form-label">Okładka</label>
                    <div class="col-sm-9">
                        <input type="file" id="bookImage" class="form-control" name="bookImage" value="plik">
                    </div>
                </div>
                <div class="row justify-content-center mt-2">
                    <input type="hidden" name="editId" value="{$book.0.id}">
                    <button type="submit" class="btn btn-primary col-md-3">Zatwierdź</button>

                </div>
            </div>
            <div class="col-md-4 mt-2">
            <img src="assets/images/{$book.0.image}" alt="" style="height:300px;">
            </div>
        </div>
    </form>
</div>
{include file="footer.tpl"}