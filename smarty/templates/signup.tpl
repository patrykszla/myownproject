{include file="header.tpl"}
{include file="js.tpl"}
{include file="nav.tpl"}


<div class="container-fluid d-flex justify-content-center">
    {* <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> *}
    <form action="" method="post" class='col-md-6'>
        <legend class="text-center">Zarejestruj się</legend>
        <div class="form-group row">
            <label for="name" class="col-sm-3 col-form-label">Imię:</label>
            <div class="col-sm-9">
                <input type="text" id="name" class="form-control" name="name" placeholder="Imię">
            </div>
        </div>
        <div class="form-group row mt-2">
            <label for="surname" class="col-sm-3 col-form-label">Nazwisko:</label>
            <div class="col-sm-9">
                <input type="text" id="surname" class="form-control" name="surname" placeholder="Nazwisko">
            </div>
        </div>

        <div class="form-group row mt-2">
            <label for="email" class="col-sm-3 col-form-label">Email:</label>
            <div class="col-sm-9">
                <input type="email" id="email" class="form-control" name="email" placeholder="Email">
            </div>
        </div>

        <div class="form-group row mt-2">
            <label for="password" class="col-sm-3 col-form-label">Hasło</label>
            <div class="col-sm-9">
                <input type="password" id="password" class="form-control" name="password" placeholder="Hasło">
            </div>
        </div>
        <div class="form-group row mt-2">
        <label for="confirmPassword" class="col-sm-3 col-form-label">Potwierdź hasło:</label>
        <div class="col-sm-9">
            <input type="password" id="confirmPassword" class="form-control" name="confirmPassword" placeholder="Powtórz hasło">
        </div>
    </div>
        <div class="row justify-content-center mt-2">
            <input type="hidden" name="signup" value="signup">
            <button type="submit" class="btn btn-primary col-md-3">Zatwierdź</button>

        </div>
    </form>
</div>
{include file="footer.tpl"}