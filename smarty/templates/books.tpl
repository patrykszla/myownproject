{include file="header.tpl"}
{include file="js.tpl"}
{include file="nav.tpl"}

<div class="container-fluid">
    <div class="wrapper ">
        <div class="container-fluid">
            <div class="row">
                <div class="mt-3 col-md-12 d-flex justify-content-between">
                    <h2>Nasze ksiązki</h2>
                    {if $search != ''}
                        <h6>Szukana fraza: {$search}</h6>
                    {/if}
                    <a href="?page=addnewbook" class="btn btn-success" style="height:40px;"><i class="bi bi-plus-lg"></i>Dodaj nową</a>
                </div>
            </div>

            <table class="table thead-dark table-striped">
                <thead>
                    <tr>

                        <th scope="col">#</th>
                        <th scope="col">Zdjecie</th>
                        <th scope="col">Tytuł</th>
                        <th scope="col">Autor</th>
                        <th scope="col">Liczba stron</th>
                        <th scope="col">Rok wydania</th>
                        <th scope="col">Akcja</th>
                    </tr>
                </thead>
                <tbody>


                    {foreach item=book name=books from=$books}
                        <tr>
                            <td>{$book.id}</td>
                            <td><img src="assets/images/{$book.image}" style="height: 70px"></img> </td>
                            <td>{$book.title}</td>
                            <td>{$book.author}</td>
                            <td>{$book.pages}</td>
                            <td>{$book.year}</td>
                            <td>
                                <a href="?page=edit&book_id={$book.id}"><i class="bi bi-pencil"></i></a>
                                <a href="?page=delete&book_id={$book.id}"><i class="bi bi-trash3"></i></a>
                            </td>
                        </tr>
                    {/foreach}

                </tbody>
            </table>
        </div>
    </div>
</div>
{include file="footer.tpl"}