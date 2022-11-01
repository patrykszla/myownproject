{include file="header.tpl"}
{include file="js.tpl"}
{include file="nav.tpl"}

<div class="container-fluid">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="mt-3 col-md-12 d-flex justify-content-between">
                    <h2>Nasze ksiązki</h2>
                    <a href="?page=addnewbook" class="btn btn-success"><i class="bi bi-plus-lg"></i>Dodaj nową</a>
                </div>
            </div>

            <table class="table thead-dark table-striped">
                <thead>
                    <tr>

                        <th scope="col">#</th>
                        <th scope="col">Tytuł</th>
                        <th scope="col">Autor</th>
                        <th scope="col">Liczba stron</th>
                        <th scope="col">Rok wydania</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach item=book name=books from=$books}
                        <td>{$book.id}</td>
                        <td>{$book.title}</td>
                        <td>{$book.author}</td>
                        <td>{$book.pages}</td>
                        <td>{$book.year}</td>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>
</div>
{include file="footer.tpl"}