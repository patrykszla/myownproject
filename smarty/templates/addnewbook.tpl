{include file="header.tpl"}
{include file="js.tpl"}
{include file="nav.tpl"}

<div class="container-fluid d-flex justify-content-center">


    <form action="" method="post" class="col-md-5">
        <legend class="text-center">Dodaj książke</legend>
        <div class="form-row">
            <div class="form-group  text-center">
                <label for="addTitle">Tytuł</label>
                <input type="text" id="addTitle" class="form-control" name="addTitle" placeholder="Tytuł">
            </div>
        </div>
        <div class="row justify-content-center mt-2">

            <button type="submit" class="btn btn-primary col-md-3">Submit</button>

        </div>
    </form>
</div>
{include file="footer.tpl"}