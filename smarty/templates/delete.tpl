{include file="header.tpl"}
{include file="js.tpl"}
{include file="nav.tpl"}

<div class="container-fluid text-center">
    <h4>Podstrona delete</h4>
</div>



<div class="container-fluid">

    <table class="table thead-dark table-striped">
        <thead>
            <tr>

                <th scope="col">#</th>
                <th scope="col">Zdjecie</th>
                <th scope="col">Tytuł</th>
                <th scope="col">Autor</th>
                <th scope="col">Liczba stron</th>
                <th scope="col">Rok wydania</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{$book.0.id}</td>
                <td><img src="assets/images/{$book.0.image}" style="height: 70px"></img> </td>
                <td>{$book.0.title}</td>
                <td>{$book.0.author}</td>
                <td>{$book.0.pages}</td>
                <td>{$book.0.year}</td>

            </tr>
        </tbody>
    </table>
    <div class="container-fluid d-flex justify-content-center">
        <div class="flex-column">
            <div class="row">
                <p>Czy na pewno chcesz usunąc rekord?</p>
            </div>
            
                <form action="" method="post">
                <div class="row d-flex justify-content-around">
                    <input type="hidden" name="bookId" value={$book.0.id}>
                    <button type="submit" class="btn btn-danger col-md-3" name="submitYes" value="yes">Tak</button>
                    <button type="submit" class="btn btn-primary col-md-3" name="submitNo" value="no">Nie</button>
                    </div>
                </form>
            
        </div>
    </div>

</div>
{include file="footer.tpl"}