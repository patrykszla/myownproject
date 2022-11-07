{include file="header.tpl"}
{include file="js.tpl"}
{include file="nav.tpl"}

<div class="container-fluid">
    <h4>Podstrona edit</h4>
</div>

<form action="" method="post" enctype="multipart/form-data" class="col-md-5">
<legend class="text-center">Dodaj książke</legend>
<div class="form-group row">
    <label for="addTitle" class="col-sm-3 col-form-label">Tytuł</label>
    <div class="col-sm-9">
        <input type="text" id="addTitle" class="form-control" name="addTitle" placeholder="Tytuł">
    </div>
</div>
</form>
{include file="footer.tpl"}